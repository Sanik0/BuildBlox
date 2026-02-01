<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/builds', function () {
    return view('builds');
});

Route::get('/creation', function () {
    return view('creation');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/create', function () {
    return view('create');
});

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

// ADMIN ROUTES
Route::get('/admin/home', function () {
    return view('admin.home');
});


