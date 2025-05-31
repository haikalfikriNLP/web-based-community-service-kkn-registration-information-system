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
    <div class="container">
        <div class="row">
            <div class="col">
                <div style="display: flex">
                    <div style="display: inline-block;align-self: center">
                        <img src="/template/images/logo12.jpeg" width="100px">
                    </div>
                    <div class="m-auto" style="display: inline-block">
                        <h2 class="text-center">Laporan Data Transaksi</h2>
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
                            <th colspan="7">Transaksi Buku</th>
                        </tr>
                        <tr>
                            <th colspan="7">
                                {{ date('d/m/Y', strtotime($mulai)) }}-{{ date('d/m/Y', strtotime($sampai)) }}</th>
                        </tr>
                        <tr>
                            <th colspan="7">{{ ucfirst($status) }}</th>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Kode Transaksi</th>
                            <th>Buku</th>
                            <th>Anggota</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_transaksi as $transaksi)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $transaksi->kode_transaksi }}</td>
                                <td>{{ $transaksi->buku->judul }}</td>
                                <td>{{ $transaksi->anggota->nama }}</td>
                                <td>{{ $transaksi->tanggal_pinjam }}</td>
                                <td>{{ $transaksi->tanggal_kembali }}</td>
                                <td>{{ $transaksi->status }}</td>
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
