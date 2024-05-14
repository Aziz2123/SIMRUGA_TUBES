<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="BfOHsHabTOuHYz1R4LWu6ex7eD5lepYBNiHSfgYn">
    <title>SIMRUGA</title>

    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/check-bootstrap/fcheck-bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <style>
        /* CSS untuk mengganti warna background */
        body.login-page {
            background-color:#EBF5FB ; /* Ganti dengan warna background yang diinginkan */
        }
    </style>
</head>

<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <img src="http://127.0.0.1:8000/adminlte/dist/img/simruga.png" alt="Admin Logo" style="border-radius: 50%; height: 50px; width: 75px">
            <b>SIMRUGA</b>
        </div>
        
        <div class="card card-outline card-primary">
            <!-- Gambar yang ditambahkan -->
            <div class="login-img">
                <img src="http://127.0.0.1:8000/vendor/adminlte/dist/img/login.png" alt="Background Image" style="max-width: 100%;">
            </div>

            <div class="card-header">
                <h3 class="card-title float-none text-center">Login Menggunakan Nama & Password</h3>
            </div>

            <div class="card-body login-card-body">
                <form action="http://127.0.0.1:8000/proses_login" method="post">
                    <input type="hidden" name="_token" value="BfOHsHabTOuHYz1R4LWu6ex7eD5lepYBNiHSfgYn" autocomplete="off">

                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" value="" placeholder="Username" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fa fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-7">
                            <div class="icheck-primary" title="Keep me authenticated indefinitely or until I manually logout">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <button type=submit class="btn btn-block btn-flat btn-primary">
                                <span class="fa fa-sign-in-alt"></span>
                                Sign In
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <p class="my-0">
                    <a href="http://127.0.0.1:8000/register">Register a new membership</a>
                </p>
            </div>
        </div>
    </div>

    <script src="http://127.0.0.1:8000/vendor/jquery/jquery.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor
