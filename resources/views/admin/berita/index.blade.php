@extends('admin.layout')

@section('content')
<div class="container">
    <a href="{{ route('admin.berita.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    @foreach ($beritas as $berita)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $berita->judul }}</h5>
                <p>{{ $berita->deskripsi }}</p>
                <p><strong>Jenis:</strong> {{ $berita->jenis_berita }}</p>
                <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }}</p>

                @if ($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" width="150" alt="Gambar Berita">
                @endif

                <div class="mt-2">
                    <a href="{{ route('admin.berita.edit', $berita->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
