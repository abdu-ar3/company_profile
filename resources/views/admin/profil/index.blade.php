@extends('admin.layout')

@section('content')
<div class="container">
    <h3>Profil Perusahaan</h3>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <a href="{{ route('admin.profil.create') }}" class="btn btn-primary mb-3">Tambah Profil</a>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Jenis</th>
                <th>Isi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($profils as $row)
            <tr>
                <td>{{ $row->judul }}</td>
                <td><span class="badge bg-info">{{ $row->jenis }}</span></td>
                <td>{{ Str::limit($row->isi, 100) }}</td>
                <td>
                    <a href="{{ route('admin.profil.edit', $row) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.profil.destroy', $row) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="4" class="text-center">Belum ada data.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
