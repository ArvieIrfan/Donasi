@extends('admin.layouts.app')
@section('konten')

<div class="container mt-5">
    <h1 class="text-center mb-4">Tambah Laporan</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{route('laporan.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="tgl_laporan">Tanggal Laporan</label>
                    <input type="date" class="form-control" id="tgl_laporan" name="tgl_laporan" required>
                </div>
                <div class="form-group">
                    <label for="editor">Isi Laporan</label>
                    <textarea class="form-control" id="editor" name="isi_laporan" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="lokasi_kejadian">Lokasi Kejadian</label>
                    <input type="text" class="form-control" id="lokasi_kejadian" name="lokasi_kejadian" required>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control-file" id="foto" name="foto">
                </div>
                <div class="form-group">
                    <label for="status">Relawan</label>
                    <select class="form-control" id="select" name="id_relawan">
                        @foreach ($relawan as $r)
                            <option value="{{$r->id_relawan}}">{{$r->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Jenis Bencana</label>
                    <select class="form-control" id="select" name="id_jenis_bencana">
                        @foreach ($jenis_bencana as $jenis)
                            <option value="{{$jenis->id_jenis_bencana}}">{{$jenis->nama_bencana}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
