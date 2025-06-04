@extends('layouts.app')

@section('content')

    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading"></div>
                    <h2 class="h2-heading">Tentang Kami</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/description-1.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <p>PT Lestari Elektrik didirikan pada tahun 2000 dengan tujuan menyediakan solusi peralatan industri berkualitas tinggi</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/description-2.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Campaign Tracker</h4>
                            <p>Campaigns is a feature we've developed since the beginning because it's at the core of Tivo's functionalities</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/description-3.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Analytics Tool</h4>
                            <p>Tivo collects customer data in order to help you analyse different situations and take required action</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->

    <!-- Video -->
    <div id="video" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">
                                <img class="img-fluid" src="images/video-image.png" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                    <div class="p-heading">What better way to show off Tivo marketing automation saas app than presenting you some great situations of each module and tool available to users in a video</div>        
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of video -->

<!-- Pricing -->
    <div id="pricing" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">Produk & Layanan</div>
                    <h2 class="h2-heading">Pricing Options Table</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                   @foreach($produk as $item)
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">{{ $item->nama_produk }}</div>
                                <div class="price"><span class="currency">Rp</span><span class="value">{{ number_format($item->harga, 0, ',', '.') }}</span></div>
                                <div class="frequency">{{ $item->deskripsi }}</div>
                                <div class="divider"></div>
                                <div class="button-wrapper">
                                    <a class="btn-solid-reg page-scroll" href="#">Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->

    <!-- Slider for Lowongan Kerja -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Text Slider -->
                    <div class="slider-container">
                        <div class="swiper-container text-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide 1 - Lowongan Kerja Card -->
                                @foreach($lowongan as $item)
                                <div class="swiper-slide">
                                    <div class="basic-1">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="text-container">
                                                        <h2>Lowongan Kerja</h2>
                                                        <h5>{{ $item->posisi }}</h5>
                                                        <p>{{ $item->deskripsi }}</p>
                                                        <p>Target the right customers for your business with the help of Tivo's patented segmentation technology and deploy efficient marketing campaigns. Keep your customers happy and loyal.</p>
                                                        <ul class="list-unstyled li-space-lg">
                                                            <li class="media">
                                                                <i class="fas fa-square"></i>
                                                                <div class="media-body">Understand customers and meet their requirements</div>
                                                            </li>
                                                            <li class="media">
                                                                <i class="fas fa-square"></i>
                                                                <div class="media-body">Targeted client base with Tivo's efficient technology</div>
                                                            </li>
                                                        </ul>
                                                        <a class="btn-solid-reg page-scroll" href="sign-up.html">Apply Now</a>
                                                    </div> <!-- end of text-container -->
                                                </div> <!-- end of col -->
                                                <div class="col-lg-6">
                                                    <div class="image-container">
                                                        <img class="img-fluid" src="{{ asset('assets/images/details.png') }}" alt="alternative">
                                                    </div> <!-- end of image-container -->
                                                </div> <!-- end of col -->
                                            </div> <!-- end of row -->
                                        </div> <!-- end of container -->
                                    </div> <!-- end of basic-1 -->
                                </div> <!-- end of swiper-slide -->
                                @endforeach

                                <!-- Add more swiper-slide as needed -->
                                <!-- You can add more slides dynamically with backend data if necessary -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of text slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->

    <!-- Section: Berita -->
    <section id="berita" class="mt-5">
        <h2 class="text-center text-primary">Berita Terbaru</h2>
        <div class="row">
            @foreach($berita as $item)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top" alt="{{ $item->judul }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <p class="card-text">{{ Str::limit(strip_tags($item->detail_berita), 100) }}</p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Section: Kontak -->
    <section id="kontak" class="mt-5">
        <h2 class="text-center text-primary">Kontak Kami</h2>
        <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-success mt-3">Kirim Pesan</button>
        </form>
    </section>

@endsection
