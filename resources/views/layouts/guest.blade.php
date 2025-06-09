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
    <title>Company Profile - PT Lestari Elektrik</title>
    
    <!-- Styles -->
    <link href="{{ asset('assets/user/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/user/css/styles.css') }}" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/user/images/favicon.png') }}">
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
        <a class="navbar-brand logo-image" href="/">
            <img src="{{ asset('assets/user/images/logo.svg') }}" alt="Logo">
        </a>
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
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>Selamat Datang di PT Lestari Elektrik</h1>
                            <p class="p-large">Kami adalah perusahaan yang menyediakan produk elektronik dan peralatan industri berkualitas tinggi.</p>
                            <a class="btn-solid-lg page-scroll" href="#produk">Form Career</a>
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
