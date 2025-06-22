@extends('admin.layout')

@section('content')
<div class="container">
    <h3>Edit Lowongan</h3>
    <form action="{{ route('admin.lowongan.update', $lowongan) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="input-group mb-3">
            <input type="text" name="posisi" class="form-control" placeholder="Posisi" value="{{ old('posisi', $lowongan->posisi) }}" required>
        </div>

        <div class="input-group mb-3">
            <textarea name="kualifikasi" class="form-control" placeholder="Kualifikasi" rows="3" required>{{ old('kualifikasi', $lowongan->kualifikasi) }}</textarea>
        </div>

        <div class="input-group mb-3">
            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi" rows="3" required>{{ old('deskripsi', $lowongan->deskripsi) }}</textarea>
        </div>

        <div class="input-group mb-3">
            <input type="date" name="batas_lamaran" class="form-control" value="{{ old('batas_lamaran', $lowongan->batas_lamaran ? \Carbon\Carbon::parse($lowongan->batas_lamaran)->format('Y-m-d') : '') }}" required>
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="{{ route('admin.lowongan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
