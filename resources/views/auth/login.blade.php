<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>KKN - Universitas Batanghari Jambi</title>
    <!-- Favicon -->
    <link rel="icon" href="/template/argon/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="/template/argon/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="/template/argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="/template/argon/assets/css/argon.css?v=1.2.0" type="text/css">
    <style>
        body {
            background: linear-gradient(87deg, #11cdef 0, #1171ef 100%) !important;
        }
        .card {
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .btn-primary {
            background-color: #1171ef;
            border-color: #1171ef;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0a4cd1;
            border-color: #0a4cd1;
        }
        .input-group-text {
            background-color: #1171ef;
            color: white;
            border: none;
        }
        .form-control:focus {
            border-color: #1171ef;
            box-shadow: 0 0 0 0.2rem rgba(17, 113, 239, 0.25);
        }
        .header {
            background: transparent !important;
        }
    </style>
</head>

<body class="bg-default">
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header py-6">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">KKN - Universitas Batanghari Jambi</h1>
                            <p class="text-lead text-white">Selamat Datang Di Sistem KKN<br>Silakan
                                login untuk
                                menggunakan sistem</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <form method="POST" action="/login">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Username" type="username"
                                            name="username" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password"
                                            name="password" required>
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span class="text-muted">Remember me</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4 w-100">Login</button>
                                </div>
                            </form>
                            <div class="text-center mt-3" style="position: relative; z-index: 10;">
                                <a href="{{ route('register') }}" class="text-primary font-weight-bold"><small>Register a new account</small></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="py-5" id="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright text-center text-muted">
                        &copy; 2025 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                            target="_blank">KKN - Universitas Batanghari Jambi</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="/template/argon/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/template/argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/template/argon/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="/template/argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="/template/argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="/template/argon/assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
