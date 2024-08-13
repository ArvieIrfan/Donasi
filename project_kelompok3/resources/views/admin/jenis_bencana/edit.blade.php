@extends('admin.layouts.app');

@section('konten')


        <div class="section__content section__content--p30">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="m-b-5">
                            <div class="table-data__tool">
                                <a href="{{ route('jenis_bencana.index') }}" class="btn au-btn-icon btn-secondary au-btn--small">
                                    <i class="fa fa-backward"></i>Kembali</a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Edit Data</strong> Jenis Bencana
                                </div>
                                <form action="{{ route('jenis_bencana.update', $jenis->id_jenis_bencana) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body card-block">
                                        <div class="row form-group">
                                            <div class="col col-md-2">
                                                <label for="hf-nama" class=" form-control-label">Nama</label>
                                            </div>
                                            <div class="col-12 col-md-10">
                                                <input type="text" id="hf-nama" name="nama" placeholder="Masukkan Nama..." class="form-control" value="{{ $jenis->nama_bencana }}">
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
