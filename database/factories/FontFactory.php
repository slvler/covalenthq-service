<?php

use qwerty\Fontawesome\Font;


$factory->define(Font::class, function(Faker\Generator $faker){
    return [
        'title' => $faker->sentence,
        'icon' => $faker->paragraph,
    ];
});