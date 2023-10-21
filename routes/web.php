<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SessionController;
use App\Models\Category;
use App\Models\Post;
use App\Http\Controllers\RegisterController;
use App\Services\MailChimpNewsLetter;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

Route::get('/',[PostsController::class, 'index'])->name('home');

Route::get('posts/{post:slug}', [PostsController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentController::class, 'store']);

Route::post('newsletter', NewsletterController::class);

Route::get('register', [RegisterController::class,'create'])->middleware('guest');
Route::post('register', [RegisterController::class,'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('admin/posts/create', [PostsController::class, 'create'])->middleware('admin');

Route::post('admin/posts', [PostsController::class, 'store'])->middleware('admin');
