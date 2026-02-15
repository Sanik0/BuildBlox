<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'register'])->name('signup.submit');
Route::get('/signin', [AuthController::class, 'showLoginForm'])->name('signin');
Route::post('/signin', [AuthController::class, 'login'])->name('signin.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// PROFILE ROUTES
Route::get('/profile/{username}', [AuthController::class, 'showProfile'])->name('profile.show');


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


