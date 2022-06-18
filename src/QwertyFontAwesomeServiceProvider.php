<?php

namespace qwerty\Fontawesome;

use Illuminate\Support\ServiceProvider;

class QwertyFontAwesomeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerResources();
    }

    public function register()
    {

    }

    private function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

}