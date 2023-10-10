<?php

use App\Http\Controllers\PostsController;
use App\Models\Category;
use App\Models\Post;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\PostsController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [\App\Http\Controllers\PostsController::class, 'show']);

Route::get('register', [RegisterController::class,'create']);
Route::post('register', [RegisterController::class,'store']);

