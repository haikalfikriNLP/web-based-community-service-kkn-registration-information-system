@php
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition: attachment; filename=Laporan Transaksi.xls');
@endphp
<table>
    <thead>
        <tr>
            <th colspan="7">Transaksi Buku</th>
        </tr>
        <tr>
            <th colspan="7">{{ date('d/m/Y', strtotime($mulai)) }}-{{ date('d/m/Y', strtotime($sampai)) }}</th>
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
