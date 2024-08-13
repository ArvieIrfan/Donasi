@extends('admin.layouts.app');

@section('konten')


        <div class="section__content section__content--p30">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="m-b-5">
                            <div class="table-data__tool">
                                <a href="{{ route('relawan.index') }}" class="btn au-btn-icon btn-secondary au-btn--small">
                                    <i class="fa fa-backward"></i>Kembali</a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Tambah Data</strong> Relawan
                                </div>
                                <form action="{{ route('relawan.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body card-block">
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label for="hf-nama" class=" form-control-label">Nama</label>
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <input type="text" id="hf-nama" name="nama" placeholder="Masukkan Nama..." class="form-control @error('nama') is-invalid  @enderror">
                                                @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
            @enderror
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label class=" form-control-label">Jenis Kelamin</label>
                                            </div>
                                            <div class="col col-md-10">
                                                <div class="form-check">
                                                @foreach ($gender as $g)
                                                    @php
                                                        $cek = (old('g') == $g) ? 'checked' : '';
                                                    @endphp
                                                    <div class="form-check-inline form-check @error('jenis_kelamin') is-invalid  @enderror">
                                                        <input type="radio" id="inline-radio1{{ $g }}" name="jenis_kelamin" value="{{ $g }}" class="form-check-input" {{ $cek }}>
                                                        <label for="inline-radio1{{ $g }}" class="form-check-label">{{ $g }} </label>
                                                        @error('jenis_kelamin')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label for="hf-password" class=" form-control-label">Nomor Telepon</label>
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <input type="number" id="hf-password" name="no_telepon" placeholder="Masukkan Nomor Telepon..." class="form-control @error('no_telepon') is-invalid  @enderror">
                                                @error('no_telepon')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label for="hf-email" class=" form-control-label">Email</label>
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <input type="email" id="hf-email" name="email" placeholder="Masukkan Email..." class="form-control @error('email') is-invalid  @enderror">
                                                @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label for="file-input" class=" form-control-label">Foto</label>
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <input type="file" id="file-input" name="foto" class="form-control-file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

@endsection
