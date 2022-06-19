<?php

namespace qwerty\Fontawesome\Facedes;

use Illuminate\Support\Facades\Facade;

class FontFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'font';
    }
}