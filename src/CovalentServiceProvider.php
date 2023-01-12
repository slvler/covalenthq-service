<?php


namespace slvlr\covalent;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container;

class CovalentServiceProvider extends ServiceProvider
{

    /*
     *
     *
     * klasik laravel provider işlemlerinin yapıldığı noktadır.
     *
     * lumen ve laravel için eklentiler ve kurulum yapılacak
     */


    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishResources();
        }
    }


    protected function publishResources()
    {
        $this->publishes([
            __DIR__.'/../config/covalent.php' => config_path('covalent.php'),
        ], 'covalent');
    }




}

