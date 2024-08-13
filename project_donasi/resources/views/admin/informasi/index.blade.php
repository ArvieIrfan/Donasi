@extends('admin.layouts.app')
@section('konten')

    <div class="container mt-5">
        <h1 class="text-center mb-4 title-1">Daftar Informasi Bencana</h1>
        <hr>
        <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('informasi.create') }}" class="btn btn-md btn-primary">
            Tambah
        </a>
    </div>
    <table class="table table-sm table-striped table-light" style="width: 100%" id="example">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Tanggal Bencana</th>
                <th>Tingkat Keparahan</th>
                <th>Lokasi Kejadian</th>
                <th>Jenis Bencana</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1 @endphp
            @foreach ($informasiBencana as $ib)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$ib->tgl_bencana}}</td>
                    <td>
                        <span class="badge badge-{{
                            $ib->tingkat_keparahan == 'Ringan' ? 'success' :
                            ($ib->tingkat_keparahan == 'Sedang' ? 'warning' :
                            ($ib->tingkat_keparahan == 'Berat' ? 'danger' :
                            ($ib->tingkat_keparahan == 'Sangat Berat' ? 'dark' : 'secondary')))}}">
                            {{$ib->tingkat_keparahan}}
                        </span>
                    </td>
                    <td>{{$ib->laporan->lokasi_kejadian}}</td>
                    <td>{{$ib->laporan->jenisBencana->nama_bencana}}</td>
                    <td>
                        <a href="{{route('informasi.show', $ib->id_bencana)}}" class="btn btn-sm btn-success" >
                            <i class="zmdi zmdi-eye"></i>
                        </a>
                        <a href="{{route('informasi.edit', $ib->id_bencana)}}" class="btn btn-sm btn-warning" >
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{$ib->id_bencana}}">
                            <i class="zmdi zmdi-delete"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{$ib->id_bencana}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$ib->id_bencana}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel{{$ib->id_bencana}}">Hapus Informasi Bencana</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus informasi bencana pada tanggal <b>{{$ib->tgl_bencana}}?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <form action="{{route('informasi.destroy', $ib->id_bencana)}}" method="POST">
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
