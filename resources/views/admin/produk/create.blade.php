@extends('admin.layout')

@section('content')
    <h1>Tambah Produk</h1>

    <form method="POST" action="{{ route('admin.produk.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="input-group mb-3">
            <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" aria-label="Nama Produk">
        </div>

        <div class="input-group mb-3">
            <select name="kategori_id" class="form-select" aria-label="Kategori Produk">
                <option selected disabled>Pilih Kategori</option>
                @foreach($kategoris as $kat)
                    <option value="{{ $kat->id }}">{{ $kat->nama_kategori }}</option>
                @endforeach
            </select>
        </div>

        <div class="input-group mb-3">
            <input type="number" name="harga" class="form-control" placeholder="Harga Produk" aria-label="Harga Produk">
        </div>

        <div class="input-group mb-3">
            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Produk" aria-label="Deskripsi Produk" rows="3"></textarea>
        </div>

        <div class="input-group mb-3">
            <input type="file" name="gambar" class="form-control" aria-label="Upload Gambar">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
