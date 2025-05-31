<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>KKN - UNIVERSITAS BATANGHARI JAMBI</title>
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
        /* Smooth scrolling for anchor links */
        html {
            scroll-behavior: smooth;
        }

        /* Hero section overlay */
        .hero-section {
            position: relative;
            width: 100%;
            height: 80vh;
            background-image: url('/template/images/bg.jpg');
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.7);
        }

        .hero-section h1.display-3.font-weight-bold {
            color: #ffffff;
            text-shadow:
                0 0 5px #ffffff,
                0 0 10px #ffffff,
                0 0 20px #ffffff,
                0 0 30px #00bfff,
                0 0 40px #00bfff,
                0 0 50px #00bfff,
                0 0 60px #00bfff;
        }

        /* Modern card style */
        .card {
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.25);
        }

        /* Section headings */
        h1 {
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #34495e;
        }

        /* Navbar brand font weight */
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }

        /* Footer style */
        #footer-main {
            background-color: #f8f9fe;
            padding: 2rem 0;
            font-size: 0.9rem;
            color: #8898aa;
        }
    </style>

    @yield('style')
</head>

<body style="background-color: #ecf0f1">
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #2980B9">
        <a class="navbar-brand text-white" href="/">KKN UNIVERSITAS BATANGHARI JAMBI</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button type="button" class="btn btn-outline-light ml-3 d-lg-none" data-toggle="modal" data-target="#infoModal">
            Menu
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#sejarah_universitas">Sejarah Universitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#visi_dan_misi">Visi Dan Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tata_tertib_kkn">Tata Tertib KKN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pencarian_kkn">Pencarian KKN</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/login"> <i class="fa fa-sign-in"></i> Login </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel">Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="#informasi_sekolah" data-dismiss="modal">Informasi Sekolah</a></li>
                        <li class="list-group-item"><a href="#visi_dan_misi" data-dismiss="modal">Visi Dan Misi</a></li>
                        <li class="list-group-item"><a href="#tata_tertib_perpustakaan" data-dismiss="modal">Tata Tertib Perpustakaan</a></li>
                        <li class="list-group-item"><a href="/pencarian/buku" data-dismiss="modal">Pencarian Buku</a></li>
                        <li class="list-group-item"><a href="/login" data-dismiss="modal">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="hero-section">
        <div class="text-center px-3">
            <h1 class="display-3 font-weight-bold">Sistem Informasi KKN</h1>
            <h2 class="lead font-weight-light">Universitas Batanghari Jambi</h2>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5" id="informasi_sekolah">
            <div class="col text-center">
                <h1>Sejarah Universitas</h1>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card shadow border text-left p-4">
                            <h2>Sejarah Yayasan Pendidikan Jambi dan Universitas Batanghari (UNBARI)</h2>
                            <div class="mb-3">
                                <img src="../template/images/Logo_default_1.png" alt="UNBARI" 
                                    class="float-left mr-4 rounded" style="width: 300px; height: auto;">
                                <p style="text-align: justify;">
                                    Assalamu'alaikum wr.wb.<br>
                                    Yayasan Pendidikan Jambi didirikan dengan tujuan mendukung perkembangan pendidikan di Provinsi Jambi. Awalnya, yayasan ini membina Sekolah Tinggi Keguruan dan Ilmu Pendidikan (STKIP) Jambi pada periode 1970–1977. Pada tahun 1985, yayasan mengalami perkembangan signifikan dengan penambahan anggota badan pendiri dari semula 7 orang menjadi 15 orang. Visi utamanya adalah meningkatkan kualitas pendidikan melalui penyediaan sarana dan prasarana yang memadai.
                                    Latar belakang berdirinya Universitas Batanghari (UNBARI) tidak lepas dari keterbatasan daya tampung perguruan tinggi negeri di Jambi, yang mendorong kebutuhan akan hadirnya universitas swasta. Nama "Batanghari" dipilih sebagai simbol kebanggaan masyarakat Jambi, mengacu pada Sungai Batanghari yang melintasi seluruh wilayah provinsi ini. UNBARI didirikan oleh Yayasan Pendidikan Jambi sebagai bentuk transformasi dari STKIP Jambi, menandai babak baru dalam sejarah pendidikan tinggi di daerah tersebut.

                                    Universitas Batanghari secara resmi dibuka pada 1 November 1985 dengan empat fakultas, yaitu Keguruan dan Ilmu Pendidikan (FKIP), Ekonomi, Hukum, dan Teknik. Pada tahun pertama, UNBARI menerima 362 mahasiswa. Perkembangan jumlah mahasiswa mengalami fluktuasi, dengan puncaknya mencapai 6.026 mahasiswa pada tahun akademik 2016/2017. Seiring waktu, Fakultas Pertanian juga didirikan untuk memperluas bidang studi yang ditawarkan.
                                    Sejak berdiri, UNBARI telah dipimpin oleh beberapa rektor:
                                    Drs. Kemas Mohamad Saleh (1985–1988)
                                    Drs. Mailoedin ADN (1988–1996)
                                    Drs. H. Hasip Kalimuddin Syam (1996–2005)
                                    H. Fachruddin Razi, SH., MH. (2005–2021)
                                    Prof. Dr. Herri, SE, MBA (2022–sekarang, sebagai Pejabat Sementara)

                                    Keberadaan UNBARI mencerminkan upaya memenuhi kebutuhan akses pendidikan tinggi di Jambi sekaligus memperkuat integrasi pendidikan nasional. Nama "Batanghari" tidak hanya menjadi identitas kampus, tetapi juga simbol kebanggaan masyarakat Jambi yang kental dengan nilai kultural dan geografis.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mx-auto">
                        <div class="card shadow border p-4">
                            <h2>Contact</h2>
                            <div class="font-weight-bold">Alamat</div>
                            <div>
                                Jl. Slamet Riyadi No.1, Sungai Putri, Danau Sipin, 
                                Kota Jambi, Jambi 36122<br>
                                Didirikan: 1985<br>
                                Provinsi: Jambi<br>
                                Warna: Hijau<br>
                            </div>
                            <br>
                            <div class="font-weight-bold">Informasi Kontak</div>
                            <div> Telephone : (0741) 60673, (0274) 668073<br>
                            Email : info@unbari.ac.id<br>
                            Website : unbari.ac.id<br></div>
                            <br>
                            <div class="font-weight-bold">Google Maps</div>
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.253189242619!2d103.59345669999999!3d-1.6049098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2588f670dcec45%3A0xc4e10a3a0b6db766!2sUniversitas%20Batanghari!5e0!3m2!1sid!2sid!4v1748356115305!5m2!1sid!2sid" 
                                    style="border:0;" 
                                    allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                        <div class="card shadow border mt-4 p-4">
                            <h2>Jadwal Operasional</h2>
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <td>Senin - Jum'at</td>
                                        <td>8 pagi s/d 4 sore</td>
                                    </tr>
                                    <tr>
                                        <td>Sabtu</td>
                                        <td>9 pagi s/d 2 sore</td>
                                    </tr>
                                    <tr>
                                        <td>Minggu</td>
                                        <td>Tutup</td>                                  
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5" id="visi_dan_misi">
            <div class="col text-center">
                <h1>Visi dan Misi</h1>
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="card shadow border p-4">
                            <h2>Visi</h2>
                            <p class="card-text" style="text-align: justify;">Pada tahun 2030 UNBARI 
                                menjadi pusat unggulan dalam pembelajaran dan pengembangan ilmu 
                                pengetahuan, teknologi dan seni atas 
                                dasar akhlak mulia untuk kesejahteraan masyarakat.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mx-auto">
                        <div class="card shadow border p-4">
                            <h2>Misi</h2>
                            <p class="card-text" style="text-align: justify;">
                                Menyelenggarakan pendidikan dan kegiatan pembelajaran yang berkualitas, efisien, efektif dan akuntabel dengan suasana akademik yang kondusif;
Mengembangkan penelitian dan kajian ilmiah;
Melaksanakan tanggung jawab sosial kepada masyarakat dengan penerapan hasil-hasil penelitian;
Mengembangkan  kurikulum yang fleksibel dan relevan dengan kebutuhan lokal, regional, nasional dan internasional;
Mewujudkan organisasi yang sehat dan memiliki keunggulan kompetitif.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5" id="tata_tertib_kkn">
            <div class="col text-center">
                <h1>Tata Tertib KKN</h1>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="card shadow border p-4">
                            <div class="text-left">
                                <ol type="I">
                                    <li>
                                        TATA TERTIB MASUK KERUANGAN PERPUSTAKAAN :
                                        <ol>
                                            <li>Pemustaka tidak diperkenankan menggunakan sepatu, tas dan jaket.</li>
                                            <li>Pemustaka tidak diperkenankan membawa buku teks pribadi.</li>
                                        </ol>
                                    </li>
                                    <br>
                                    <li>
                                        TATA TERTIB  DI DALAM RUANGAN PERPUSTAKAAN :
                                        <ol>
                                            <li>Berpakaian rapi.</li>
                                            <li>Tidak diperkenankan makan dan minum di dalam ruangan Perpustakaan.</li>
                                            <li>Bersikap sopan dan tidak diperkenankan bercakap-cakap (Mengobrol) di 
                                                dalam ruangan Perpustakaan.</li>
                                        </ol>
                                    </li>
                                    <br>
                                    <li>
                                        KETENTUAN PEMINJAMAN DAN PENGEMBALIAN KOLEKSI PERPUSTAKAAN :
                                        <ol>
                                            <li>Pemustaka harus mempunyai Kartu Anggota Perpustakaan yang masih berlaku.</li>
                                            <li>Anggota Perpustakaan berhak meminjam buku, maksimal 2 buku selama 1 minggu.</li>
                                            <li>Perpanjangan masa pinjam buku dapat dilakukan 1 kali dengan waktu perpanjangan masa 
                                                pinjam selama 1 minggu dan harus menunjukkan bukunya kepada Pustakawan.</li>
                                            <li>Bila buku yang di bawa keluar ruangan Perpustakaan oleh pemustaka tetapi 
                                                belum melakukan proses peminjaman, 
                                                maka pemustaka wajib mengembalikan buku kepada Pustakawan.</li>
                                        </ol>
                                    </li>
                                    <br>
                                    <li>
                                        SANKSI :
                                        <ol>
                                            <li>
                                                Bila terlambat mengembalikan buku, yaitu lewat masa pinjam, 
                                                maka pemustaka dikenakan denda sebesar Rp. 2000.,/Buku/Hari.
                                            </li>
                                            <li>
                                                Bila buku rusak atau hilang pemustaka harus menggantikan dengan yang baru.	 
                                            </li>
                                            <li>Pemustaka menyertakan surat pernyataan telah merusak atau menghilangkan buku.</li>
                                            <li>Pelanggaran terhadap Peraturab Perpustakaan dapat mengakibatkan 
                                                status keanggotannya di hilangkan.</li>
                                        </ol>
                                    </li>
                                    <br>
                                    <li>
                                        CATATAN :
                                        <ol>
                                            <li>
                                                Bagi peserta KKN yang telah selesai wajib memiliki
                                                surat bukti bebas KKN.
                                            </li>
                                            
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
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
