<?php

namespace Wpkenpachi\WpDecodeJson;

use Illuminate\Support\ServiceProvider;

class WPDecodeJsonProvider extends ServiceProvider
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
        $this->app()->make('Wpkenpachi\WpDecodeJson\DecodeJson');
    }
}
