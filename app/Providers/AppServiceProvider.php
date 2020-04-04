<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Basket;

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
      view()->composer('layouts.header', function($view){
        $auth = auth()->user();
        if($auth != null){
          $baskets=Basket::where('user_id', auth()->user()->id)->where('status', '0')->get();
          $view->with([
            'baskets'=>$baskets,
          ]);
        }else{
          $view->with([
            'baskets'=>null,
          ]);
        }
      });
    }
}
