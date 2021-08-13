<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attr = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $attr['password'] = bcrypt(request()->password);

        User::create($attr);

        Auth::attempt(request()->only('email', 'password'));

        return redirect('/dashboard');
    }
}
