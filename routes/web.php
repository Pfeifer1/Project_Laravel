<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/*
Route::get('/', function() {
    return view('Home');
})->name('home');

Route::get('blog', function() {
    $posts = [
        ['id' => 1, 'title' => 'PHP','slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel','slug' => 'laravel']
    ];
    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('blog/{slug}', function($slug) {
    $post = $slug;
    // return $slug;
    return view('post', ['post' => $post]);
})->name('post');

Route::get('buscar', function(Request $request) {
    return $request->all();
});
*/

/**
Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('blog', [PageController::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');
*/

Route::controller(PageController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{post:slug}', 'post')->name('post');
});

Route::get('buscar', function(Request $request) {
    return $request->all();
});