@extends('admin.layout')

@section('content')
<div class="container">
    <h3>Daftar Lowongan</h3>
    <a href="{{ route('admin.lowongan.create') }}" class="btn btn-primary mb-3">Tambah Lowongan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Posisi</th>
                <th>Batas Lamaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lowongans as $item)
            <tr>
                <td>{{ $item->posisi }}</td>
                <td>{{ $item->batas_lamaran }}</td>
                <td>
                    <a href="{{ route('admin.lowongan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.lowongan.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
