<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::share('environmentLabel', environment_label());

        if (app()->environment('production')) {
            \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
        }
    }
}
