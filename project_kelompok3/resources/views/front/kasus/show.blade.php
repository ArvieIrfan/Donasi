@extends('front.layout.app')

@section('konten')

        <main class="main">

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h3 class="text-white display-3 mb-4">Kasus Terkini</h1>
                    <p class="fs-5 text-white mb-4">Bantulah hari ini karena besok mungkin Andalah yang membutuhkan lebih banyak bantuan!</p>
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                        <li class="breadcrumb-item active text-white">Bencana</li>
                    </ol>
                </div>
            </div>
            <!-- Header End -->

            <div class="container">
              <div class="row">

                <div class="col-lg-8">

                  <!-- Blog Details Section -->
                  <div id="blog-details" class="blog-details section">
                    <div class="container">

                      <article class="article">

                        {{-- <div class="post-img">
                          <img src="{{ asset('front/img/blog-1.jpg') }}" alt="" class="img-fluid">
                        </div> --}}
                        <img src="{{ asset('admin') }}/images/{{ $informasi->laporan->foto }}" class="img-fluid w-100" alt="">

                        <h2 class="title">{{ $informasi->judul }}</h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-bar-chart-line"></i>{{ $informasi->tingkat_keparahan }}</li>
                                <li class="d-flex align-items-center"><i class="bi bi-calendar-event"></i><time datetime="01-01-2020">{{ $informasi->tgl_bencana }}</time></li>
                                <li class="d-flex align-items-center"><i class="bi bi-building-exclamation"></i>{{ $informasi->laporan->lokasi_kejadian }}</li>
                            </ul>
                        </div><!-- End meta top -->


                        <div class="content">
                          {!! $informasi->laporan->isi_laporan !!}

                        </div><!-- End post content -->

                        <div class="meta-bottom">
                          <i class="bi bi-folder"></i>
                          <ul class="cats">
                            <li><a href="#">Business</a></li>
                          </ul>

                          <i class="bi bi-tags"></i>
                          <ul class="tags">
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                          </ul>
                        </div><!-- End meta bottom -->

                      </article>

                    </div>
                  </div><!-- /Blog Details Section -->

                </div>

                <div class="col-lg-4 sidebar">

                  <div class="widgets-container">

                @if ($informasi->target_donasi != 0)
                    <!-- Search Widget -->
                    <div class="search-widget widget-item causes">

                      <h3 class="widget-title">Dana Donasi</h3>
                      {{-- <form action="">
                        <input type="text">
                        <button type="submit"><i class="bi bi-search"></i></button>
                      </form> --}}

                    <div class="causes-item">
                        <div class="causes-imgs">
                        @php
                            $total_donasi = $informasi->donasi->sum('jumlah_donasi');
                            $progress = $total_donasi / $informasi->target_donasi * 100;
                            $progress = ($progress > 100) ? '100' : "$progress";
                        @endphp
                            <div class="cause-link pb-2 px-1">
                                <small class="text-dark"><i class="fa fa-thumbs-up text-primary me-2"></i>Target : Rp.{{ number_format($informasi->target_donasi) }}</small><br>
                                <small class="text-dark"><i class="fas fa-chart-bar text-primary me-2"></i>Terkumpul : Rp. {{ number_format($total_donasi) }}</small>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $progress }}%">
                                <span>{{ number_format($progress, 0) }}%</span>
                            </div>
                        </div>
                        <div class="d-grid gap-2 p-1">
                            <p>Total Donasi : {{ $informasi->donasi->count('id_informasi_bencana') }} Orang</p>
                            <a href="{{ route('front.donasi.form', $id) }}" class="text-white btn btn-primary btn-block">Donasi <i class="fa fa-handshake" aria-hidden="true"></i></a>
                        </div>
                    </div>


                </div><!--/Search Widget -->
                @endif

                    {{-- <!-- Search Widget -->
                    <div class="search-widget widget-item">

                      <h3 class="widget-title">Search</h3>
                      <form action="">
                        <input type="text">
                        <button type="submit"><i class="bi bi-search"></i></button>
                      </form>

                    </div><!--/Search Widget -->

                    <!-- Categories Widget -->
                    <div class="categories-widget widget-item">

                      <h3 class="widget-title">Categories</h3>
                      <ul class="mt-3">
                        <li><a href="#">General <span>(25)</span></a></li>
                        <li><a href="#">Lifestyle <span>(12)</span></a></li>
                        <li><a href="#">Travel <span>(5)</span></a></li>
                        <li><a href="#">Design <span>(22)</span></a></li>
                        <li><a href="#">Creative <span>(8)</span></a></li>
                        <li><a href="#">Educaion <span>(14)</span></a></li>
                      </ul>

                    </div><!--/Categories Widget --> --}}

                    <!-- Recent Posts Widget -->
                    <div class="recent-posts-widget widget-item">

                      <h3 class="widget-title pt-3">Informasi lainnya</h3>

                        @foreach ($bencana as $b)
                      <div class="post-item">
                        {{-- <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0"> --}}
                        <img src="{{ asset('admin') }}/images/{{ $b->laporan->foto }}" alt="" class="flex-shrink-0">
                        <div>
                          <h4><a href="{{ route('bencana.show', $b->id_bencana) }}">{{ $b->judul }}</a></h4>
                          <time datetime="2020-01-01">{{ $b->tgl_bencana }}</time>
                        </div>
                      </div><!-- End recent post item-->
                        @endforeach
                      {{-- <div class="post-item">
                        <img src="assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
                        <div>
                          <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                          <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>
                      </div><!-- End recent post item-->

                      <div class="post-item">
                        <img src="assets/img/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
                        <div>
                          <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                          <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>
                      </div><!-- End recent post item-->

                      <div class="post-item">
                        <img src="assets/img/blog/blog-recent-4.jpg" alt="" class="flex-shrink-0">
                        <div>
                          <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                          <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>
                      </div><!-- End recent post item-->

                      <div class="post-item">
                        <img src="assets/img/blog/blog-recent-5.jpg" alt="" class="flex-shrink-0">
                        <div>
                          <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                          <time datetime="2020-01-01">Jan 1, 2020</time>
                        </div>
                      </div><!-- End recent post item--> --}}

                    </div><!--/Recent Posts Widget -->


                  </div>

                </div>

              </div>
            </div>

          </main>

@endsection
