<?php

namespace App\Providers;

use App\Support\storage\contracts\StorageInterFace;
use App\Support\storage\SessionStorage;
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
            return new SessionStorage('card');
        });

    }
}
