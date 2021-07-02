<?php

namespace App\Providers;

use App\Http\Actions\Contracts\ConnectionInterface;
use App\Http\Actions\Contracts\DecodeResponseInterface;
use App\Http\Actions\CurlConnection;
use App\Http\Actions\DecodeResponse;
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
        //curl
        $this->app->bind(ConnectionInterface::class,CurlConnection::class);
        //decode json
        $this->app->bind(DecodeResponseInterface::class,DecodeResponse::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
