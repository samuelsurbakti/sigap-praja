<?php

namespace App\Providers;

use Illuminate\Support\Number;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Number::useLocale('id');
        Blade::componentNamespace('App\\View\\Components', 'ui');
        Blade::anonymousComponentPath(resource_path('views/ui/'), 'ui');
    }
}
