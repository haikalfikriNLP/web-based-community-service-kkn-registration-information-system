<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
    <link rel="stylesheet" href="/template/argon/assets/css/argon.css?v=1.2.0" type="text/css">

</head>

<body>
    <div class="container" style="background-color: white;">
        <div class="row">
            <div class="col">
                <div style="display: flex">
                    <div style="display: inline-block;align-self: center">
                        <img src="/template/images/logo12.jpeg" width="100px">
                    </div>
                    <div class="m-auto" style="display: inline-block">
                        <h2 class="text-center">Laporan Data Buku</h2>
                        <p class="text-center">
                            MTSS ASAS ISLAMIYAH
                            <Br>
                            JL. KAPT.PATTIMURA NO. 8 RT.12 KEC. TELANAI PURA KOTA JAMBI
                        </p>
                    </div>
                </div>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th colspan="7">Buku</th>
                        </tr>
                        <tr>
                            <th colspan="7">
                                {{ date('d/m/Y', strtotime($mulai)) }}-{{ date('d/m/Y', strtotime($sampai)) }}</th>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>ISBN</th>
                            <th>Jumlah Buku</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_buku as $buku)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $buku->judul }}</td>
                                <td>{{ $buku->pengarang }}</td>
                                <td>{{ $buku->penerbit }}</td>
                                <td>{{ $buku->tahun_terbit }}</td>
                                <td>{{ $buku->isbn }}</td>
                                <td>{{ $buku->jumlah_buku }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-end mt-4">
            <div class="col-4 text-left">
                <p>
                    Jambi, {{ date('d/m/Y') }}
                    <br>
                    Petugas Perpustakaan
                    <br>
                    <br>
                    <br>
                    <br>
                    ( {{ auth()->user()->name }} )
                </p>
            </div>
        </div>
    </div>

    <script>
        print();
    </script>
</body>

</html>
