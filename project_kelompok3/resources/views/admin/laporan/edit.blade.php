@extends('admin.layouts.app')
@section('konten')

<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Laporan</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{route('laporan.update', $laporan->id_laporan)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="tgl_laporan">Tanggal Laporan</label>
                    <input type="date" class="form-control" id="tgl_laporan" name="tgl_laporan" required value="{{$laporan->tgl_laporan}}">
                </div>
                <div class="form-group">
                    <label for="editor">Isi Laporan</label>
                    <textarea class="form-control" id="editor" name="isi_laporan" rows="3" required>{{$laporan->isi_laporan}}</textarea>
                </div>
                <div class="form-group">
                    <label for="lokasi_kejadian">Lokasi Kejadian</label>
                    <input type="text" class="form-control" id="lokasi_kejadian" name="lokasi_kejadian" required value="{{$laporan->lokasi_kejadian}}">
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control-file" id="foto" name="foto" value="{{$laporan->foto}}">
                    @if (!empty($laporan->foto))
                        <img src="{{url('admin/images')}}/{{$laporan->foto}}" alt="">
                    @endif
                </div>
                <div class="form-group">
                    <label for="status">Relawan</label>
                    <select class="form-control" id="select" name="id_relawan">
                        @foreach ($relawan as $r)
                            <option value="{{$r->id_relawan}}" {{$laporan->id_relawan == $r->id_relawan ? 'selected' : ''}}>
                            {{$r->nama}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Jenis Bencana</label>
                    <select class="form-control" id="select" name="id_jenis_bencana">
                        @foreach ($jenis_bencana as $jenis)
                            <option value="{{$jenis->id_jenis_bencana}}" {{$laporan->id_jenis_bencana == $jenis->id_jenis_bencana ? 'selected' : ''}}>
                            {{$jenis->nama_bencana}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
