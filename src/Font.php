<?php

namespace qwerty\Fontawesome;

use Illuminate\Database\Eloquent\Model;

class Font extends Model
{
    protected $guarded = [];

    public $fillable = ['title', 'icon'];
}