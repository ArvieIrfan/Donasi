@extends('admin.layouts.app')
@section('konten')

<div class="container mt-5">
    <h1 class="text-center mb-4">Tambah Informasi Bencana</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{route('informasi.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="tgl_bencana">Tanggal Bencana</label>
                    <input type="date" class="form-control" id="tgl_bencana" name="tgl_bencana" value="" required>
                </div>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="form-group">
                    <label for="target_donasi">Target Donasi</label>
                    <input type="text" class="form-control" id="target_donasi" name="target_donasi" required>
                </div>
                <div class="form-group">
                    <label for="tingkat_keparahan">Tingkat Keparahan</label>
                    <select class="form-control" id="tingkat_keparahan" name="tingkat_keparahan" required>
                        <option value="Ringan">Ringan</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Berat">Berat</option>
                        <option value="Sangat Berat">Sangat Berat</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3" ></textarea>
                </div>
                <div class="form-group">
                    <label for="">Laporan</label>
                    <select class="form-control" id="select" name="id_laporan">
                        @foreach ($laporan as $lap)
                            <option value="{{$lap->id_laporan}}">{{$lap->id_laporan}} --- {{$lap->jenisBencana->nama_bencana}} --- {{$lap->lokasi_kejadian}}</option>
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
