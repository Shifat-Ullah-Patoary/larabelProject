<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class Authcontroller extends Controller
{
     public function showLoginForm()
    {
        return view('auth.login');
    }

       public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // login logic
    }
}
