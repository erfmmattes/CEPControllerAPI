<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CepService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register the CepService
        $this->app->singleton(CepService::class, function ($app) {
            return new CepService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}