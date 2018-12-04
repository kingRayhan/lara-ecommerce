<?php

namespace App\Providers;

use App\Cart;
use App\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.sidebar', function ($view) {
            $view->with('categories', Category::all());
        });
        view()->composer('partials.header', function ($view) {
            $oldCart = session()->has('cart') ? session()->get('cart') : null;
            $cart = new Cart($oldCart);
            $view->with('cart', $cart);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
