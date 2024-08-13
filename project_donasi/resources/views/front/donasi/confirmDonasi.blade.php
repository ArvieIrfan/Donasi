@extends('front.layout.app')
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

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
                    <h2 class="text-center mb-4 title-1" style="font-size: 2.5rem; color: #000; font-weight: 300;">Konfirmasi Pembayaran</h2>
                            <div class="form-group">
                                <label for="nama">Name</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="no_telepon">No Telp</label>
                                <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon" name="no_telepon">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="tanggal" class="form-label"><b>Tanggal:</b></label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal">
                            </div>
                            <button class="btn btn-primary" id="pay-button">Kirim</button>
                </div>
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
        // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{ $token }}', {
          onSuccess: function(result){
            /* You may add your own implementation here */
            window.location.href = "/bencana/{{ $data['id_informasi_bencana'] }}"
            // alert("payment success!"); console.log(result);
          },
          onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); console.log(result);
          },
          onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
          }
        })
      });
    </script>
</body>
@endsection
