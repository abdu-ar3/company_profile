
{{-- resources/views/layouts/app.blade.php --}}
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- SEO/OG meta opsional --}}
  <meta name="description" content="@yield('meta_description','Company Profile PT Lestari Elektrik')">
  <meta name="author" content="PT Lestari Elektrik">
  <meta property="og:title" content="@yield('og_title','PT Lestari Elektrik')">
  <meta property="og:description" content="@yield('og_description','Perusahaan elektronik & peralatan industri berkualitas tinggi')">
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:image" content="{{ asset('assets/img/custom/profile.png') }}">

  {{-- CSRF untuk kebutuhan AJAX --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- Bootstrap 4.5.2 & Font Awesome (CDN) --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

  {{-- Styles kustom kamu --}}
  <link href="{{ asset('assets/user/css/swiper.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/css/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/css/styles.css') }}" rel="stylesheet">

  {{-- Favicon --}}
  <link rel="icon" href="{{ asset('assets/img/custom/profile.png') }}">

  {{-- Style tambahan untuk navbar & mobile --}}
  <style>
    /* Ruang untuk fixed-top supaya konten tidak ketutup */
    body { padding-top: 72px; }

    /* Navbar look */
    .navbar-custom {
      background-color: #ffffff !important;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      z-index: 1040; /* di atas header/banner */
    }

    .navbar-custom .nav-link {
      position: relative;
      font-size: 1.05rem;
      font-weight: 500;
      color: #1e56a0 !important;
      padding: 8px 16px;
      border-radius: 8px;
      transition: all .3s ease;
    }

    .navbar-custom .nav-link:hover,
    .navbar-custom .nav-link.active {
      background-color: #e7f0fd;
      color: #0d3b66 !important;
      font-weight: 600;
    }

    /* Garis bawah animasi (opsional) */
    .navbar-custom .nav-link:hover::after,
    .navbar-custom .nav-link.active::after {
      content: '';
      position: absolute; left: 0; bottom: -6px;
      height: 2px; width: 100%; background: #3273dc;
    }

    /* Toggler (hamburger) pakai Font Awesome swap bars<->times */
    .navbar-light .navbar-toggler { border: 0; outline: none !important; }
    .navbar-toggler .fa-times { display: none; }
    .navbar-toggler[aria-expanded="true"] .fa-bars { display: none; }
    .navbar-toggler[aria-expanded="true"] .fa-times { display: inline-block; }

    /* Dropdown area saat mobile */
    @media (max-width: 991.98px){
      .navbar-collapse{
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 12px 24px rgba(0,0,0,0.08);
        padding: .75rem 0;
        margin-top: .5rem;
      }
      .navbar-nav .nav-link { padding: 10px 1rem; }
    }
  </style>

  <title>@yield('title','PT Lestari Elektrik')</title>
  @stack('styles')
</head>
<body>

  {{-- ================= NAVBAR ================= --}}
  <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
        <img class="img-fluid" src="{{ asset('assets/img/custom/profile.png') }}" alt="logo" width="120">
      </a>

      {{-- Tombol hamburger --}}
      <button class="navbar-toggler" type="button"
              data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </button>

      {{-- Menu --}}
      <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav ml-auto align-items-lg-center">
  <li class="nav-item">
    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
  </li>

  <li class="nav-item">
    <a class="nav-link page-scroll" href="{{ url('/#tentang-kami') }}">Tentang Kami</a>
  </li>

  <li class="nav-item">
    <a class="nav-link page-scroll" href="{{ url('/#produk') }}">Produk & Layanan</a>
  </li>

  <li class="nav-item">
    <a class="nav-link page-scroll" href="{{ url('/#karier') }}">Karier</a>
  </li>

  <li class="nav-item">
    <a class="nav-link page-scroll" href="{{ url('/#berita') }}">Berita</a>
  </li>

  <li class="nav-item">
    <a class="nav-link page-scroll" href="{{ url('/#kontak') }}">Kontak</a>
  </li>

  <li class="nav-item">
    <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
  </li>
</ul>

      </div>
    </div>
  </nav>
  {{-- =============== /NAVBAR ================ --}}

 
 <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1>Selamat Datang di PT Lestari Elektrik</h1>
                            <p class="p-large">Kami adalah perusahaan yang menyediakan produk elektronik dan peralatan industri berkualitas tinggi.</p>
                            <a class="btn-solid-lg page-scroll" href="#produk">Lihat Produk</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 ml-2">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="{{ asset('assets/img/custom/remove.png') }}" alt="alternative" width="500PX">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

  {{-- ================== MAIN CONTENT ================== --}}
  <main role="main">
    @yield('content')
  </main>

  {{-- ================== FOOTER (opsional) ================== --}}
  @hasSection('footer')
    @yield('footer')
  @else
    <footer class="mt-5">
      <div class="container py-4">
        <div class="row">
          <div class="col-md-4">
            <h5>About PT Lestari Elektrik</h5>
            <p class="mb-0">Electric Market</p>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <h5>Address</h5>
            <p class="mb-0">
              City, Golden Boulevard, Blk. F1 Jl. Komp. BSD No.9, Lengkong Karya, Tangerang,
              Kota Tangerang Selatan, Banten 15310
            </p>
          </div>
        </div>
        <hr>
        <div class="text-center small text-muted">
          Copyright © {{ now()->year }} PT Lestari Elektrik
        </div>
      </div>
    </footer>
  @endif

  {{-- ================== SCRIPTS ================== --}}
  {{-- Urutan WAJIB: jQuery -> Popper v1 -> Bootstrap 4 --}}
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>

  {{-- Plugin lain SETELAH Bootstrap (pakai aset lokal kamu) --}}
  <script src="{{ asset('assets/user/js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/user/js/swiper.min.js') }}"></script>
  <script src="{{ asset('assets/user/js/jquery.magnific-popup.js') }}"></script>
  <script src="{{ asset('assets/user/js/validator.min.js') }}"></script>
  <script src="{{ asset('assets/user/js/scripts.js') }}"></script>

  {{-- Tempat untuk script tambahan per-halaman --}}
  @stack('scripts')

</body>
</html>

