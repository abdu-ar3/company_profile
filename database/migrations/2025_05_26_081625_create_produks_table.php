<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
              $table->id();
                $table->string('nama_produk');
                $table->text('deskripsi');
                $table->string('gambar');
                $table->foreignId('kategori_id')->constrained('kategori_produks')->onDelete('cascade');
                $table->decimal('harga', 15, 2)->nullable();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
