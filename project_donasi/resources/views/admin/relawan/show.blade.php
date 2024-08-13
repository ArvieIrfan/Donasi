@extends('admin.layouts.app');

@section('konten')

    <style>
        body {
            background: #f8f8f8;
        }
    </style>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="m-b-5">
                        <div class="table-data__tool">
                            <a href="{{ route('relawan.index') }}" class="btn au-btn-icon btn-secondary au-btn--small">
                                <i class="fa fa-backward"></i>Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
                </div>

                <div class="col">
                    <div class="row">
                        <div class="col mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="e-profile">
                                        <div class="row">
                                            <div class="col-12 col-sm-auto mb-3">
                                                <div class="mx-auto" style="width: 140px;">
                                                    <div class="d-flex justify-content-center align-items-center rounded"
                                                        style="height: 140px; background-image: url('{{ asset('admin') }}/img/{{ $relawan->foto }}'); background-size:cover">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                                <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{ $relawan->nama }}</h4>
                                                    <p class="mb-0">{{ $relawan->email }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content pt-3">
                                            <div class="tab-pane active">
                                                <form class="form" novalidate="">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Full Name</label>
                                                                        <input class="form-control" type="text"
                                                                            name="nama" readonly
                                                                            value="{{ $relawan->nama }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Jenis Kelamin</label>
                                                                        <input class="form-control" type="text"
                                                                            name="jk" readonly
                                                                            value="{{ $relawan->jenis_kelamin }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Nomor Telepon</label>
                                                                        <input class="form-control" type="number"
                                                                            value="{{ $relawan->no_telepon }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <input class="form-control" type="email"
                                                                            value="{{ $relawan->email }}" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3 mb-3">
                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection
