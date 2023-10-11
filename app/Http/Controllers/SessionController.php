<?php

namespace App\Http\Controllers;



use Nette\Schema\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if (auth()->attempt($attributes))
        session()->regenerate();
        {
            return redirect('/')->with('success', 'Welcome Back ');
        }
        throw \Illuminate\Validation\ValidationException::withMessages([
            'email'=>'Your provided credintals could not verified'
        ]);
    }
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Bye');
    }
    //
}
