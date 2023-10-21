<?php

namespace App\Http\Controllers;

use App\Services\MailChimpNewsLetter;
use App\Services\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(NewsLetter $newsletter)
    {

        request()->validate(['email'=>'required|email']);

        try {
            $newsletter->subscribe(request('email'));
        }
        catch (\Exception $e) {
            throw ValidationException::withMessages([
                'email'=>'This Email can not be added to our Newsletter list..'
            ]);
        }

        return redirect('/')
            ->with('success', 'Done.');

        // TODO: Implement __invoke() method.
    }
}
