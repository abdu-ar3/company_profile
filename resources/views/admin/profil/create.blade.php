@extends('admin.layout')

@section('content')
<div class="container">
    <h3>Tambah Profil Perusahaan</h3>
    <form action="{{ route('admin.profil.store') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="judul" class="form-control" placeholder="Judul" required>
        </div>
        <div class="input-group mb-3">
            <select name="jenis" class="form-select" required>
                <option value="">Pilih Jenis</option>
                <option value="visi">Visi</option>
                <option value="misi">Misi</option>
                <option value="sejarah">Sejarah</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <textarea name="isi" rows="5" class="form-control" placeholder="Isi Profil" required></textarea>
        </div>
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
