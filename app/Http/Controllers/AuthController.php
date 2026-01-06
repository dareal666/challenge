<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Auth;

class AuthController {

    public function login(): View
    {
        return view('login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect(route('jokes.index'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password' => 'check password if correct'
        ])->onlyInput('email'); 
    }
}