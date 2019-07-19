<?php

namespace Kindling\PDF\Providers;

use Illuminate\Support\ServiceProvider;

class KindlingPDFProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->registerDevDependencies();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerCommonResources();

        // if ($this->app->runningInConsole()) {
            
        // }
    }

    private function registerCommonResources()
    {
        // This publishes the config file if user runs vendor:publish
        // Config is Snappy, because the Laravel Snappy package we are wrapping
        // around looks for that.
        $this->publishes([
            __DIR__.'/../config/snappy.php' => config_path('snappy.php'),
        ]);
    }

    private function registerDevDependencies()
    {
        if (env('APP_DEBUG')) {
            // foreach (config('kindling.dev.providers') as $provider) {
            //     $this->app->register(
            //         $provider
            //     );
            // }
            
            // $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            // foreach (config('kindling.dev.aliases') as $key => $alias) {
            //     $loader->alias($key, $alias);
            // }
        }
    }
}
