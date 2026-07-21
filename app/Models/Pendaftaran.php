<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'sekolah_asal',
        'nilai_mtk',
        'nilai_bing',
        'nilai_bindo',
        'jurusan1',
        'jurusan2',
        'alasan',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'nilai_mtk' => 'decimal:2',
        'nilai_bing' => 'decimal:2',
        'nilai_bindo' => 'decimal:2',
    ];
}
