<?php

namespace App\Http\Controllers;

use App\Models\Build;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $topBuilds = Build::withAvg('ratings', 'rating')
            ->withCount('views')
            ->orderByDesc('views_count')
            ->orderByDesc('ratings_avg_rating')
            ->take(4)
            ->get();

        $categories = Category::withCount('builds')->get();

        $medievalBuilds = Build::whereHas('category', function ($query) {
            $query->where('title', 'Medieval');
        })
            ->withAvg('ratings', 'rating')
            ->withCount('views')
            ->orderByDesc('views_count')
            ->take(4)
            ->get();

        return view('home', compact('topBuilds', 'categories', 'medievalBuilds'));
    }

}
