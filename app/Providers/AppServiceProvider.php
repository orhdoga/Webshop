<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;
use App\Thumbnail;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /* View::composer('welcome', function ($view) {   When loading the welcome view..
            $view->with('thumbnails', Thumbnail::all());  The view composer takes this thumbnails 
        });                                               variable with it (which is equal to an
                                                          eloquent all() query). */
    }                                                     
}
