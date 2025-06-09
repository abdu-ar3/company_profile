@extends('layouts.guest')

@section('content')
<div class="form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-container">
                    <h2>Lamaran Kerja</h2>

                    <!-- Lamaran Form -->
                    <form id="lamaranForm" method="POST" action="{{ route('lamaran.store') }}" enctype="multipart/form-data" data-toggle="validator" data-focus="false">
                        @csrf
                        <div class="form-group">
                            <label for="nama_pelamar">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_pelamar" name="nama_pelamar" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="posisi_dilamar">Posisi yang Dilamar</label>
                            <input type="text" class="form-control" id="posisi_dilamar" name="posisi_dilamar" required>
                        </div>
                        <div class="form-group">
                            <label for="file_cv">Upload CV</label>
                            <input type="file" class="form-control" id="file_cv" name="file_cv" accept=".pdf,.doc,.docx" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lamar">Tanggal Lamaran</label>
                            <input type="date" class="form-control" id="tanggal_lamar" name="tanggal_lamar" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="nterms" value="Agreed-to-Terms" required> Saya telah membaca dan setuju dengan <a href="privacy-policy.html">Kebijakan Privasi</a> dan <a href="terms-conditions.html">Syarat dan Ketentuan</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Kirim Lamaran</button>
                        </div>
                        <div class="form-message">
                            <div id="nmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of lamaran form -->

                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->

    </div> <!-- end of container -->
</div>

@endsection
