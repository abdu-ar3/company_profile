@extends('admin.layout')

@section('content')
<div class="container">
    <h3>Edit Profil Perusahaan</h3>
    <form action="{{ route('admin.profil.update', $profil) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <input type="text" name="judul" class="form-control" value="{{ old('judul', $profil->judul) }}" required>
        </div>
        <div class="input-group mb-3">
            <select name="jenis" class="form-select" required>
                <option value="visi" {{ $profil->jenis == 'visi' ? 'selected' : '' }}>Visi</option>
                <option value="misi" {{ $profil->jenis == 'misi' ? 'selected' : '' }}>Misi</option>
                <option value="sejarah" {{ $profil->jenis == 'sejarah' ? 'selected' : '' }}>Sejarah</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <textarea name="isi" rows="5" class="form-control" required>{{ old('isi', $profil->isi) }}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
