<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Auth;
use App\Http\Controllers\UserController;

Route::get('/signin', [UserController::class, 'showLoginForm']);
Route::post('/signin', [UserController::class, 'login']);

Route::get('/signup', [UserController::class, 'showRegisterForm']);
Route::post('/signup', [UserController::class, 'register']);


Route::get('/', function () {
    return 'Homepage';
});

Route::get('/blog', function () {
    return 'Blog List';
});

Route::get('/blog/{slug}', function ($slug) {
    return "Blog Detail: $slug";
});

Route::get('/category/{slug}', function ($slug) {
    return "Category: $slug";
});

Route::get('/author/{username}', function ($username) {
    return "Author: $username";
});

Route::get('/privacy-policy', function () {
    return 'Privacy Policy';
});

Route::get('/blog/{blogId}', function ($blogId) {
    $title = request()->query('title', 'Untitled');
    $content = request()->query('content', 'No content available');
    return "Blog ID: $blogId, Title: $title, Content: $content";
});

Route::get('/profile', function () {
    return view('profile');
})->middleware(Auth::class);
