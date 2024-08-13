@extends('front.layout.app')

@section('konten')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Tentang Kami</h1>
        <p class="fs-5 text-white mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Contact</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- About 1 - Bootstrap Brain Component -->
<div class="container my-5" style="padding-top: 30px;">
    <section class="py-3 py-md-5">
    <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
        <div class="col-12 col-lg-6 col-xl-5">
            <img class="img-fluid rounded" loading="lazy" src="{{ asset('front') }}/img/gambar-aboutus.jpg" alt="About 1">
        </div>
        <div class="col-12 col-lg-6 col-xl-7">
            <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-11">
                <div class="text-center mb-5">
                    <img src="{{ asset('front') }}/img/logo-about.png" alt="Logo Respon Bencana" class="img-fluid" style="max-width: 500px;">
                </div>
                <h2 class="mb-3" style="font-weight: bold">Siapa Kami?</h2>
                <p class="lead fs-5 text-primary mb-3">Kami hadir sebagai solusi untuk menyediakan informasi bencana terkini, menjadi wadah bagi relawan, serta penyalur donasi bencana.</p>
                <p class="mb-5">Respon Bencana didirikan pada tanggal 20 Mei 2024 oleh sekelompok profesional yang peduli terhadap penanganan bencana di Indonesia.
                    Kami berkomitmen untuk menciptakan platform yang dapat memberikan manfaat nyata bagi masyarakat yang terdampak bencana.</p>
                <div class="row gy-4 gy-md-0 gx-xxl-5X">
                <div class="col-12 col-md-6">
                    <div class="d-flex">
                    <div class="me-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                            <path d="M8 1.5a6.5 6.5 0 1 1 0 13 6.5 6.5 0 0 1 0-13zM8 3a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 1 0V3.5A.5.5 0 0 0 8 3zm0 7a.5.5 0 0 0-.5.5v.5a.5.5 0 0 0 1 0v-.5a.5.5 0 0 0-.5-.5z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="h4 mb-3">Informasi Bencana</h2>
                        <p class="text-primary mb-0">Menyediakan informasi terkini berbagai bencana alam seperti gempa bumi, banjir, dan lainnya.</p>
                    </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="d-flex">
                    <div class="me-4 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M8 1.5a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm0 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-3 9a3 3 0 0 1 5.598-.5H13a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3z" />
                        </svg>
                    </div>
                    <div>
                        <h2 class="h4 mb-3">Penyalur Donasi</h2>
                        <p class="text-primary mb-0">Menyediakan platform untuk menyalurkan donasi tepat sasaran kepada yang membutuhkan.</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</div>
    <div class="py-3 py-md-5 bg-secondary" style="margin-top: 1rem; padding-left: 7rem; padding-right: 7rem;">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-lg mb-5">
                    <img src="{{ asset('front') }}/img/about-tujuan.jpg" class="card-img-top" alt="Gambar Tujuan Kami" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h2 class="card-title text-primary" style="margin-bottom: 1rem; font-weight: bold">TUJUAN APLIKASI</h2>
                        <p class="card-text" style="text-align: justify;">Tujuan utama kami adalah memberikan informasi yang akurat dan terkini mengenai bencana alam yang terjadi di berbagai wilayah.
                            Selain itu, kami juga ingin memfasilitasi relawan dan donatur agar dapat berkontribusi dengan mudah dan tepat sasaran.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-lg mb-5">
                    <img src="{{ asset('front') }}/img/about-manfaat.jpg" class="card-img-top" alt="Gambar Manfaat Bagi Pengguna" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h2 class="card-title text-primary" style="margin-bottom: 1rem; font-weight: bold">MANFAAT APLIKASI</h2>
                        <p class="card-text" style="text-align: justify;">Dengan menggunakan aplikasi Respon Bencana, pengguna dengan mudah mendapatkan informasi terbaru mengenai bencana, bergabung sebagai relawan, dan menyalurkan donasi kepada korban bencana.
                            Kami berharap dengan adanya aplikasi ini, kita dapat bersama membantu meringankan beban korban bencana.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
