<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KartuKeluarga extends Model
{
    protected $fillable = [
    	'warga_id',
        'nomor_keluarga', 
        'alamat', 
        'desa_kelurahan',
        'kecamatan',
        'kabutpaten',
        'provinsi',
        'rt',
        'rw',
        'kodepos',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($kk) {
            $kk->user_id = auth()->user()->id;
        });
    }
}
