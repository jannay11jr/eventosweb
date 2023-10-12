<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

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
        Route::resourceVerbs([
            'index' => 'listar',
            'create' => 'crear',
            'store' => 'guardar',
            'show' => 'mostrar',
            'edit' => 'editar',
            'update' => 'actualizar',
            'destroy' => 'eliminar'
        ]);
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }
}
