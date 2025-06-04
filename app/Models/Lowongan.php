<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'posisi',
        'kualifikasi',
        'deskripsi',
        'batas_lamaran',
    ];

    public function lamarans()
    {
        return $this->hasMany(Lamaran::class, 'posisi_dilamar');
    }
}
