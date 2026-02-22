<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class AuthorController extends Controller
{
    public function createBuild()
    {
        if (!Auth::user()->isAuthor() && !Auth::user()->isAdmin()) {
            return redirect()->route('home')->with('error', 'Only authors can access this page.');
        }

        $categories = Category::orderBy('title')->get();
        return view('create', compact('categories'));
    }
}
