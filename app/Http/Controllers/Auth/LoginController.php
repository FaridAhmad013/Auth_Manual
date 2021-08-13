<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
       $attr = request()->validate([
            'email' => ['email', 'required'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($attr, request('remember'))){
            return redirect()->intended();
        }
        throw ValidationException::withMessages([
            'email' => 'Your Email Wrong',
            'password' => 'Your Password Wrong',

        ]);
    }
}
