<?php

namespace LaravelMySlug;

use Illuminate\Support\ServiceProvider;

class SlugProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        include __DIR__ . '/web.php';
        $this->app->make('LaravelMySlug\Slug');

    }
}
