<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/builds', function () {
    return view('builds');
})->name('builds');

Route::get('/creation', function () {
    return view('creation');
})->name('creation');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/create', function () {
    return view('create');
})->name('create');

// REGISTER AND LOGIN ROUTES
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

// COMPONENT ROUTES
Route::get('/partials/footer', function () {
    return view('partials.footer');
});

Route::get('/partials/header', function () {
    return view('partials.header');
});

Route::get('/admin/partials/sidebar', function () {
    return view('admin.partials.sidebar');
});

Route::get('/partials/navigation', function () {
    return view('partials.navigation');
})->name('partials.navigation');

// ADMIN ROUTES
Route::get('/admin/home', function () {
    return view('admin.home');
})->name('admin.home');

Route::get('/admin/users', function () {
    return view('admin.users');
})->name('admin.users');

Route::get('/admin/categories', function () {
    return view('admin.categories');
})->name('admin.categories');

Route::get('/admin/builds', function () {
    return view('admin.builds');
})->name('admin.builds');


