@extends('admin.layouts.app')

@section('konten')
    <style>
        body {
            background: #eee;
            margin-top: 20px;
        }

        html body .m-t-30 {
            margin-top: 30px;
        }

        html body .m-t-10 {
            margin-top: 10px;
        }

        html body .font-medium {
            font-weight: 500;
        }

        .img-circle {
            border-radius: 100%;
        }

        h4 {
            line-height: 22px;
            font-size: 18px;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #455a64;
            font-family: "Poppins", sans-serif;
            font-weight: 400;
        }

        .card .card-subtitle {
            font-weight: 300;
            margin-bottom: 15px;
            color: #99abb4;
        }

        a.link {
            color: #455a64;
        }

        .btn-secondary,
        .btn-secondary.disabled {
            -webkit-box-shadow: 0 2px 2px 0 rgba(169, 169, 169, 0.14), 0 3px 1px -2px rgba(169, 169, 169, 0.2), 0 1px 5px 0 rgba(169, 169, 169, 0.12);
            box-shadow: 0 2px 2px 0 rgba(169, 169, 169, 0.14), 0 3px 1px -2px rgba(169, 169, 169, 0.2), 0 1px 5px 0 rgba(169, 169, 169, 0.12);
            -webkit-transition: 0.2s ease-in;
            -o-transition: 0.2s ease-in;
            transition: 0.2s ease-in;
            background-color: #ffffff;
            color: #67757c;
            border-color: #b1b8bb;
        }

        .btn-circle {
            border-radius: 100%;
            width: 40px;
            height: 40px;
            padding: 10px;
        }

        .btn {
            padding: 7px 12px;
            cursor: pointer;
        }
    </style>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            
                        </center>
                    </div>
                    <div>
                        <hr>
                    </div>
                    <div class="card-body">
                        <small class="text-muted">Nama</small>
                        <p>{{ $donatur->nama }}</p>
                        <small class="text-muted">No Telp</small>
                        <p>{{ $donatur->no_telepon }}</p>
                        <small class="text-muted">Email</small>
                        <p class="bio">{{ $donatur->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
