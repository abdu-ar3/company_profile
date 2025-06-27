<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Company Profile - CV Lestari Elektrik</title>
    
    <!-- Styles -->
    <link href="{{ asset('assets/user/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/styles.css') }}" rel="stylesheet">
    
    <style>
       .navbar-custom {
        background-color: #FFFCFB    !important;
    }


    .navbar-custom .navbar-nav .nav-link {
        color: #fff !important;
    }

    .navbar-custom .nav-link:hover,
    .navbar-custom .nav-link.active {
        color: #dcdcdc !important;
    }

    .navbar-custom {
    background-color: #ffffff !important; /* putih bersih */
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05); /* biar ada depth */
}

.navbar-custom .navbar-nav .nav-link {
    color: #1e56a0 !important; /* biru soft */
    font-weight: 500;
    transition: color 0.3s ease;
}

.navbar-custom .nav-link:hover,
.navbar-custom .nav-link.active {
    color: #3273dc !important; /* biru terang saat hover/active */
}

.navbar-custom .navbar-nav .nav-link {
    font-size: 1.05rem; /* default ~14px → naik jadi ±16.8px */
    font-weight: 500;
    padding-left: 1rem;
    padding-right: 1rem;
    color: #1e56a0 !important;
}

.navbar-custom .nav-link:hover,
.navbar-custom .nav-link.active {
    color: #3273dc !important;
}

/* Style dasar link */
.navbar-custom .navbar-nav .nav-link {
    position: relative;
    font-size: 1.05rem;
    font-weight: 500;
    color: #1e56a0 !important;
    transition: color 0.3s ease;
}


.navbar-custom .nav-link {
    color: #1e56a0 !important;
    padding: 8px 16px;
    border-radius: 8px;
    transition: all 0.3s ease;
}

.navbar-custom .nav-link.active,
.navbar-custom .nav-link:hover {
    background-color: #e7f0fd; /* biru muda kalem */
    color: #0d3b66 !important;
    font-weight: 600;
}


/* Garis bawah animasi */
.navbar-custom .nav-link.active::after,
.navbar-custom .nav-link:hover::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    height: 2px;
    width: 100%;
    background-color: #3273dc;
    transition: width 0.3s ease;
}



    </style>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/custom/profile.png') }}">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
            <img class="img-fluid" src="{{ asset('assets/img/custom/profile.png') }}" alt="logo" width="120px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link page-scroll" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link page-scroll" href="#tentang-kami">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link page-scroll" href="#produk">Produk & Layanan</a></li>
                <li class="nav-item"><a class="nav-link page-scroll" href="#karier">Karier</a></li>
                <li class="nav-item"><a class="nav-link page-scroll" href="#berita">Berita</a></li>
                <li class="nav-item"><a class="nav-link page-scroll" href="#kontak">Kontak</a></li>
                <li class="nav-item"><a class="nav-link page-scroll" href="{{ route('login') }}">Login</a></li>
            </ul>
            <span class="nav-item">
            </span>
        </div>
    </div>
</nav>

    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1>Selamat Datang di CV Lestari Elektrik</h1>
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

    <!-- Content -->
    <main>
        @yield('content')
    </main>


    <!-- Footer -->
    <svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#5f4def;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-col first">
                        <h4>About CV Lestari Electric</h4>
                        <p class="p-small">Electric Market</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-col middle">
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Address</h4>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <div class="media-body">City, Golden Boulevard, Blk. F1 Jl. Komp. BSD No.9, Lengkong Karya, Tangerang, Kota Tangerang Selatan, Banten 15310</div>
                            </li>
                        </ul>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2025 <a href="https://inovatik.com"></a><br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
     <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('assets/user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/user/js/validator.min.js') }}"></script>
    <script src="{{ asset('assets/user/js/scripts.js') }}"></script>
</body>
</html>
