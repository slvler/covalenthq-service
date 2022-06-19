<?php

namespace qwerty\Fontawesome\Console;

use Illuminate\Console\Command;
use qwerty\Fontawesome\Font;
use qwerty\Fontawesome\FontMain;

class FontCommand extends Command
{
    protected $signature = "font:list";

    protected $description = "font awesome font list";


    public function handle()
    {
        if (FontMain::migrationNotPublished())
        {
            return $this->warn('Please publish the migrations file by running ' .
                '\'php artisan vendor:publish --tag=font-migrations\'');
        }

        $headers = ['title', 'icon'];
        $users = Font::all(['title', 'icon'])->toArray();

        $this->table($headers, $users);

    }
}