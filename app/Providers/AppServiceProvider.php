<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        Gate::define('Admin', function (User $user) { 
           return $user->statut == 'adminaccess';
        });
        Gate::define('Teacher', function (User $user) { 
            if ($user->statut == 'teacheraccess' || $user->statut == 'adminaccess') {
               
                return true;
            }
            return false;
        });
    }
}
