<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Gate::define('isAdmin', function ($user) {
            return $user->role === 'admin';
        });

        {
            Schema::defaultStringLength(191);
        }

        Gate::define('update-car', function (User $user) {
            return $user->role === 'admin'; // Only admins can update cars
        });
    }

}
