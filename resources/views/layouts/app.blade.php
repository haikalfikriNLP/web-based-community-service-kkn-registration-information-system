<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>PERPUS - MTSS ASAS ISLAMIYAH</title>
    <!-- Favicon -->
    <link rel="icon" href="/template/argon/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="/template/argon/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="/template/argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="/template/argon/assets/css/argon.css?v=1.2.0" type="text/css">

    <link rel="stylesheet" href="/template/datatables/datatables.min.css" type="text/css">

    <link rel="stylesheet" href="/template/sweetalert2/sweetalert2.min.css" type="text/css">


    @yield('style')
</head>

<body>

    <div id="swal" data-type="{{ session()->get('type') }}" data-message="{{ session()->get('message') }}"></div>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <span>KKN UNIVERSITAS BATANGHARI JAMBI</span>
                </a>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="/admin/beranda">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Beranda</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Management</span>
                    </h6>
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/anggota">
                                <i class="ni ni-single-02 text-danger"></i>
                                <span class="nav-link-text">Data Anggota</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/admin">
                                <i class="ni ni-single-02 text-warning"></i>
                                <span class="nav-link-text">Data Admin</span>
                            </a>
                        </li>
                    </ul>
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Laporan</span>
                    </h6>
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/laporan/anggota">
                                <i class="ni ni-single-02 text-primary"></i>
                                <span class="nav-link-text">Laporan Anggota</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark border-bottom" style="background-color: #2980b9">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                                data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show"
                                data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="/template/assets/images/user.png">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="/admin/logout" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="/template/argon/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/template/argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/template/argon/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="/template/argon/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="/template/argon/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="/template/argon/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="/template/argon/assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="/template/argon/assets/js/argon.js?v=1.2.0"></script>

    <script src="/template/datatables/datatables.min.js"></script>
    <script src="/template/sweetalert2/sweetalert2.min.js"></script>

    <script>
        $(document).ready(function() {
            var swal = $('#swal');
            var type = swal.data('type');
            var message = swal.data('message');

            if (type && message) {
                Swal.fire(
                    type,
                    message,
                    type
                )
            }
        })
    </script>


    @yield('script')
</body>

</html>
