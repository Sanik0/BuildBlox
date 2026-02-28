<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Build;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\BuildStep;
use App\Models\User;
use App\Models\Rating;
use App\Models\View;
use App\Models\Comment;

class BuildController extends Controller
{

    public function showBuild($build_id)
    {
        $build = Build::where('build_id', $build_id)->first();
        if (!$build) {
            return redirect()->route('home')->with('error', 'Build not found.');
        }

        $ip = request()->ip();
        $userId = Auth::id();

        $alreadyViewed = \App\Models\View::where('build_id', $build_id)
            ->where(function ($query) use ($userId, $ip) {
                if ($userId) {
                    $query->where('user_id', $userId);
                } else {
                    $query->where('ip_address', $ip);
                }
            })->exists();

        if (!$alreadyViewed) {
            \App\Models\View::create([
                'build_id' => $build_id,
                'user_id' => $userId,
                'ip_address' => $ip,
            ]);
        }

        $viewCount = \App\Models\View::where('build_id', $build_id)
            ->count();
        $steps = BuildStep::where('build_id', $build->build_id)
            ->paginate(6);
        $author = User::where('user_id', $build->user_id)
            ->first();
        $averageRating = Rating::where('build_id', $build_id)
            ->avg('rating');
        $comments = Comment::where('build_id', $build_id)
            ->whereNull('parent_id')
            ->with(['user', 'replies.user'])
            ->latest()
            ->get();
        $categoryBuilds = Build::where('category_id', $build->category_id)
            ->where('build_id', '!=', $build_id)
            ->withAvg('ratings', 'rating')
            ->withCount('views')
            ->latest()
            ->take(4)
            ->get();
        $userRating = Auth::check() ? Rating::where('build_id', $build_id)
            ->where('user_id', Auth::id())
            ->value('rating') : null;
        return view('creation', compact('build', 'steps', 'author', 'averageRating', 'userRating', 'categoryBuilds', 'viewCount', 'comments'));
    }

    public function create()
    {
        if (!Auth::user()->isAuthor() && !Auth::user()->isAdmin()) {
            return redirect()->route('home')->with('error', 'Only authors can access this page.');
        }

        $categories = Category::orderBy('title')->get();
        return view('create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,category_id',
            'materials' => 'required|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'steps.*' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $imagePath = null;
        if ($request->hasFile('cover_image')) {
            $imagePath = $request->file('cover_image')->store('images/build', 'public');
        }

        $build = Build::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'materials' => $request->materials,
            'cover_image' => $imagePath,
            'user_id' => Auth::id()
        ]);

        if ($request->hasFile('steps')) {
            foreach ($request->file('steps') as $index => $stepImage) {
                $stepPath = $stepImage->store('images/steps', 'public');

                BuildStep::create([
                    'build_id' => $build->id,
                    'step_number' => $index + 1,
                    'step_image' => $stepPath,
                ]);
            }
        }

        return redirect()->route('profile.show', Auth::user()->username)->with('success', 'Build created successfully.');
    }

    public function rate(Request $request, $build_id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Rating::updateOrCreate(
            ['build_id' => $build_id, 'user_id' => Auth::id()],
            ['rating' => $request->rating]
        );

        return redirect()->back()->with('success', 'Rating submitted!');
    }
}
