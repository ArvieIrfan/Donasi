@extends('admin.layouts.app')
@section('konten')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit Donatur</h1>
        <form action="{{ route('admin.donatur.update', $donatur->id_donatur) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Name</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $donatur->nama }}" required>
            </div>
            <div class="form-group">
                <label for="no_telepon">No Telp</label>
                <input type="text" class="form-control" id="no_telepon" name="no_telepon"
                    value="{{ $donatur->no_telepon }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $donatur->email }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('admin.donatur.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
