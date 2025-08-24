@extends('layouts.app')


@php
use Illuminate\Support\Str;

$sections = [
    'sejarah' => ['label' => 'Sejarah', 'icon' => 'hourglass-split'],
    'visi'    => ['label' => 'Visi',    'icon' => 'eye'],
    'misi'    => ['label' => 'Misi',    'icon' => 'list-check'],
];
@endphp

@section('content')

 <section id="tentang-kami" class="mt-4">
  <div id="video" class="basic-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          {{-- Video Preview --}}
          <div class="image-container">
            <div class="video-wrapper">
              <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">
                <img class="img-fluid" src="{{ asset('assets/img/custom/emergency.png') }}" alt="alternative" width="200">
                <span class="video-play-button"><span></span></span>
              </a>
            </div>
          </div>

          <h2 class="h2-heading text-center mb-4">Tentang Kami</h2>

          <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($sections as $key => $meta)
              @php
                $item = $profils[$key][0] ?? null;
              @endphp

              @if($item)
                @php
                  $raw = $item->isi ?? '';
                  $text = strip_tags($raw);
                  $excerpt = Str::words($text, 50);
                  $needsToggle = str_word_count($text) > 50;
                @endphp

                <div class="col">
                  <div class="card h-100 border-0 shadow-sm card-lift">
                    <div class="card-body p-4 d-flex flex-column">
                      <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="icon-blob">
                          <i class="bi bi-{{ $meta['icon'] }}"></i>
                        </div>
                        <span class="badge bg-light text-dark fw-semibold px-3 py-2 rounded-pill">
                          {{ $meta['label'] }}
                        </span>
                      </div>

                      <div class="flex-grow-1">
                        <div class="content-excerpt">
                          {!! nl2br(e($excerpt)) !!}
                          @if($needsToggle) … @endif
                        </div>

                        @if($needsToggle)
                          <div class="content-full d-none">
                            {!! nl2br(e($raw)) !!}
                          </div>
                        @endif
                      </div>

                      @if($needsToggle)
                        <div class="mt-3">
                          <button type="button"
                                  class="btn btn-outline-primary btn-sm btn-toggle-content"
                                  aria-expanded="false">
                            Detail
                          </button>
                        </div>
                      @endif
                    </div>
                  </div>
                </div>
              @endif
            @endforeach
          </div>

          {{-- Styling kecil untuk ikon & hover --}}
          <style>
            .card-lift { transition: transform .2s ease, box-shadow .2s ease; }
            .card-lift:hover { transform: translateY(-4px); box-shadow: 0 .75rem 1.5rem rgba(0,0,0,.08); }
            .icon-blob{
              width: 48px; height: 48px; border-radius: 50%;
              display: inline-flex; align-items: center; justify-content: center;
              background: linear-gradient(135deg, #e9f2ff 0%, #f5f9ff 45%, #eef7ff 100%);
              box-shadow: 0 6px 14px rgba(33, 150, 243, .12), inset 0 0 0 1px rgba(0,0,0,.04);
              flex: 0 0 48px; font-size: 1.1rem; color: #0d6efd;
            }
          </style>

          {{-- Toggle script --}}
          <script>
            document.addEventListener('DOMContentLoaded', function () {
              document.querySelectorAll('.btn-toggle-content').forEach(function(btn){
                btn.addEventListener('click', function(){
                  const card = btn.closest('.card-body');
                  const excerpt = card.querySelector('.content-excerpt');
                  const full = card.querySelector('.content-full');
                  const expanded = btn.getAttribute('aria-expanded') === 'true';

                  if (!expanded) {
                    if (full) full.classList.remove('d-none');
                    if (excerpt) excerpt.classList.add('d-none');
                    btn.textContent = 'Tutup';
                    btn.setAttribute('aria-expanded', 'true');
                  } else {
                    if (full) full.classList.add('d-none');
                    if (excerpt) excerpt.classList.remove('d-none');
                    btn.textContent = 'Detail';
                    btn.setAttribute('aria-expanded', 'false');
                  }
                });
              });
            });
          </script>

        </div>
      </div>
    </div>
  </div>
</section>



            </div>
        </div>
    </div>
</div>


    
<section id="produk" class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center text-primary mb-4">Produk & Layanan</h2>
                <div class="row">
                    @foreach($produk as $item)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm">
                                <!-- Gambar produk -->
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="mx-auto d-block" alt="{{ $item->nama_produk }}" width="250px">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $item->nama_produk }}</h5>
                                    <p class="card-text mb-3">{{ Str::limit(strip_tags($item->deskripsi), 100) }}</p>
                                    
                                    <!-- Menambahkan kategori atau jenis produk -->
                                    @if($item->kategori_id) 
                                        <span class="badge bg-primary text-white">{{ $item->kategori->nama_kategori }}</span>
                                    @else
                                        <span class="badge bg-secondary text-white">Kategori Tidak Ditemukan</span>
                                    @endif

                                    <div class="mt-auto">
                                        <a href="#" class="btn btn-primary mt-2">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Slider for Lowongan Kerja -->
    <section id="karier" class="mt-4">
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
                                                <div class="col-lg-8">
                                                    <div class="text-container">
                                                        <h2>Lowongan Kerja</h2>
                                                        <h5>{{ $item->posisi }}</h5>
                                                        <p>{{ $item->kualifikasi }}</p>
                                                        <p>{{ $item->deskripsi }}</p>
                                                        <ul class="list-unstyled li-space-lg">
                                                           
                                                        </ul>
                                                        <!-- Tombol untuk membuka modal -->
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lamaranModal">
                                                            Kirim Lamaran
                                                        </button>
                                                    </div> <!-- end of text-container -->
                                                </div> <!-- end of col -->
                                                <div class="col-lg-4">
                                                    <div class="image-container">
                                                        <img class="img-fluid" src="{{ asset('assets/img/custom/bergabung.png') }}" alt="alternative">
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
</section>

    <!-- Section: Berita -->
   <section id="berita" class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center text-primary mb-4">Berita Terbaru</h2>
                <div class="row">
                    @foreach($berita as $item)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100 shadow-sm border-light">
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="mx-auto d-block" alt="{{ $item->judul }}" width="250px">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $item->judul }}</h5>
                                    <p class="card-text mb-3">{{ Str::limit(strip_tags($item->detail_berita), 100) }}</p>
                                    
                                    <!-- Menambahkan warna untuk jenis berita -->
                                    @if($item->jenis_berita == 'internal')
                                        <span class="badge bg-primary text-white">Berita Internal</span>
                                    @else
                                        <span class="badge bg-danger text-white">Berita Eksternal</span>
                                    @endif

                                    <div class="mt-auto">
                                        @if($item->jenis_berita == 'eksternal' && $item->link_berita)
                                            <a href="{{ $item->link_berita }}" class="btn btn-danger mt-2" target="_blank">Baca Selengkapnya</a>
                                        @elseif($item->jenis_berita == 'internal')
                                            <p class="text-info mt-2">Ini adalah berita internal.</p>
                                        @else
                                            <a href="#" class="btn btn-primary mt-2">Baca Selengkapnya</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>




<section id="kontak" class="mt-4">
   <div class="form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-container">
                    <h2>Kontak Kami</h2>

                    <!-- Pesan sukses -->
                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    <!-- Kontak Form -->
                    <form id="kontakForm" method="POST" action="{{ route('kontak.store') }}" data-toggle="validator" data-focus="false">
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
                        <div class="form-group checkbox">
                            <input type="checkbox" id="nterms" value="Agreed-to-Terms" required> Saya telah membaca dan setuju dengan <a href="privacy-policy.html">Kebijakan Privasi</a> dan <a href="terms-conditions.html">Syarat dan Ketentuan</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Kirim Pesan</button>
                        </div>
                        <div class="form-message">
                            <div id="nmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of kontak form -->

                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->

    </div> <!-- end of container -->
</div>
</section>


    <!-- Modal untuk Form Lamaran -->
<div class="modal fade" id="lamaranModal" tabindex="-1" role="dialog" aria-labelledby="lamaranModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="lamaranModalLabel">Form Lamaran Kerja</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Form Lamaran -->
        <form action="{{ route('admin.lamaran.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="nama_pelamar">Nama Pelamar</label>
                <input type="text" name="nama_pelamar" id="nama_pelamar" class="form-control" required value="{{ old('nama_pelamar') }}">
                @error('nama_pelamar')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="file_cv">CV (PDF/Doc)</label>
                <input type="file" name="file_cv" id="file_cv" class="form-control" required>
                @error('file_cv')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="posisi_dilamar">Posisi yang Dilamar</label>
                <select name="posisi_dilamar" class="form-control" required>
                    <option value="">-- Pilih Posisi --</option>
                    @foreach($lowongan as $lowongan)
                    <option value="{{ $lowongan->id }}">{{ $lowongan->posisi }}</option>
                    @endforeach
                </select>
                @error('posisi_dilamar')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Kirim Lamaran</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Include Bootstrap JS, Popper, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



@endsection

  
