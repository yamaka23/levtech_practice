<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator; //追記
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Paginator::useBootstrapFive();//追記
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        //
    }
}
