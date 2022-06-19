<?php

namespace qwerty\Fontawesome;

use Illuminate\Support\ServiceProvider;

class QwertyFontAwesomeServiceProvider extends ServiceProvider
{
    public function boot()
    {

        $this->resolveCommands();
        if ($this->app->runningInConsole()) {
            $this->publishResources();
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/font.php', 'font');

        $this->app->bind('font', function () {
            return new FontMain();
        });

    }

    private function resolveCommands()
    {

        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\FontCommand::class,
            ]);
        }
    }

    protected function publishResources()
    {
        $this->publishes([
            __DIR__ . '/../config/font.php' => config_path('font.php'),
        ], 'font-config');

        $this->publishes([
            __DIR__.'/../database/migrations/0000_00_00_000000_create_fonts_table.php' => database_path('migrations/0000_00_00_000000_create_fonts_table.php'),
        ], 'font-migrations');

    }

}