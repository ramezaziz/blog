<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

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
        return view('posts.index', [
            'posts' =>Post::latest()->filter
            (request(['search', 'category' , 'author']))
             ->paginate(3)->withQueryString()
        ]);
    }
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {

        $attributes = request()->validate([
           'title'    => 'required',
           'slug'     => ['required', Rule::unique('posts', 'slug')],
           'thumbnail'=> 'required|image',
           'body'     => 'required',
           'excerpt'  => 'required',
           'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect('/');
    }

}
