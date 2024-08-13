@extends('admin.layouts.app')
@section('konten')

    <div class="container mt-5">
        <h1 class="text-center mb-4 title-1">Daftar Laporan</h1>
        <hr>
        <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('laporan.create') }}" class="btn btn-md btn-primary">
            Tambah
        </a>
    </div>
    <table class="table table-sm table-striped table-light" style="width: 100%" id="example">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Tanggal Laporan</th>
                <th>Lokasi Kejadian</th>
                <th>Relawan</th>
                <th>Jenis Bencana</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1 @endphp
            @foreach ($laporan as $lap)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$lap->tgl_laporan}}</td>
                    <td>{{$lap->lokasi_kejadian}}</td>
                    <td>{{$lap->relawan->nama}}</td>
                    <td>{{$lap->jenisBencana->nama_bencana}}</td>
                    <td>
                        <a href="{{route('laporan.show', $lap->id_laporan)}}" class="btn btn-sm btn-success" >
                            <i class="zmdi zmdi-eye"></i>
                        </a>
                        <a href="{{route('laporan.edit', $lap->id_laporan)}}" class="btn btn-sm btn-warning" >
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{$lap->id_laporan}}">
                            <i class="zmdi zmdi-delete"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{$lap->id_laporan}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$lap->id_laporan}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel{{$lap->id_laporan}}">Hapus Laporan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus laporan pada tanggal <b>{{$lap->tgl_laporan}}</b>, lokasi <b>{{$lap->lokasi_kejadian}}</b>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <form action="{{ route('laporan.destroy', $lap->id_laporan) }}" method="POST">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const clearSearchBtn = document.getElementById('clearSearch');

        // Function to clear search input
        const clearSearch = () => {
            searchInput.value = '';
            clearSearchBtn.style.display = 'none'; // Hide the clear button
            searchInput.closest('form').submit(); // Submit the form after clearing
        };

        // Show/hide clear button based on input value
        searchInput.addEventListener('input', function() {
            clearSearchBtn.style.display = this.value ? 'block' : 'none';
        });

        // Handle click on clear button
        clearSearchBtn.addEventListener('click', function() {
            clearSearch();
        });
    });
</script>
@endsection
