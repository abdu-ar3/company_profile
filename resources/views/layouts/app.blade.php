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

  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- Bootstrap 4.5.2 & Font Awesome (CDN) --}}
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

  {{-- Styles kustom kamu --}}
  <link href="{{ asset('assets/user/css/swiper.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/css/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/user/css/styles.css') }}" rel="stylesheet">

  {{-- Favicon --}}
  <link rel="icon" href="{{ asset('assets/img/custom/profile.png') }}">

  <style>
    /* Ruang untuk fixed-top supaya konten tidak ketutup */
    body { padding-top: 72px; }

    /* Navbar look */
    .navbar-custom {
      background-color: #ffffff !important;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      z-index: 1040;
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
    .navbar-custom .nav-link:hover::after,
    .navbar-custom .nav-link.active::after {
      content: '';
      position: absolute; left: 0; bottom: -6px;
      height: 2px; width: 100%; background: #3273dc;
    }

    /* ===== Toggler (hamburger) kontras & swap ===== */
    .navbar-light .navbar-toggler{
      border: 1px solid #3273dc;
      border-radius: 10px;
      padding: .35rem .6rem;
      background: #eef4ff; /* beda dari background putih */
      box-shadow: 0 0 0 2px rgba(50,115,220,.10);
      outline: none !important;
    }
    .navbar-light .navbar-toggler:hover{
      background: #e0ecff;
      box-shadow: 0 0 0 3px rgba(50,115,220,.15);
    }
    .navbar-toggler i{
      color: #3273dc;
      font-size: 1.25rem;
      line-height: 1;
      vertical-align: middle;
    }
    .navbar-toggler .fa-times{ display:none; }
    .navbar-toggler[aria-expanded="true"] .fa-bars{ display:none; }
    .navbar-toggler[aria-expanded="true"] .fa-times{ display:inline-block; }

    /* Panel collapse (mobile) + tombol Close di dalam panel */
    @media (max-width: 991.98px){
      .navbar-collapse{
        background:#fff;
        border-radius:12px;
        box-shadow:0 12px 24px rgba(0,0,0,.08);
        padding: .75rem 0 .5rem;
        margin-top:.5rem;
        position: relative;
      }
      .navbar-nav .nav-link{ padding:10px 1rem; }
      .mobile-close-wrap{
        display: flex;
        justify-content: flex-end;
        padding: .25rem .5rem .25rem 0;
      }
      .btn-close-menu{
        border: 1px solid #3273dc;
        background: #eef4ff;
        color:#3273dc;
        border-radius: 10px;
        padding: .35rem .55rem;
        line-height:1;
      }
      .btn-close-menu i{ font-size:1rem; }
      .btn-close-menu:hover{
        background:#e0ecff;
        color:#0d3b66;
        text-decoration:none;
      }
    }

    /* ===== Footer w/ blue wave ===== */
    .footer-wave {
      display: block;
      width: 100%;
      height: 80px;
      line-height: 0;
      overflow: hidden;
      margin-top: 3rem; /* jarak dari konten atas */
    }
    .footer-wave svg {
      display: block;
      width: 100%;
      height: 100%;
    }
    .site-footer {
      background: linear-gradient(180deg, #f6faff 0%, #e7f0fd 100%);
      color: #0d3b66;
    }
    .site-footer h5 { color: #0d3b66; }
    .site-footer p,
    .site-footer li,
    .site-footer .text-muted { color: #2d4166 !important; opacity: .9; }
    .site-footer .footer-hr { border-top: 1px solid rgba(13,59,102,.12); }
  </style>

  <title>@yield('title','PT Lestari Elektrik')</title>
  @stack('styles')
</head>
<body data-spy="scroll" data-target="#mainNavbar" data-offset="90">


  {{-- ================= NAVBAR ================= --}}
<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">

    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
        <img class="img-fluid" src="{{ asset('assets/img/custom/profile.png') }}" alt="logo" width="120">
      </a>

      {{-- Tombol hamburger (kontras) --}}
      <button class="navbar-toggler" type="button"
              data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </button>

      {{-- Menu --}}
      <div class="collapse navbar-collapse" id="navbarNav">
        {{-- Tombol Close (X) di dalam panel, hanya muncul di mobile --}}
         <div class="mobile-close-wrap d-lg-none">
        <button type="button" class="btn btn-sm btn-close-menu" aria-label="Close menu">
            <i class="fas fa-times"></i>
        </button>
        </div>


 <ul class="navbar-nav ml-auto align-items-lg-center">
  <li class="nav-item">
    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
       href="{{ request()->is('/') ? '#home' : url('/#home') }}">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link page-scroll"
       href="{{ request()->is('/') ? '#tentang-kami' : url('/#tentang-kami') }}">Tentang Kami</a>
  </li>
  <li class="nav-item">
    <a class="nav-link page-scroll"
       href="{{ request()->is('/') ? '#produk' : url('/#produk') }}">Produk & Layanan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link page-scroll"
       href="{{ request()->is('/') ? '#karier' : url('/#karier') }}">Karier</a>
  </li>
  <li class="nav-item">
    <a class="nav-link page-scroll"
       href="{{ request()->is('/') ? '#berita' : url('/#berita') }}">Berita</a>
  </li>
  <li class="nav-item">
    <a class="nav-link page-scroll"
       href="{{ request()->is('/') ? '#kontak' : url('/#kontak') }}">Kontak</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}"
       href="{{ route('login') }}">Login</a>
  </li>
</ul>



      </div>
    </div>
  </nav>
  @hasSection('header')
    @yield('header')
  @endif

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

  @hasSection('footer')
  @yield('footer')
@else
  {{-- Wave di atas footer --}}
  <div class="footer-wave" aria-hidden="true">
    <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
      <path d="M0,64 C240,96 480,0 720,24 C960,48 1200,128 1440,96 L1440,0 L0,0 Z" fill="#e7f0fd"></path>
    </svg>
  </div>

  <footer class="site-footer pt-4 pb-2">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3">
          <h5>About PT Lestari Elektrik</h5>
          <p class="mb-0">Electric Market</p>
        </div>
        <div class="col-md-4 mb-3">
          {{-- Kosong / quick links nanti --}}
        </div>
        <div class="col-md-4 mb-3">
          <h5>Address</h5>
          <p class="mb-0">
            City, Golden Boulevard, Blk. F1 Jl. Komp. BSD No.9, Lengkong Karya, Tangerang,
            Kota Tangerang Selatan, Banten 15310
          </p>
        </div>
      </div>
      <hr class="footer-hr">
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

  {{-- Auto-close menu ketika klik link (khusus mobile) --}}
  <script>
    $(function(){
      $('.navbar-nav .nav-link').on('click', function(){
        if ($('.navbar-toggler').is(':visible')) {
          $('#navbarNav').collapse('hide');
        }
      });
    });
  </script>

  <script>
  $(function () {
    // Tutup saat klik link menu (mobile)
    $('.navbar-nav .nav-link').on('click', function () {
      if ($('.navbar-toggler').is(':visible')) {
        $('#navbarNav').collapse('hide');
      }
    });

    // Tutup saat klik tombol X (mobile)
    $('.btn-close-menu').on('click', function (e) {
      e.preventDefault();
      $('#navbarNav').collapse('hide');
    });

    // Jaga agar ikon bars <-> times selalu sinkron
    var $toggler = $('.navbar-toggler');
    $('#navbarNav')
      .on('show.bs.collapse', function () {
        $toggler.attr('aria-expanded', 'true');
      })
      .on('hide.bs.collapse', function () {
        $toggler.attr('aria-expanded', 'false');
      });
  });
</script>

<script>
  $(function () {
    var isHome = "{{ request()->is('/') ? '1' : '0' }}" === '1';

    // Aktifkan & refresh ScrollSpy
    $('body').scrollspy({ target: '#mainNavbar', offset: 90 });
    $(window).on('load resize', function(){ $('body').scrollspy('refresh'); });

    // Helper: set active berdasarkan hash (#produk, dll)
    function setActiveByHash(hash){
      if(!hash) return;
      $('#mainNavbar .nav-link').removeClass('active').filter(function(){
        var href = $(this).attr('href') || '';
        return href === hash || href.endsWith(hash); // dukung '#id' & '/#id'
      }).addClass('active');
    }

    // Smooth-scroll & set active saat klik (hanya di Home)
    $('.nav-link.page-scroll').on('click', function(e){
      if (!isHome) return;              // di halaman lain biarkan load ulang ke Home
      var href = $(this).attr('href');  // '#id'
      if (href && href.startsWith('#') && $(href).length){
        e.preventDefault();
        $('html, body').animate({ scrollTop: $(href).offset().top - 70 }, 500, function(){
          history.replaceState(null, null, href);
        });
        setActiveByHash(href);
      }
    });

    // Saat halaman Home dibuka dengan hash (mis. /#produk), set active awal
    if (isHome && window.location.hash){
      setActiveByHash(window.location.hash);
    }
    $(window).on('hashchange', function(){
      if (isHome) setActiveByHash(window.location.hash);
    });

    // Tetap: auto-close menu & sinkron ikon
    $('.navbar-nav .nav-link').on('click', function () {
      if ($('.navbar-toggler').is(':visible')) { $('#navbarNav').collapse('hide'); }
    });
    $('.btn-close-menu').on('click', function (e) {
      e.preventDefault(); $('#navbarNav').collapse('hide');
    });
    var $toggler = $('.navbar-toggler');
    $('#navbarNav')
      .on('show.bs.collapse', function () { $toggler.attr('aria-expanded', 'true'); })
      .on('hide.bs.collapse', function () { $toggler.attr('aria-expanded', 'false'); });
  });
</script>




  @stack('scripts')
</body>
</html>
