<?php

namespace qwerty\Fontawesome;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Font extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getTable()
    {
        return config('font.table_name');
    }

    protected static function newFactory()
    {
        return \Database\Factories\FontFactory::new();
    }

}