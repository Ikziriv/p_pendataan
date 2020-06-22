<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = [
    	'path',
        'filename', 
        'caption', 
        'tautan',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($galeri) {
            $galeri->user_id = auth()->user()->id;
        });
    }
}
