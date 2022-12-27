<?php

namespace Kometsoft\Tabler;

use Illuminate\Support\ServiceProvider;
use App\Console\Commands\InstallCommand;

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
            __DIR__ . '/config/tabler.php',
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
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'tabler');

        // $this->loadTranslationsFrom(__DIR__ . '/lang', 'tabler');

        // Config file
        $this->publishes([
            __DIR__ . '/config/tabler.php' => config_path('tabler.php'),
        ], 'laravel-tabler-config');

        // Assets
        $this->publishes([
            __DIR__ . '/../stubs/resources/sass' => resource_path('sass'),
            __DIR__ . '/../stubs/resources/js' => resource_path('js'),
            __DIR__ . '/../stubs/vite.config.js' => base_path('vite.config.js'),
            __DIR__ . '/../stubs/public/vendor' => public_path('vendor'),
        ], 'laravel-tabler-assets');

        // Stubs
        $this->publishes([
            __DIR__ . '/../stubs/app' => app_path(),
            __DIR__ . '/../stubs/resources/views' => resource_path('views'),
            __DIR__ . '/../stubs/lang' => lang_path(),
            __DIR__ . '/../stubs/stubs' => base_path('stubs'),
        ], 'laravel-tabler-stubs');

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }
}
