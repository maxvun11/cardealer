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
        // Validate input fields
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $key = 'login-attempts:' . $request->ip();

        if (RateLimiter::tooManyAttempts($key, 2)) {
            $secondsRemaining = RateLimiter::availableIn($key); // Get remaining time
            return back()->withErrors([
                'email' => "Too many login attempts. Please wait $secondsRemaining seconds.",
                'lockout_time' => $secondsRemaining // Pass lockout time to frontend
            ]);
        }

        $remember = $request->has('remember');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            session(['user_role' => Auth::user()->role]);
            
            if ($remember) 
            {
                Cookie::queue('user_role', Auth::user()->role, 4320); // Store for 3 days
            } else {
                Cookie::queue(Cookie::forget('user_role')); // Remove cookie if unchecked
            }

            return redirect()->intended('/');
        }
        RateLimiter::hit($key, 60);

        // Redirect back with error message
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }
}

