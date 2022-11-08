<?php

namespace Tabler\Src\App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            base_path('tabler/src/config/tabssssler.php'),
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
        $this->loadViewsFrom(base_path('tabler/src/resources/views'), 'tabler');

        $this->publishes([
            base_path('tabler/src/config/tabler.php') => config_path('tabler.php'),
        ]);

        $this->publishes([
            base_path('tabler/src/public/vendor') => public_path('vendor'),
        ]);

        $this->publishes([
            base_path('tabler/src/stubs/resource/views') => resource_path('views'),
        ]);
    }
}
