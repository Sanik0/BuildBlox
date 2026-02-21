<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function createBuild()
    {
        if (!Auth::user()->isAuthor()) {
            return redirect()->route('home')->with('error', 'Only authors can access this page.');
        }

        return view('create');
    }
}