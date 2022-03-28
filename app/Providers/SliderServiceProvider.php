<?php

namespace App\Providers;

use App\Models\Format;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;

class SliderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            "*",
            function ($view) {
                $hoy = date("Ymd");
                /* dd($hoy-1000); */
                $sliders = Post::where('action', 1)->get();
                /* dd($newproducts); */
                $view->with('sliders', $sliders);
            }
        );
    }
}
