<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    protected $fillable = [
    	'nik_mutasi',
        'name', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'jk', 
        'alamat', 
        'desa_kelurahan',
        'kecamatan',
        'kabutpaten',
        'provinsi',
        'rt',
        'rw',
        'agama',
        'pendidikan_terakhir',
        'pekerjaan',
        'status_perkawinan',
        'status',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($mutasi) {
            $mutasi->user_id = auth()->user()->id;
        });
    }
}
