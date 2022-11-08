<?php

namespace Kometsoft\Tabler;

use Illuminate\Support\ServiceProvider;

class TablerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/src/config/tabler.php',
            'tabler'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/src/resources/views', 'tabler');

        $this->publishes([
            __DIR__ . '/src/config/tabler.php' => config_path('tabler.php'),
        ]);

        $this->publishes([
            __DIR__ . '/src/public/vendor' => public_path('vendor'),
        ]);

        $this->publishes([
            __DIR__ . '/stubs/resources/views' => resource_path('views'),
        ]);
    }
}
