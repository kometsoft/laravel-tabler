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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../stubs/resources/sass' => resource_path('sass'),
            __DIR__ . '/../stubs/resources/js' => resource_path('js'),
            __DIR__ . '/../stubs/vite.config.js' => base_path('vite.config.js'),
            __DIR__ . '/../stubs/public/vendor' => public_path('vendor'),
        ], 'laravel-tabler');

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }
}
