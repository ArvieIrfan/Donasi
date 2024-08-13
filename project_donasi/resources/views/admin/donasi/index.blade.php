@extends('admin.layouts.app')
@section('konten')

<div class="container mt-5">
    <h1 class="text-center mb-4 title-1">Daftar Donasi</h1>
    <hr>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a href="{{ route('admin.donasi.create') }}" class="btn btn-md btn-primary mr-3">
            <i class="zmdi zmdi-plus"> Tambah</i>
        </a>
        <a href="{{ route('admin.donasi.print') }}" class="btn btn-md btn-secondary" >
            <i class="zmdi zmdi-print"> Print</i>
        </a>
    </div>
    <table class="table table-sm table-striped table-light" style="width: 100%" id="example">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>ID Donasi</th>
                <th>Informasi Bencana</th>
                <th>Donatur</th>
                <th>Tanggal Donasi</th>
                <th>Jumlah Donasi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donasi as $index => $d)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $d->id_donasi }}</td>
                    <td width="350">{{ $d->informasiBencana->judul }}</td>
                    <td>{{ $d->Donatur->nama }}</td>
                    <td>{{ $d->tanggal }}</td>
                    <td>Rp. {{ number_format($d->jumlah_donasi) }}</td>
                    <td>{{ $d->status }}</td>
                    <td>
                        <a href="{{ route('admin.donasi.edit', $d->id_donasi) }}" class="btn btn-sm btn-warning" >
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal{{$d->id_donasi}}">
                            <i class="zmdi zmdi-delete"></i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{$d->id_donasi}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$d->id_donasi}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel{{$d->id_donasi}}">Hapus Donasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin ingin menghapus donasi dengan ID <b>{{$d->id_donasi}}?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <form action="{{ route('admin.donasi.destroy', $d->id_donasi) }}" method="POST">
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
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-button');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const form = this.closest('.delete-form');
            Swal.fire({
                title: 'Apakah Anda yakin ingin menghapus?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        });
    });
});
</script>
@endsection
