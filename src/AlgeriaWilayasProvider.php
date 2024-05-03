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
        // $this->publishes([
        //     __DIR__.'/data/Wilaya_Of_Algeria.json' => base_path('resources/data/Wilaya_Of_Algeria.json'),
        // ]);
        
    }
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->mergeConfigFrom(
        //     __DIR__.'/config/AlgeriaWilayas.php', 'AlgeriaWilayas'
        // );
    }
}