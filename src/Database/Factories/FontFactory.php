<?php

namespace qwerty\Fontawesome\Database\Factories;

use qwerty\Fontawesome\Font;
use Illuminate\Database\Eloquent\Factories\Factory;

class FontFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Font::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'icon' => $this->faker->text,
        ];
    }
}