<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
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
        view()->composer('layouts.layout', function ($view) {
            if (Auth::check()) {
                $user = Auth::user();
                $view->with('count', \App\Cart::where('user_id', $user->id)->count());
            }

        });
    }
}
