@extends('admin.layouts.app')
@section('konten')
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Donasi</h1>
    <form action="{{ route('admin.donasi.update', $donasi->id_donasi) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_informasi_bencana">ID Informasi Bencana</label>
            <select class="form-control @error('id_informasi_bencana') is-invalid @enderror" id="id_informasi_bencana" name="id_informasi_bencana">
                <option value="">Pilih Informasi Bencana</option>
                @foreach($informasiBencana as $bencana)
                    <option value="{{ $bencana->id_bencana }}" {{ $donasi->id_informasi_bencana == $bencana->id_bencana ? 'selected' : '' }}>
                        {{ $bencana->id_bencana }} - {{ $bencana->keterangan }}
                    </option>
                @endforeach
            </select>
            @error('id_informasi_bencana')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="id_donatur">ID Donatur</label>
            <select class="form-control @error('id_donatur') is-invalid @enderror" id="id_donatur" name="id_donatur">
                <option value="">Pilih Donatur</option>
                @foreach($donatur as $d)
                    <option value="{{ $d->id_donatur }}" {{ $donasi->id_donatur == $d->id_donatur ? 'selected' : '' }}>
                        {{ $d->id_donatur }} - {{ $d->nama }}
                    </option>
                @endforeach
            </select>
            @error('id_donatur')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Donasi</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ $donasi->tanggal }}" required>
            @error('tanggal')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="jumlah_donasi">Jumlah Donasi</label>
            <input type="number" class="form-control @error('jumlah_donasi') is-invalid @enderror" id="jumlah_donasi" name="jumlah_donasi" value="{{ $donasi->jumlah_donasi }}" required>
            @error('jumlah_donasi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="norek">No. Rekening</label>
            <input type="text" class="form-control @error('norek') is-invalid @enderror" id="norek" name="norek" value="{{ $donasi->norek }}" required>
            @error('norek')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="bukti">Bukti</label>
            <input type="file" class="form-control-file @error('bukti') is-invalid @enderror" id="bukti" name="bukti" accept="image/*">
            @error('bukti')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            @if ($donasi->bukti)
                <div class="mt-3">
                    <label>Current Bukti:</label><br>
                    <img src="{{ asset('admin/images') }}/{{ $donasi->bukti }}" alt="Current Bukti" width="150">
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update Donasi</button>
    </form>
</div>
@endsection
