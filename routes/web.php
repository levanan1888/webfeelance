<?php

use Illuminate\Support\Facades\Route;
use Stephenjude\FilamentBlog\Models\Post;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/gioi-thieu', function () {
    return view('about');
})->name('about');

Route::get('/lien-he', function () {
    return view('contact');
})->name('contact');

// Projects specific routes
Route::get('/du-an', function () {
    return view('blog.index');
})->name('projects');

Route::get('/du-an/{id}', function ($id) {
    return view('blog.show');
})->name('blog.show');

// Blog Routes using Plugin Model
Route::get('/blog', function () {
    $posts = Post::published()->orderBy('published_at', 'desc')->paginate(9);
    return view('posts.index', compact('posts'));
})->name('posts.index');

Route::get('/blog/{slug}', function ($slug) {
    $post = Post::where('slug', $slug)->published()->firstOrFail();
    return view('posts.show', compact('post'));
})->name('posts.show');
