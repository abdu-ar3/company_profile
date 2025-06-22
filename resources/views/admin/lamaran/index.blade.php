@extends('admin.layout')

@section('content')
<div class="container">
    <h3>Data Lamaran</h3>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    <a href="{{ route('admin.lamaran.create') }}" class="btn btn-primary mb-3">Tambah Lamaran</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Posisi Dilamar</th>
                <th>Tanggal Lamar</th>
                <th>CV</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lamarans as $item)
            <tr>
                <td>{{ $item->nama_pelamar }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->lowongan->posisi ?? 'N/A' }}</td>
                <td>{{ $item->tanggal_lamar }}</td>
                <td>
                    <a href="{{ asset('storage/' . $item->file_cv) }}" target="_blank">Lihat CV</a>
                </td>
                <td>
                    <form action="{{ route('admin.lamaran.destroy', $item->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
