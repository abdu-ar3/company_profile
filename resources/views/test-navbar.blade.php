<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 4.5.2 CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Font Awesome (untuk ikon bars/times) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

  <style>
    body{padding-top:72px}
    .navbar-custom{background:#fff!important;box-shadow:0 2px 6px rgba(0,0,0,.05)}
    .navbar-custom .nav-link{color:#1e56a0!important;font-weight:500;border-radius:8px;padding:.5rem 1rem}
    .navbar-custom .nav-link:hover,.navbar-custom .nav-link.active{background:#e7f0fd;color:#0d3b66!important}
    /* Toggle hamburger */
    .navbar-light .navbar-toggler{border:0}
    .navbar-toggler .fa-times{display:none}
    .navbar-toggler[aria-expanded="true"] .fa-bars{display:none}
    .navbar-toggler[aria-expanded="true"] .fa-times{display:inline-block}
    @media (max-width: 991.98px){
      .navbar-collapse{background:#fff;border-radius:12px;box-shadow:0 12px 24px rgba(0,0,0,.08);padding:.75rem 0;margin-top:.5rem}
    }
  </style>

  <title>Test Navbar</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <strong>PT Lestari Elektrik</strong>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
      <i class="fas fa-times"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h1>Testing Navbar</h1>
  <p>Coba kecilkan layar dan klik tombol 3 garis di kanan atas.</p>
</div>

<!-- Script: urutan wajib -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
