@extends('admin.layouts.app')
@section('konten')

<div class="container mt-5">
    <h1 class="text-center mb-4 title-1">Daftar Informasi Bencana</h1>
    <hr>
    <div class="d-flex justify-content-between align-items-center mb-3">
    <a href="{{ route('jenis_bencana.create') }}" class="btn btn-md btn-primary">
        Tambah
    </a>
</div>

<table id="example" class="table table-sm table-striped table-light" style="width:100%">
    <thead class="thead thead-light">
        <tr>
            <th>No</th>
            <th>Id Jenis Bencana</th>
            <th>Nama Bencana</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jenis as $j)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $j->id_jenis_bencana }}</td>
            <td>{{ $j->nama_bencana }}</td>
            <td>
                <a href="{{route('jenis_bencana.edit', $j->id_jenis_bencana)}}" class="btn btn-sm btn-warning" >
                    <i class="zmdi zmdi-edit"></i>
                </a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{$j->id_jenis_bencana}}">
                    <i class="zmdi zmdi-delete"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="deleteModal{{$j->id_jenis_bencana}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$j->id_jenis_bencana}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel{{$j->id_jenis_bencana}}">Hapus Informasi Bencana</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Apakah anda yakin ingin menghapus ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="{{ route('jenis_bencana.destroy', $j->id_jenis_bencana) }}" method="POST">
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

@endsection



