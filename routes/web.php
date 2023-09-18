<?php

use App\Http\Controllers\PostsController;
use App\Models\Category;
use App\Models\Post;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[\App\Http\Controllers\PostsController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [\App\Http\Controllers\PostsController::class, 'show']);

Route::get('authors/{author:username}', function( \App\Models\User $author) {
    return view('posts', [
        'posts' =>$author->posts,
        'categories'=> Category::all()
    ]);
});
