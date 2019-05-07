<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motivation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'URL','Description',
    ];
}
