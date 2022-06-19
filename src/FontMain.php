<?php

namespace qwerty\Fontawesome;



class FontMain {


    public static function migrationNotPublished()
    {
        return !file_exists(database_path('migrations/0000_00_00_000000_create_fonts_table.php'));
    }


}