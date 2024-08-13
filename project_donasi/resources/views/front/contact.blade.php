@extends('front.layout.app')

@section('konten')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Contact Us</h1>
        <p class="fs-5 text-white mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Contact</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid bg-light py-5">
    <div class="container py-5">
        <div class="contact p-5">
            <div class="row g-4">
                <div class="col-xl-5">
                    <h1 class="mb-4">Kontak Kami</h1>
                    <p class="mb-4">Jika kamu ingin bertanya, memberikan kritik, saran dan melaporkan bencana yang ada di tempat kamu, kamu dapat menghubungi tim kami lewat kontak yang kami berikan disamping.</p>
                </div>
                <div class="col-xl-7">
                    <div>
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="bg-white p-4">
                                    <i class="fa fa-clock fa-2x text-primary mb-2"></i>
                                    <h4>Address</h4>
                                    <p class="mb-0 p-0" style="font-size: 10px">Pesanggrahan, Kec.Pesanggrahan, <br> Kota Jakarta Selatan, DKI Jakarta</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-white p-4">
                                    <i class="fas fa-envelope fa-2x text-primary mb-3"></i>
                                    <h4>Mail Us</h4>
                                    <p class="mb-0" style="font-size: 12px">Responbencana@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="bg-white p-4">
                                    <i class="fa fa-phone-alt fa-2x text-primary mb-2"></i>
                                    <h4>Telephone</h4>
                                    <p class="mb-0">022-1234567</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <iframe class="w-100" style="height: 412px; margin-bottom: -6px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253689.16385811268!2d106.62794350458464!3d-6.535172095413351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f0f19a11ab7f%3A0xfd6ade06f60f9665!2sTANGGAP%20BENCANA%20INDONESIA!5e0!3m2!1sen!2sid!4v1719063798017!5m2!1sen!2sid"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        Swal.fire({
            icon: 'success',
            title: 'Pesan Anda Berhasil Dikirim!',
            text: 'Terima kasih telah menghubungi kami.',
        });
        document.getElementById('contactForm').reset();
    });
</script>
@endsection
