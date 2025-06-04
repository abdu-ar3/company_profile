@extends('admin.layout')

@section('content')
<div class="container">
    <h4>Tambah Berita</h4>
    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="judul" class="form-control" placeholder="Judul Berita" required>
        </div>
        <div class="input-group mb-3">
            <input type="file" name="gambar" class="form-control" placeholder="Upload Gambar">
        </div>
        <div class="input-group mb-3">
            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Singkat" required></textarea>
        </div>
        <div class="input-group mb-3">
            <select name="jenis_berita" class="form-control" required>
                <option value="">-- Pilih Jenis Berita --</option>
                <option value="internal">Internal</option>
                <option value="eksternal">Eksternal</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <textarea name="detail_berita" class="form-control" placeholder="Detail Berita (khusus Internal)"></textarea>
        </div>
        <div class="input-group mb-3">
            <input type="text" name="link_berita" class="form-control" placeholder="Link Eksternal (khusus Eksternal)">
        </div>
        <div class="input-group mb-3">
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
