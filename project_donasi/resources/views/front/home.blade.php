@extends('front.layout.app')
@section('konten')
    <div class="container-fluid carousel-header vh-100 px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ asset('front') }}/img/carousel-1.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">SELAMATKAN SAUDARA KITA</h4>
                            <h1 class="display-1 text-capitalize text-white mb-4">Lindungi Kemanusiaan</h1>
                            <p class="mb-5 fs-5">Kami mengajak Anda berkomitmen untuk melindungi lingkungan dan memberikan bantuan bencana terkini.
                                Bersama, kita dapat membuat perbedaan yang nyata.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('front') }}/img/carousel-2.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">INFORMASI BENCANA TERKINI</h4>
                            <h1 class="display-1 text-capitalize text-white mb-4">Tetap Update</h1>
                            <p class="mb-5 fs-5">Dapatkan informasi terbaru tentang bencana yang terjadi di berbagai wilayah.
                                Kami menyediakan data yang akurat dan terbaru untuk membantu Anda tetap waspada dan siap.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('front') }}/img/carousel-3.jpg" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">DONASI UNTUK BANTUAN BENCANA</h4>
                            <h1 class="display-1 text-capitalize text-white mb-4">Bantu Mereka yang Membutuhkan</h1>
                            <p class="mb-5 fs-5">Bergabunglah dengan kami dalam upaya kemanusiaan dengan memberikan donasi.
                                Setiap kontribusi Anda sangat berarti untuk mendukung mereka yang terdampak bencana.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div id="tentang-kami" class="container-fluid about  py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-5">
                    <div class="h-100">
                        <img src="{{ asset('front') }}/img/about-1.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Image">
                    </div>
                </div>
                <div class="col-xl-7">
                    <h5 class="text-uppercase text-primary">TENTANG KAMI</h5>
                    <h1 class="mb-4">Tujuan Utama Kami adalah Memberikan Bantuan Bencana</h1>
                    <p class="fs-5 mb-4">Kami berdedikasi untuk memberikan informasi terkini mengenai bencana alam serta membantu masyarakat yang terdampak.
                        Dengan layanan kami, Anda dapat mendapatkan data akurat dan terkini, serta ikut berpartisipasi dalam upaya donasi untuk pemulihan dan bantuan bencana.
                    </p>
                    <div class="tab-class bg-secondary p-4">
                        <ul class="nav d-flex mb-2">
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                    <span class="text-dark" style="width: 150px;">Tentang</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                    <span class="text-dark" style="width: 150px;">Visi</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                    <span class="text-dark" style="width: 150px;">Misi</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3">TENTANG KAMI</h5>
                                                <p class="mb-4">Kami berdedikasi untuk membantu masyarakat dalam menghadapi bencana alam.
                                                    Dengan menyediakan informasi terkini dan akurat, kami berupaya memastikan setiap orang dapat mengambil langkah yang tepat dan cepat.
                                                    Kami juga menyediakan platform donasi untuk membantu mereka yang terdampak.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3">VISI KAMI</h5>
                                                <p class="mb-4">Menciptakan masyarakat yang tangguh dan siap menghadapi bencana.
                                                    Kami ingin membangun platform yang dapat diandalkan untuk informasi dan bantuan bencana,
                                                    serta menggalang dukungan dari komunitas global untuk membantu mereka yang membutuhkan.
                                                    Dengan visi ini, kami berharap dapat membuat perbedaan nyata dalam kehidupan banyak orang.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div class="text-start my-auto">
                                                <h5 class="text-uppercase mb-3">MISI KAMI</h5>
                                                <p class="mb-4">memberikan bantuan yang efektif dan cepat bagi korban bencana.
                                                    Kami berfokus pada penyediaan informasi yang akurat dan up-to-date, serta memfasilitasi donasi dari berbagai pihak untuk mendukung pemulihan dan bantuan darurat.
                                                    Kami percaya bahwa melalui kerja sama, kita dapat meringankan beban mereka yang terdampak.
                                                </p>
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4"
                                                        href="#">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid service py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">APA YANG KAMI LAKUKAN</h5>
                <h1 class="mb-0">Langkah Kami Untuk Membantu Korban Bencana</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="{{ asset('front') }}/img/service-1.jpg" class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0">Mengumpulkan Dana Bantuan</a>
                        </div>
                    </div>
                    <p class="my-4">Kami menggalang dana untuk memberikan bantuan langsung kepada korban bencana.
                        Dana yang terkumpul digunakan untuk menyediakan kebutuhan dasar, seperti makanan, air bersih, dan tempat tinggal sementara bagi mereka yang terdampak.
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="{{ asset('front') }}/img/service-2.jpg" class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0">Bekerjasama dengan Relawan</a>
                        </div>
                    </div>
                    <p class="my-4">Kami bekerja sama dengan relawan untuk memastikan bantuan dapat disalurkan dengan cepat dan tepat sasaran.
                        Relawan kami dilatih untuk menghadapi situasi darurat dan siap memberikan bantuan di lapangan.
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="{{ asset('front') }}/img/service-3.jpg" class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0">Penyuluhan dan Edukasi</a>
                        </div>
                    </div>
                    <p class="my-4">Kami menyelenggarakan penyuluhan dan edukasi untuk masyarakat tentang cara menghadapi dan memitigasi risiko bencana.
                        Dengan informasi yang tepat, masyarakat dapat lebih siap dan tangguh dalam menghadapi bencana alam.
                    </p>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="service-item">
                        <img src="{{ asset('front') }}/img/service-4.jpg" class="img-fluid w-100" alt="Image">
                        <div class="service-link">
                            <a href="#" class="h4 mb-0">Memberikan Informasi Bencana Akurat</a>
                        </div>
                    </div>
                    <p class="my-4">Kami berkomitmen untuk menyediakan informasi bencana yang akurat dan terkini.
                        Dengan data yang tepat waktu dan terpercaya, kami membantu masyarakat untuk lebih waspada dan siap dalam menghadapi ancaman bencana.
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Causes Start -->
    <div class="container-fluid causes py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">KASUS TERKINI</h5>
                <h1 class="mb-4">Saudara Kita Membutuhkan Bantuan</h1>
                <p class="mb-0">Kami memberikan perhatian khusus pada berbagai kasus bencana yang terjadi di berbagai wilayah di Indonesia.
                    Dengan data yang akurat dan terpercaya, kami berupaya memberikan bantuan yang cepat dan efektif untuk meringankan beban mereka.
                </p>
            </div>
            <div class="row g-3">
                @foreach($informasi as $info)
                <div class="col-lg-6 col-xl-3">
                    <div class="causes-item">

                        @php
                            $total_donasi = $info->donasi->sum('jumlah_donasi');
                            $progress = $total_donasi / $info->target_donasi * 100;
                            $progress = ($progress > 100) ? '100' : "$progress";
                        @endphp
                        <div class="causes-img">
                            <img src="{{ asset('admin/images') }}/{{ $info->laporan->foto }}" class="w-100" alt="Image">
                            <div class="causes-link pb-2 px-3">
                                <small class="text-white">Target: Rp.{{ number_format($info->target_donasi) }}</small>
                                <small class="text-white">Terkumpul: Rp.{{ number_format($total_donasi) }}</small>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $progress }}%">
                                <span>{{ number_format($progress, 0) }}%</span>
                            </div>
                        </div>

                        <div class="causes-content p-4">
                            <h5 class="mb-3 fw-bold">{{ $info->judul }}</h5>
                            <p class="mb-4">{{ $info->keterangan }}</p>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-3" href="{{ route('bencana.show', $info->id_bencana) }}">Selengkapnya.. </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Causes End -->


    <!-- Donation Start -->
    <div id="relawan" class="container-fluid donation py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h5 class="text-uppercase text-primary">RELAWAN BENCANA</h5>
                <h1 class="mb-0">Dukungan Anda, Harapan Kami</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="donation-item">
                        <img src="{{ asset('front') }}/img/relawan-1.jpg" class="img-fluid w-100" alt="Image">
                        <div class="donation-content d-flex flex-column">
                            <h5 class="text-uppercase text-primary mb-4">Bantu Korban Kami Lebih Banyak</h5>
                            <a href="#" class="btn-hover-color display-6 text-white">Relawan Kehidupan</a>
                            <h4 class="text-white mb-4">Harapan Datang</h4>
                            <p class="text-white mb-4">Dalam setiap krisis, kehadiran relawan menjadi pilar utama dalam membangun kembali harapan.
                                    Dukungan Anda membuat perbedaan yang nyata.</p>
                            <div class="donation-btn d-flex align-items-center justify-content-start">
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="https://wa.me/6281283009715?text=Halo%20Admin%20Respon%20Bencana!%0A%0ASaya%20ingin%20bergabung%20sebagai%20relawan%20bencana%20dari%20aplikasi%20Respon%20Bencana.%20Mohon%20petunjuk%20dan%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih!" target="_blank">Bergabung</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="donation-item">
                        <img src="{{ asset('front') }}/img/relawan-2.jpg" class="img-fluid w-100" alt="Image">
                        <div class="donation-content d-flex flex-column">
                            <h5 class="text-uppercase text-primary mb-4">Solidaritas Umat Manusia</h5>
                            <a href="#" class="btn-hover-color display-6 text-white">Bangun Bersama</a>
                            <h4 class="text-white mb-4">Aksi Cepat</h4>
                            <p class="text-white mb-4">Di tengah kehancuran, relawan membangun jembatan harapan.
                                Bersama, kita dapat mengatasi setiap bencana dengan kekuatan solidaritas.</p>
                            <div class="donation-btn d-flex align-items-center justify-content-start">
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="https://wa.me/6281283009715?text=Halo%20Admin%20Respon%20Bencana!%0A%0ASaya%20ingin%20bergabung%20sebagai%20relawan%20bencana%20dari%20aplikasi%20Respon%20Bencana.%20Mohon%20petunjuk%20dan%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih!" target="_blank">Bergabung</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="donation-item">
                        <img src="{{ asset('front') }}/img/relawan-3.jpg" class="img-fluid w-100" alt="Image">
                        <div class="donation-content d-flex flex-column">
                            <h5 class="text-uppercase text-primary mb-4">Membantu Yang Membutuhkan</h5>
                            <a href="#" class="btn-hover-color display-6 text-white">Nyala Kemanusiaan</a>
                            <h4 class="text-white mb-4">Bersatu Tanggap</h4>
                            <p class="text-white mb-4">Relawan adalah cahaya di tengah kegelapan. Dengan bantuan Anda,
                                kami dapat menerangi jalan menuju pemulihan yang lebih baik.</p>
                            <div class="donation-btn d-flex align-items-center justify-content-start">
                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="https://wa.me/6281283009715?text=Halo%20Admin%20Respon%20Bencana!%0A%0ASaya%20ingin%20bergabung%20sebagai%20relawan%20bencana%20dari%20aplikasi%20Respon%20Bencana.%20Mohon%20petunjuk%20dan%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih!" target="_blank">Bergabung</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="https://wa.me/6281283009715?text=Halo%20Admin%20Respon%20Bencana!%0A%0ASaya%20ingin%20bergabung%20sebagai%20relawan%20bencana%20dari%20aplikasi%20Respon%20Bencana.%20Mohon%20petunjuk%20dan%20informasi%20lebih%20lanjut.%0A%0ATerima%20kasih!" target="_blank">Bergabung Relawan Bencana</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donation End -->


    <!-- Gallery Start -->
    <div id="galeri" class="container-fluid gallery py-5 px-0">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">PEKERJAAN KAMI</h5>
            <h1 class="mb-4">Membantu Saudara Kami di Seluruh Indonesia</h1>
            <p class="mb-0"> Berkomitmen untuk menggunakan teknologi dengan bijaksana dan berkelanjutan dalam upaya kami untuk memberikan respons yang cepat dan efektif terhadap bencana.
                Bersama-sama, kita dapat menjaga perdamaian dan kemanusiaan demi masa depan yang lebih baik.</p>
        </div>
        <div class="row g-0">
            <div class="col-lg-4">
                <div class="gallery-item">
                    <img src="{{ asset('front') }}/img/gallery-2.jpg" class="img-fluid w-100" alt="">
                    <div class="search-icon">
                        <a href="{{ asset('front') }}/img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i
                                class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                    </div>
                    <div class="gallery-content">
                        <div class="gallery-inner pb-5">
                            <a href="#" class="h4 text-white">Bantuan Bencana</a>
                            <a href="#" class="text-white">
                                <p class="mb-0">Bantuan Kemanusiaan youayasan Buddha Tzu</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('front') }}/img/gallery-3.jpg" class="img-fluid w-100" alt="">
                    <div class="search-icon">
                        <a href="{{ asset('front') }}/img/gallery-3.jpg" data-lightbox="gallery-3" class="my-auto"><i
                                class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                    </div>
                    <div class="gallery-content">
                        <div class="gallery-inner pb-5">
                            <a href="#" class="h4 text-white">Bantuan Bencana</a>
                            <a href="#" class="text-white">
                                <p class="mb-0">Bantuan Bencana Tzu-Chi</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="gallery-item">
                    <img src="{{ asset('front') }}/img/gallery-1.jpg" class="img-fluid w-100" alt="">
                    <div class="search-icon">
                        <a href="{{ asset('front') }}/img/gallery-1.jpg" data-lightbox="gallery-1" class="my-auto"><i
                                class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                    </div>
                    <div class="gallery-content">
                        <div class="gallery-inner pb-5">
                            <a href="#" class="h4 text-white">Bantuan Kemanusiaan</a>
                            <a href="#" class="text-white">
                                <p class="mb-0">Erupsi Gunung Lewotobi</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="gallery-item">
                    <img src="{{ asset('front') }}/img/gallery-4.jpg" class="img-fluid w-100" alt="">
                    <div class="search-icon">
                        <a href="{{ asset('front') }}/img/gallery-4.jpg" data-lightbox="gallery-4" class="my-auto"><i
                                class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                    </div>
                    <div class="gallery-content">
                        <div class="gallery-inner pb-5">
                            <a href="#" class="h4 text-white">Bantuan Kemanusiaan</a>
                            <a href="#" class="text-white">
                                <p class="mb-0">Bantuan pangan korban bencana Plan International Indonesia</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('front') }}/img/gallery-5.jpg" class="img-fluid w-100" alt="">
                    <div class="search-icon">
                        <a href="{{ asset('front') }}/img/gallery-5.jpg" data-lightbox="gallery-5" class="my-auto"><i
                                class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                    </div>
                    <div class="gallery-content">
                        <div class="gallery-inner pb-5">
                            <a href="#" class="h4 text-white">Bantuan Bencana</a>
                            <a href="#" class="text-white">
                                <p class="mb-0">Bantuan bencana banjir Unicharm</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
