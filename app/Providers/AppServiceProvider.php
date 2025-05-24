<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Observers\UserObserver;
use Illuminate\Support\Facades\View;

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
        User::observe(UserObserver::class);
        View::composer('layouts.navbars.sidebar', function ($view) {
        $view->with('pageSlug', request()->route() ? request()->route()->getName() : null);
    });
    }
    
}
