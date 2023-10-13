<?php

use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SessionController;
use App\Models\Category;
use App\Models\Post;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\PostsController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [\App\Http\Controllers\PostsController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentController::class, 'store']);

Route::get('register', [RegisterController::class,'create'])->middleware('guest');
Route::post('register', [RegisterController::class,'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');

