<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Build;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\BuildStep;

class BuildController extends Controller
{
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
}
