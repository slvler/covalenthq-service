<?php

namespace qwerty\Fontawesome\Tests;


use qwerty\Fontawesome\Font;

use Illuminate\Foundation\Testing\RefreshDatabase;

class SaveFontsTest extends TestCase
{

    use RefreshDatabase;
    /**
     * @test
     */
    public function save_font_create_with_factory()
    {
       $font = factory(Font::class)->create();

       $this->assertCount("1", Font::all());
    }

}