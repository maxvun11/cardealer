@extends('layouts.app')

@section('title', 'Login Page')

@section('content')
    <div class="container" id="booking-container">
        <h1 class="text-center mb-4">Login</h1>

        @if ($errors->any())
            @php
                $hasLockoutError = false;
            @endphp
            @foreach ($errors->all() as $error)
                @if (str_contains($error, 'Too many login attempts'))
                    @php
                        $hasLockoutError = true;
                    @endphp
                @endif
            @endforeach

            @if (!$hasLockoutError) <!-- Show error box only if there's NO lockout error -->
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            @if (!str_contains($error, 'Too many login attempts')) <!-- Exclude lockout errors -->
                                <li>{{ $error }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endif
        @endif

        @if ($errors->has('lockout_time'))
            <div id="countdown-message" class="alert alert-danger text-center">
                <p>Too many login attempts. Please try again in <span id="countdown">{{ $errors->first('lockout_time') }}</span> seconds.</p>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" id="appointment-form">
            @csrf

            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="remember-me-container">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>

            <button type="submit">Login</button>
        </form>

        <div class="text-center mt-3">
            <a href="{{ route('registerPage') }}" class="btn btn-link">New user? Sign up</a>
        </div>
    </div>
@endsection

<style>
    .remember-me-container {
        display: flex;
        align-items: center; /* Aligns checkbox with label */
        justify-content: center; /* Centers horizontally */
    }

    .remember-me-container input[type="checkbox"] {
        width: 18px;
        height: 18px;
        margin-right: 8px;
        position: relative;
        top: -4px; /* Moves checkbox up slightly */
    }

    .remember-me-container label {
        font-size: 16px;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var lockoutTime = {{ $errors->first('lockout_time') ?? 0 }};
        var loginBtn = document.querySelector("button[type='submit']");
        var countdownElement = document.getElementById("countdown");
        var countdownMessage = document.getElementById("countdown-message");

        if (lockoutTime > 0) {
            loginBtn.disabled = true; // Disable login button
            countdownElement.innerText = lockoutTime; // Initialize countdown display

            var interval = setInterval(function() {
                if (lockoutTime <= 0) {
                    clearInterval(interval);
                    loginBtn.disabled = false; // Re-enable login button
                    countdownMessage.style.display = "none"; // Hide countdown section
                } else {
                    countdownElement.innerText = lockoutTime--;
                }
            }, 1000);
        }
    });
</script>
