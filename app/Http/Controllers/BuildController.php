<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Build;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
        ]);   

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $imagePath = null;
        if ($request->hasFile('cover_image')) {
            $imagePath = $request->file('cover_image')->store('build', 'public');
        }

        Build::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'materials' => $request->materials,
            'cover_image' => $imagePath,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('profile.show', Auth::user()->username)->with('success', 'Build created successfully.');
    }

}
