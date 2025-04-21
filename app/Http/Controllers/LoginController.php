<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $key = 'login-attempts:' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, 2)) {
            $secondsRemaining = RateLimiter::availableIn($key); 
            return back()->withErrors([
                'email' => "Too many login attempts. Please wait $secondsRemaining seconds.",
                'lockout_time' => $secondsRemaining 
            ]);
        }

        $remember = $request->has('remember');

        
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            session(['user_role' => Auth::user()->role]);
            
            if ($remember) 
            {
                Cookie::queue('user_role', Auth::user()->role, 4320); 
            } else {
                Cookie::queue(Cookie::forget('user_role')); 
            }

            return redirect()->intended('/');
        }
        RateLimiter::hit($key, 60);

       
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }
}

