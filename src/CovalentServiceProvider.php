<?php

namespace slvler\covalent;

use Illuminate\Support\ServiceProvider;

class CovalentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishConfig();
        }
    }

    protected function publishConfig()
    {
        $this->publishes([
            __DIR__.'/../config/covalent.php' => config_path('covalent.php'),
        ], 'covalent');
    }
}
