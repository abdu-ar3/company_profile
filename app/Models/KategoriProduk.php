<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;
    
    protected $table = 'kategori_produks';

    protected $fillable = ['nama_kategori'];

    public function produks()
    {
        return $this->hasMany(Produk::class, 'kategori_id');
    }
}
