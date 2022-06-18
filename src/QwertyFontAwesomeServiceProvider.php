<?php

namespace qwerty\Fontawesome;

use Illuminate\Support\ServiceProvider;

class QwertyFontAwesomeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerResources();
        $this->registerPublishg();

        if ($this->app->runningInConsole()){

        }
    }

    public function register()
    {
        $this->commands([
            Console\FontCommand::class,
        ]);
    }

    private function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    protected function registerPublishg()
    {
        $this->publishes([
            __DIR__.'/../database/migrations/0000_00_00_000000_create_fonts_table.php' => database_path('migrations/0000_00_00_000000_create_fonts_table.php'),
        ], 'migrations');
    }


}