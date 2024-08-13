@extends('front.layout.app')

@section('konten')
<style>
    body {
        background-image: url('{{ asset('front/img/bg-donasi.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
    .input-group-text {
        font-weight: bold;
    }
</style>
<body>
    <div class="container mt-5" style="padding-top: 70px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4 shadow-lg">
                    <h2 class="text-center mb-4 title-1" style="font-size: 2.5rem; color: #000; font-weight: 300;">Bentuk Kepedulianmu</h2>
                    <form id="donationForm" action="{{ route('front.donasi.store', $id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div id="step1" class="form-step">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label"><b>Tanggal:</b></label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal" >
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama">Name</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required>
                                @error('nama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_telepon">No Telp</label>
                                <input type="number" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon" required>
                                @error('no_telepon')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="button" class="btn btn-primary" onclick="nextStep(2)">Selanjutnya</button>
                        </div>
                        <div id="step2" class="form-step" style="display: none;">
                            <div class="mb-3">
                                <label for="jumlah_donasi" class="form-label"><b>Jumlah Donasi:</b></label>
                                <div id="donation-buttons" class="mb-3">
                                    <button type="button" class="btn btn-outline-primary" onclick="selectDonationAmount(100000)">Rp. 100.000</button>
                                    <button type="button" class="btn btn-outline-primary" onclick="selectDonationAmount(200000)">Rp. 200.000</button>
                                    <button type="button" class="btn btn-outline-primary" onclick="selectDonationAmount(300000)">Rp. 300.000</button>
                                    <button type="button" class="btn btn-outline-primary" onclick="selectDonationAmount(500000)">Rp. 500.000</button>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control" name="jumlah_donasi" id="jumlah_donasi" placeholder="Masukkan jumlah donasi lainnya" required>
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary" onclick="prevStep(1)">Kembali</button>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <footer class="py-5" style="margin-bottom: 300px;">
        <div class="container">
        </div>
    </footer>

    <!-- Bootstrap Bundle (Bootstrap + Popper) -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script>
        document.getElementById('tanggal').value = new Date().toISOString().substr(0, 10);

        function nextStep(step) {
            document.querySelectorAll('.form-step').forEach(function(element) {
                element.style.display = 'none';
            });
            document.getElementById('step' + step).style.display = 'block';
        }

        function prevStep(step) {
            document.querySelectorAll('.form-step').forEach(function(element) {
                element.style.display = 'none';
            });
            document.getElementById('step' + step).style.display = 'block';
        }

        function selectDonationAmount(amount) {
            document.getElementById('jumlah_donasi').value = amount;
            document.querySelectorAll('#donation-buttons .btn').forEach(function(button) {
                button.classList.remove('btn-primary');
                button.classList.add('btn-outline-primary');
            });
            event.target.classList.remove('btn-outline-primary');
            event.target.classList.add('btn-primary');
        }

    </script>
</body>
@endsection
