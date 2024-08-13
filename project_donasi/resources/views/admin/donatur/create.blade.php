@extends('admin.layouts.app')
@section('konten')
    {{-- @foreach ($donatur as $index => $id_donatur) --}}
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Donatur</h1>
        <form action="{{ route('admin.donatur.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Name</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                    required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="no_telepon">No Telp</label>
                <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon"
                    name="no_telepon" required>
                @error('no_telepon')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('admin.donatur.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    {{-- @endforeach --}}
@endsection
