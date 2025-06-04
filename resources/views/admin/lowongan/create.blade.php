@extends('admin.layout')

@section('content')
<div class="container">
    <h3>Tambah Lowongan</h3>
    <form action="{{ route('admin.lowongan.store') }}" method="POST">
        @csrf

        <div class="input-group mb-3">
            <input type="text" name="posisi" class="form-control" placeholder="Posisi" required>
        </div>

        <div class="input-group mb-3">
            <textarea name="kualifikasi" class="form-control" placeholder="Kualifikasi" rows="3" required></textarea>
        </div>

        <div class="input-group mb-3">
            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" rows="3" required></textarea>
        </div>

        <div class="input-group mb-3">
            <input type="date" name="batas_lamaran" class="form-control" required>
        </div>

        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
