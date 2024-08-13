@extends('front.layout.app')
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

@section('konten')

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

body {
        background-image: url('{{ asset('front/img/bg-donasi.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

.body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.card {
    max-width: 500px;
    margin: auto;
    color: black;
    border-radius: 20 px;
}

p {
    margin: 0px;
}

.container .h8 {
    font-size: 30px;
    font-weight: 800;
    text-align: center;
}

.bb.btn.btn-primary {
    width: 100%;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 15px;
    background-image: linear-gradient(to right, #F8B864 0%, #F49F05 51%, #F8B864 100%);
    border: none;
    transition: 0.5s;
    background-size: 200% auto;

}


.bb.btn.btn.btn-primary:hover {
    background-position: right center;
    color: #fff;
    text-decoration: none;
}



.bb.btn.btn-primary:hover .fas.fa-arrow-right {
    transform: translate(15px);
    transition: transform 0.2s ease-in;
}

.form-control {
    color: #8e6c46;
    border: 2px solid #F8B864;
    height: 60px;
    padding-left: 20px;
    vertical-align: middle;
}

.form-control:focus {
    color: #8e6c46;
    border: 2px solid #F49F05;
    box-shadow: none;
}

.text {
    font-size: 14px;
    font-weight: 600;
}

::placeholder {
    font-size: 14px;
    font-weight: 600;
}
</style>

<div class="body container p-0">
    <div class="card px-4">
        <p class="h8 py-3">Konfirmasi Pembayaran</p>
        <div class="row gx-3">
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Tanggal</p>
                    <input class="form-control mb-3" id="tanggal"  type="text" placeholder="MM/YYYY" readonly>
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex flex-column">
                    <p class="text mb-1">ID Bayar</p>
                    <input class="form-control mb-3 pt-2" id="id_donasi" type="text" placeholder="***" readonly>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Nama</p>
                    <input class="form-control mb-3" id="nama" type="text" placeholder="Name" readonly>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex flex-column">
                    <p class="text mb-1">Email</p>
                    <input class="form-control mb-3" type="email" id="email" value="{{ $data['email'] }}" placeholder="wdwdaw@gmail.cmo" readonly>
                </div>
            </div>
            <input type="hidden" type="text" id="amount">
            <div class="col-12">
                <button type="submit" class="bb btn btn-primary mb-3 text-white" id="pay-button">
                    <span class="ps-3">Bayar : Rp. {{ number_format($data['jumlah_donasi']) }} </span>
                    <span class="fas fa-arrow-right"></span>
                </div>
            </div>
        </div>
    </div>
</div>

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
         window.location.href = "/bencana/{{ $id_bencana }}"
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
 <script>
    var data = {
            donasi: "<?php echo $id_donasi; ?>",
            tanggal: "<?php echo $data['tanggal']; ?>",
            nama: "<?php echo $data['nama']; ?>",
            no_telepon: "<?php echo $data['no_telepon']; ?>",
            amount: "<?php echo $data['jumlah_donasi']; ?>"
        };

        // Set the form values
        document.getElementById('id_donasi').value = data.donasi;
        document.getElementById('tanggal').value = data.tanggal;
        document.getElementById('nama').value = data.nama;
        document.getElementById('no_telepon').value = data.no_telepon;
        document.getElementById('amount').value = data.amount;
 </script>
@endsection
