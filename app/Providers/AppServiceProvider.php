<?php

namespace App\Providers;


use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('isAdmin',function($user){
            return $user->role_id == '1';
        });
        Gate::define('isPromotor',function($user){
            return $user->role_id == '2';
        });
        Gate::define('isMember',function($user){
            return $user->role_id == '3';
        });
    }
}
