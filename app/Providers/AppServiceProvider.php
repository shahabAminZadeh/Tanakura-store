<?php

namespace App\Providers;



use App\Support\Basket\Basket;
use App\Support\Cost\BasketCost;
use App\Support\Cost\Contracts\CostInterface;
use App\Support\Cost\ShippingCost;
use App\Support\storage\Contracts\StorageInterFace;
use App\Support\Storage\SessionStorage;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;




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
        $this->app->bind(StorageInterFace::class,function ($app)
        {
            return new SessionStorage('cart');
        });
        $this->app->bind(CostInterface::class , function ($app){
            $basketCost=new BasketCost($app->make(Basket::class));
            $shippingCost= new ShippingCost($basketCost);
            return $shippingCost;
        });

    }
}
