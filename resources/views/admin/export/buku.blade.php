@php
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition: attachment; filename=Laporan Buku.xls');
@endphp
<table>
    <thead>
        <tr>
            <th colspan="7">Buku</th>
        </tr>
        <tr>
            <th colspan="7">{{ date('d/m/Y', strtotime($mulai)) }}-{{ date('d/m/Y', strtotime($sampai)) }}</th>
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
