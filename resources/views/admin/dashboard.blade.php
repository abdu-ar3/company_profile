@extends('admin.layout')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">


@section('content')
<div class="container">
    <h3 class="mb-4">Dashboard</h3>

    <div class="row g-4">
    <div class="col-md-3">
        <div class="card text-white bg-info h-100">
            <div class="card-body d-flex flex-column align-items-center text-center">
                <i class="fas fa-box fa-3x mb-2"></i>
                <h5 class="card-title">Produk</h5>
                <p class="card-text fs-4">{{ $jumlahProduk }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-white bg-success h-100">
            <div class="card-body d-flex flex-column align-items-center text-center">
                <i class="fas fa-bullhorn fa-3x mb-2"></i>
                <h5 class="card-title">Lowongan</h5>
                <p class="card-text fs-4">{{ $jumlahLowongan }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-white bg-warning h-100">
            <div class="card-body d-flex flex-column align-items-center text-center">
                <i class="fas fa-envelope-open-text fa-3x mb-2"></i>
                <h5 class="card-title">Lamaran</h5>
                <p class="card-text fs-4">{{ $jumlahLamaran }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-white bg-danger h-100">
            <div class="card-body d-flex flex-column align-items-center text-center">
                <i class="fas fa-newspaper fa-3x mb-2"></i>
                <h5 class="card-title">Berita</h5>
                <p class="card-text fs-4">{{ $jumlahBerita }}</p>
            </div>
        </div>
    </div>
</div>

</div>
@endsection
