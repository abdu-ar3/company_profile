@extends('admin.layout')

@section('content')

<div class="container">
    <h4>Edit Berita</h4>
    <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="input-group mb-3">
            <input type="text" name="judul" class="form-control" placeholder="Judul Berita" value="{{ old('judul', $berita->judul) }}" required>
        </div>

        <div class="input-group mb-3">
            @if ($berita->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $berita->image) }}" alt="Gambar Berita" width="150">
                </div>
            @endif
            <input type="file" name="image" class="form-control">
        </div>

        <div class="input-group mb-3">
            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Singkat" required>{{ old('deskripsi', $berita->deskripsi) }}</textarea>
        </div>

        <div class="input-group mb-3">
            <select name="jenis_berita" class="form-control" required>
                <option value="">-- Pilih Jenis Berita --</option>
                <option value="internal" {{ old('jenis_berita', $berita->jenis_berita) === 'internal' ? 'selected' : '' }}>Internal</option>
                <option value="eksternal" {{ old('jenis_berita', $berita->jenis_berita) === 'eksternal' ? 'selected' : '' }}>Eksternal</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <textarea name="detail_berita" class="form-control" placeholder="Detail Berita (khusus Internal)">{{ old('detail_berita', $berita->detail_berita) }}</textarea>
        </div>

        <div class="input-group mb-3">
            <input type="text" name="link_berita" class="form-control" placeholder="Link Eksternal (khusus Eksternal)" value="{{ old('link_berita', $berita->link_berita) }}">
        </div>

        <div class="input-group mb-3">
            <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal', $berita->tanggal) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.berita.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
