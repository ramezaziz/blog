<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {
       $attributes = request()->validate([
           'name'=>'required',
           'username'=>'required|min:3|max:255',
           'password'=>'required|min:7|max:255',
           'email'=>'required|max:255|email'
       ]);
//       $attributes['password']=bcrypt($attributes['password']);
       User::create($attributes);
       return redirect('/');

    }
}
