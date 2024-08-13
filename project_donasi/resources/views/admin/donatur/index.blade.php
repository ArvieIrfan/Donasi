@extends('admin.layouts.app')
@section('konten')

<div class="container mt-5">
    <h1 class="text-center mb-4 title-1">Daftar Donatur</h1>
    <hr>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('admin.donatur.create') }}" class="btn btn-md btn-primary">
            Tambah
        </a>
    </div>
    <table class="table table-sm table-striped table-light" style="width: 100%" id="example">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Telp</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donatur as $index => $donatur)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $donatur->nama }}</td>
                    <td>{{ $donatur->no_telepon }}</td>
                    <td>{{ $donatur->email }}</td>
                    <td>
                        <a href="{{ route('admin.donatur.edit', $donatur->id_donatur) }}" class="btn btn-sm btn-warning" >
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{$donatur->id_donatur}}">
                            <i class="zmdi zmdi-delete"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{$donatur->id_donatur}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$donatur->id_donatur}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel{{$donatur->id_donatur}}">Hapus Donatur</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus donatur dengan nama <b>{{$donatur->nama}}?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <form action="{{ route('admin.donatur.destroy', $donatur->id_donatur) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Batas Modal Hapus -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
