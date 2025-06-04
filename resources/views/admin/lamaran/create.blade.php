@extends('admin.layout')

@section('content')
<div class="container">
    <h3>Tambah Lamaran</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Ada beberapa masalah dengan inputan Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.lamaran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="input-group mb-3">
            <input type="text" name="nama_pelamar" class="form-control" placeholder="Nama Pelamar" required>
        </div>

        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="input-group mb-3">
            <select name="posisi_dilamar" class="form-control" required>
                <option value="">-- Pilih Posisi --</option>
                @foreach($lowongans as $lowongan)
                <option value="{{ $lowongan->id }}">{{ $lowongan->posisi }}</option>
                @endforeach
            </select>
        </div>

        <div class="input-group mb-3">
            <input type="date" name="tanggal_lamar" class="form-control" required>
        </div>

        <div class="input-group mb-3">
            <input type="file" name="file_cv" class="form-control" required>
        </div>

        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
