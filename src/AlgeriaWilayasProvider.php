<?php

namespace Abdo\AlgeriaWilayas;

use Illuminate\Support\ServiceProvider;

/**
 * The AlgeriaWilayasProvider class is a service provider for the AlgeriaWilayas package.
 */
class AlgeriaWilayasProvider extends ServiceProvider{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->publishes([
            __DIR__.'/data/Wilaya_Of_Algeria.json' => base_path('storage/data/Wilaya_Of_Algeria.json'),
            __DIR__.'/seeders/AlgeriaWilayaSeeder.php' => database_path('seeders/AlgeriaWilayaSeeder.php'),
        ], 'seeders');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}