<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
        'jenis_berita',
        'detail_berita',
        'link_berita',
        'tanggal',
    ];
}
