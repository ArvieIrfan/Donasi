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
                                <a href="{{ route('jenis_bencana.index') }}" class="btn au-btn-icon btn-secondary au-btn--small">
                                    <i class="fa fa-backward"></i>Kembali</a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Tambah Data</strong> Jenis Bencana
                                </div>
                                <form action="{{ route('jenis_bencana.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body card-block">
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label for="hf-nama" class=" form-control-label">Nama</label>
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <input type="text" id="hf-nama" name="nama" placeholder="Masukkan Nama bencana..." class="form-control @error('nama') is-invalid  @enderror">
                                                @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
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
