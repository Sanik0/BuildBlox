<?php

// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Build;
use App\Models\Category;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users', compact('users'));
    }

    public function builds()
    {
        $builds = Build::with('user')->latest()->paginate(10);
        return view('admin.builds', compact('builds'));
    }

    public function categories()
    {
        $categories = Category::withCount('builds')->latest()->paginate(10);
        return view('admin.categories', compact('categories'));
    }
}