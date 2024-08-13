@extends('admin.layouts.app')

@section('konten')
<div class="container mt-5">
    <h1 class="text-center mb-4">Detail Bukti Donasi</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="row">ID Donasi</th>
                        <td>{{ $donasi->id_donasi }}</td>
                    </tr>
                    <tr>
                        <th scope="row">ID Informasi Bencana</th>
                        <td>{{ $donasi->id_informasi_bencana }}</td>
                    </tr>
                    <tr>
                        <th scope="row">ID Donatur</th>
                        <td>{{ $donasi->id_donatur }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nama Donatur</th>
                        <td>{{ $donatur->nama }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Tanggal Donasi</th>
                        <td>{{ $donasi->tanggal }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Jumlah Donasi</th>
                        <td>{{ $donasi->jumlah_donasi }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
