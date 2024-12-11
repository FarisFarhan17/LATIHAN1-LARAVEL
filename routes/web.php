<?php

use Illuminate\Support\Facades\Route;

Route::get('/signin', function () {
    return 'Signin Form';
});

Route::post('/signin', function () {
    return 'Signin Data Processed';
});

Route::get('/signup', function () {
    return 'Signup Form';
});

Route::post('/signup', function () {
    return 'Signup Data Processed';
});

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


