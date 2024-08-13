@extends('admin.layouts.app')
@section('konten')

<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Informasi Bencana</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{route('informasi.update', $informasiBencana->id_bencana)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="tgl_bencana">Tanggal Bencana</label>
                    <input type="date" class="form-control" id="tgl_bencana" name="tgl_bencana" required value="{{$informasiBencana->tgl_bencana}}">
                </div>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required value="{{$informasiBencana->judul}}">
                </div>
                <div class="form-group">
                    <label for="target_donasi">Target Donasi</label>
                    <input type="text" class="form-control" id="target_donasi" name="target_donasi" value="{{$informasiBencana->target_donasi}}">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required>{{$informasiBencana->keterangan}}</textarea>
                </div>
                <div class="form-group">
                    <label for="tingkat_keparahan">Tingkat Keparahan</label>
                    <select class="form-control" id="tingkat_keparahan" name="tingkat_keparahan" required value="{{$informasiBencana->tingkat_keparahan}}">
                        <option value="Ringan" {{$informasiBencana->tingkat_keparahan == 'Ringan' ? 'selected' : ''}}>Ringan</option>
                        <option value="Sedang" {{$informasiBencana->tingkat_keparahan == 'Sedang' ? 'selected' : ''}}>Sedang</option>
                        <option value="Berat" {{$informasiBencana->tingkat_keparahan == 'Berat' ? 'selected' : ''}}>Berat</option>
                        <option value="Sangat Berat" {{$informasiBencana->tingkat_keparahan == 'Sangat Berat' ? 'selected' : ''}}>Sangat Berat</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Id Laporan</label>
                    <select class="form-control" id="select" name="id_laporan">
                        @foreach ($laporan as $lap)
                            <option value="{{$lap->id_laporan}}" {{$informasiBencana->id_laporan == $lap->id_laporan ? 'selected' : ''}}>
                            {{$lap->id_laporan}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('informasi.index')}}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>

@endsection
