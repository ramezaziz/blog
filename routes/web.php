<?php

use App\Http\Controllers\PostsController;
use App\Models\Category;
use App\Models\Post;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\PostsController::class, 'index'])->name('home');
Route::get('posts/{post:slug}', [\App\Http\Controllers\PostsController::class, 'show']);


