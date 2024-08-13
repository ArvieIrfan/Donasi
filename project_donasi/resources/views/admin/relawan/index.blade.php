@extends('admin.layouts.app')
@section('konten')

<div class="container mt-5">
    <h1 class="text-center mb-4 title-1">Daftar Relawan</h1>
    <hr>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('relawan.create') }}" class="btn btn-md btn-primary">
            Tambah
        </a>
    </div>
    <table class="table table-sm table-striped table-light" style="width: 100%" id="example">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Nama Relawan</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($relawan as $r)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $r->nama }}</td>
                    <td>{{ $r->no_telepon }}</td>
                    <td>{{ $r->email }}</td>
                    <td>
                        <a href="{{ route('relawan.show', $r->id_relawan) }}" class="btn btn-sm btn-success" >
                            <i class="zmdi zmdi-eye"></i>
                        </a>
                        <a href="{{ route('relawan.edit', $r->id_relawan) }}" class="btn btn-sm btn-warning" >
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{$r->id_relawan}}">
                            <i class="zmdi zmdi-delete"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{$r->id_relawan}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$r->id_relawan}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel{{$r->id_relawan}}">Hapus Informasi Bencana</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus relawan dengan nama <b>{{$r->nama}}?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <form action="{{ route('relawan.destroy', $r->id_relawan) }}" method="POST">
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

