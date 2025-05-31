
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>PERPUS - MTSS Asas Islamiyah</title>
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

    <style>
        body {
            background-color: #f8f9fe;
        }
        .card {
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .category-list a {
            display: block;
            padding: 0.5rem 0;
            color: #5e72e4;
            font-weight: 600;
            text-decoration: none;
            border-bottom: 1px solid #e9ecef;
        }
        .category-list a:hover {
            color: #233dd2;
            text-decoration: underline;
        }
        .table thead th {
            border-bottom: 2px solid #dee2e6;
        }
        .table tbody tr:hover {
            background-color: #f6f9fc;
        }
        .page-title {
            margin-bottom: 1rem;
            font-weight: 700;
            color: #32325d;
        }
    </style>

    @yield('style')
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #2980B9">
        <a class="navbar-brand text-white" href="/">PERPUSTAKAAN MTSS Asas Islamiyah</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                    <a class="nav-link" href="/">Beranda </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/login"> <i class="fa fa-sign-in"></i> Login </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card p-4">
                    <h1 class="page-title">Pencarian Buku</h1>
                    <h4 class="mb-4">Kategori : {{ $request_kategori ?? 'Semua' }}</h4>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Judul</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>ISBN</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_buku as $buku)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $buku->kategori_buku->nama_kategori }}</td>
                                        <td>{{ $buku->judul }}</td>
                                        <td>{{ $buku->pengarang }}</td>
                                        <td>{{ $buku->penerbit }}</td>
                                        <td>{{ $buku->tahun_terbit }}</td>
                                        <td>{{ $buku->isbn }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card p-4 category-list">
                    <h4 class="mb-4">Kategori Buku</h4>
                    @php
                        $count_buku = \App\Models\Buku::count();
                    @endphp
                    <a href="/pencarian/buku" class="{{ empty($request_kategori) ? 'font-weight-bold' : '' }}">Semua ({{ $count_buku }})</a>
                    @foreach ($list_kategori_buku as $kategori_buku)
                        @php
                            $count_buku = \App\Models\Buku::where('kategori_buku_id', $kategori_buku->id)->count();
                        @endphp
                        <a href="/pencarian/buku?kategori={{ $kategori_buku->nama_kategori }}"
                            class="{{ $request_kategori == $kategori_buku->nama_kategori ? 'font-weight-bold' : '' }}">
                            {{ $kategori_buku->nama_kategori }} ({{ $count_buku }})
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

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
            $('.datatable').DataTable();
        });
    </script>

</body>

</html>
