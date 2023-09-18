<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest();
        if (request('search')) {
            $posts
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');

        }
        return view('posts', [
            'posts' =>Post::latest()->filter(request(['search']))->get(),
            'categories' => Category::all(),
            'currentCategory'=> Category::firstWhere('slug',request('category'))
        ]);
    }
    public function show(Post $post)
    {
        return view('post', [
            'post' => $post
        ]);
    }
}
