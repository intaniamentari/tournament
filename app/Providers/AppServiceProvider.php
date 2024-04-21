<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Carousel;
use App\Models\Navbar;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $navbar = Navbar::first();
        $carousel = Carousel::first();
        $about = About::first();

        // Share to many views
        View::share('navbar', $navbar);
        View::share('carousel', $carousel);
        View::share('about', $about);
    }
}
