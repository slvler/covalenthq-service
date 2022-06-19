<?php

namespace qwerty\Fontawesome\Database\Seeders;


use Illuminate\Database\Seeder;
use qwerty\Fontawesome\Font;


class FontSeeder extends Seeder
{

    public function run()
    {
        Font::factory()->count(5)->create();
    }

}