@php
header('Content-type: application/vnd-ms-excel');
header('Content-Disposition: attachment; filename=Laporan Anggota.xls');
@endphp
<table>
    <thead>
        <tr>
            <th colspan="7">Anggota</th>
        </tr>
        <tr>
            <th colspan="7">{{ date('d/m/Y', strtotime($mulai)) }}-{{ date('d/m/Y', strtotime($sampai)) }}</th>
        </tr>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list_anggota as $anggota)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $anggota->nis }}</td>
                <td>{{ $anggota->nama }}</td>
                <td>{{ $anggota->tempat_lahir }}</td>
                <td>{{ $anggota->tanggal_lahir }}</td>
                <td>{{ $anggota->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                <td>{{ $anggota->no_telp }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
