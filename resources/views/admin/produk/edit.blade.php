@extends('admin.layout')

@section('content')
    <h1>Edit Produk</h1>

    <form method="POST" action="{{ route('admin.produk.update', $produk) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="input-group mb-3">
            <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk"
                value="{{ old('nama_produk', $produk->nama_produk) }}">
        </div>

        <div class="input-group mb-3">
            <select name="kategori_id" class="form-select" aria-label="Kategori Produk">
                <option disabled selected>Pilih Kategori</option>
                @foreach($kategoris as $kat)
                    <option value="{{ $kat->id }}" {{ old('kategori_id', $produk->kategori_id) == $kat->id ? 'selected' : '' }}>
                        {{ $kat->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="input-group mb-3">
            <input type="number" name="harga" class="form-control" placeholder="Harga Produk"
                value="{{ old('harga', $produk->harga) }}">
        </div>

        <div class="input-group mb-3">
            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Produk" rows="3">{{ old('deskripsi', $produk->deskripsi) }}</textarea>
        </div>

        <div class="input-group mb-3">
            @if($produk->gambar)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="Gambar Produk" width="150">
                </div>
            @endif
            <input type="file" name="gambar" class="form-control" aria-label="Upload Gambar Baru">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
