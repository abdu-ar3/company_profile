@extends('admin.layout')

@section('content')
    <h1>Data Produk</h1>
    <a href="{{ route('admin.produk.create') }}">Tambah Produk</a>
    <table class="table table-striped">
        <tr>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        @foreach($produks as $row)
        <tr>
            <td>
                @if($row->gambar)
                    <img src="{{ asset('storage/' . $row->gambar) }}" width="100">
                @endif
            </td>
            <td>{{ $row->nama_produk }}</td>
            <td>{{ $row->kategori->nama_kategori ?? '-' }}</td>
            <td>Rp {{ number_format($row->harga, 0, ',', '.') }}</td>
            <td>
                <a href="{{ route('admin.produk.edit', $row->id) }}">Edit</a>
                <form method="POST" action="{{ route('admin.produk.destroy', $row->id) }}" style="display:inline;">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
