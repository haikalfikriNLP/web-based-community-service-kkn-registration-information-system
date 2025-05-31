<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Registration form">
    <meta name="author" content="Creative Tim">
    <title>Register - PERPUSTAKAAN MTSS Asas Islamiyah</title>
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
</head>

<body class="bg-default">
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary-custom py-6">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">PERPUSTAKAAN MTSS <br> Asas Islamiyah</h1>
                            <p class="text-lead text-white">Silakan isi form registrasi untuk membuat akun baru</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <form method="POST" action="/register">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Name" type="text" name="name" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Username" type="text" name="username" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                        </div>
                                        <select class="form-control" name="level" required>
                                            <option value="" disabled selected>Select Level</option>
                                            <option value="user">User</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4 w-100">Register</button>
                                </div>
                            </form>
                            <div class="text-center mt-3">
                                <a href="{{ route('login') }}" class="text-muted"><small>Back to login</small></a>
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
                            target="_blank">MTSS Asas Islamiyah</a>
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
