<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelamar',
        'email',
        'file_cv',
        'posisi_dilamar',
        'tanggal_lamar',
    ];

    public function lowongan()
    {
        return $this->belongsTo(Lowongan::class, 'posisi_dilamar');
    }
}
