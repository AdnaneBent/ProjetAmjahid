<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ImageResize;

class ImageManagerProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
     public function register()
    {
        $this->app->singleton('ImageResize',function(){
        return new ImageResize;
        });
    }
}
