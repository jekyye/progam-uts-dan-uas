<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KoleksiBuku extends Model
{
    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun',
        'kategori',
    ];

    protected $casts = [
        'tahun' => 'integer',
    ];
}
