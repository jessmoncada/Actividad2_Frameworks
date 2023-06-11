<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Registre cualquier servicio de aplicación
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap cualquier servicio de aplicación.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    }
}
