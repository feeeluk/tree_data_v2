<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
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
    public function boot(): void
    {
        $env = app()->environment();

        $environment = match ($env) {
            'local' => 'LOCAL - ',
            'test' => 'TEST - ',
            default => '',
        };

        View::share('environment', $environment);
    }
}
