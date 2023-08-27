<?php

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

Route::get('/', function () {
    return view('posts');
});

Route :: get ('posts/{post}', function($post) {    
    $path =   __DIR__ . "/../resources/posts/{$post}.html" ;


    if (! file_exists($path)) {
        abort(404);
    }

  $post =  cache()->remember("posts.{$post}" , 1200, function() use ($path) {

        var_dump('file_get_contents');

        return file_get_contents($path);
    });
    
    $post = file_get_contents($path);

    return view ('post', [
        'post' => $post
    ]);

});
        
     
    

