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
    <title>PERPUS - SMA S PERTIWI</title>
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

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>

</head>

<body>
    <div>
        <div style="width: 8cm; padding: 5px; border: 1px solid black">
            <div style="display: flex; justify-content: space-around;">
                <div>
                    <img src="/template/assets/images/left.jpg" style="width: 1cm">
                </div>
                <div style="text-align: center; font-size: 8px; font-weight: bold">
                    PEMERINTAHAN PROVINSI JAMBI<br>
                    DINAS PENDIDIKAN DAN KEBUDAYAAN<br>
                    MTSS ASAS ISLAMIYAH<br>
                </div>
                <div>
                    <img src="/template/assets/images/WhatsApp Image 2025-05-05 at 15.07.27.jpg" style="width: 1.1cm">
                </div>
            </div>
            <div style="text-align: center; font-size: 8px"><i>JL. KAPT.PATTIMURA NO. 8 RT.12 KEC. TELANAI PURA KOTA JAMBI</i></div>
            <hr style="border-top: 2px solid black">
            <div style="text-align: center; font-size: 8px; font-weight: bold">KARTU ANGGOTA<br>PERPUSTAKAAN MTSS ASAS ISLAMIYAH</div>
            <table style="font-size: 8px; margin: 15px">
                <tbody>
                    <tr>
                        <td>Nomor Anggota &emsp;</td>
                        <td>: {{ $anggota->id }}</td>
                    </tr>
                    <tr>
                        <td>NISN/NIS &emsp;</td>
                        <td>: {{ $anggota->nis }}</td>
                    </tr>
                    <tr>
                        <td>Nama Anggota &emsp;</td>
                        <td>: {{ $anggota->nama }}</td>
                    </tr>
                    <tr>
                        <td>Kelas&emsp;</td>
                        <td>: {{ $anggota->kelas }}</td>
                    </tr>
                </tbody>
            </table>
            <div style="display: flex; justify-content: space-between; margin: 5px 15px">
                <div>
                    <div style="width: 1.8cm; height: 2.7cm; border: 1px solid black; display: flex; justify-content: center">
                        <span style="font-size: 12px; align-self: center; text-align: center">Pas Photo<br>2x3</span>
                    </div>
                </div>
                <div style="text-align: center; align-self: center">
                    <div style="font-size: 8px; margin-bottom: 5px">Jambi, {{ $anggota->created_at->format('d M Y') }}</div>
                    <img src="/template/assets/images/qrcode.jpg" style="width: 1.5cm">
                </div>
            </div>
        </div>
    </div>

    <script>
        print();
    </script>
</body>

</html>
