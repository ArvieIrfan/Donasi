@extends('front.layout.app')

@section('konten')

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


                            <div class="causes-img">
                                <img src="{{ asset('admin/images') }}/{{ $info->laporan->foto }}" class="w-100" alt="Image">
                                @if ($info->target_donasi != 0)
                                <div class="causes-link pb-2 px-3">
                                    <small class="text-white">Target: Rp.{{ number_format($info->target_donasi) }}</small>
                                    <small class="text-white">Terkumpul: Rp.{{ $info->donasi->sum('jumlah_donasi') }}</small>
                                </div>
                                @endif
                            </div>
                            @if ($info->target_donasi != 0)
                            @php
                                $total_donasi = $info->donasi->sum('jumlah_donasi');
                                $progress = $total_donasi / $info->target_donasi * 100;
                                $progress = ($progress > 100) ? '100' : "$progress";
                            @endphp
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $progress }}%">
                                    <span>{{ number_format($progress, 0) }}%</span>
                                </div>
                            </div>
                            @endif
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

@endsection
