@extends('admin.layouts.app')
@section('konten')

<script>
    var monthlyDonationsData = @json($monthlyDonationsData);
    var labels = Object.keys(monthlyDonationsData);
    var data = Object.values(monthlyDonationsData);
</script>


<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">Dashboard</h2>
                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <div class="col-sm-6 col-lg">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-money"></i>
                            </div>
                            <div class="text">
                                <h4>Rp. {{ number_format($donasi) }}</h4>
                                <span>Total Donasi</span>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                            <div class="text">
                                <h2>{{$donatur}}</h2>
                                <span>Total Donatur</span>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-email"></i>
                            </div>
                            <div class="text">
                                <h2>{{$laporan}}</h2>
                                <span>Laporan</span>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg">
                <div class="overview-item overview-item--c4">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-accounts-alt"></i>
                            </div>
                            <div class="text">
                                <h2>{{$relawan}}</h2>
                                <span>Relawan</span>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="au-card recent-report">
                    <div class="au-card-inner">
                        <h3 class="title-2">Laporan Bulanan</h3>
                        <div class="recent-report__chart pt-5">
                            <canvas id="recent-rep-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
