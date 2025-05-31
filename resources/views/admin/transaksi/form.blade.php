@extends('layouts.app')

@section('content')
    <div class="header pb-6" style="background-color: #3498db">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Tambah Transaksi</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-0 p-1">
                        <a href="/admin/transaksi" class="btn btn-primary"> <i class="fas fa-angle-left mr-1"></i>
                            Kembali</a>
                    </div>
                    <form method="POST" action="/admin/transaksi/simpan">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="kode_transaksi">Kode Transaksi</label>
                                <input type="text" class="form-control" name="kode_transaksi" id="kode_transaksi"
                                    value="{{ $kode_transaksi }}" readonly>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="tanggal_pinjam">Tanggal Pinjam</label>
                                        <input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam"
                                            value="{{ date('Y-m-d') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_kembali">Tanggal Kembali</label>
                                        <input type="date" class="form-control" name="tanggal_kembali"
                                            id="tanggal_kembali" value="{{ date('Y-m-d') }}" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="buku_id">Buku</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="nama_buku" readonly required>
                                            <input type="hidden" class="form-control" name="buku_id" id="buku_id">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-primary" onclick="cariBuku()"><i
                                                        class="fa fa-search" aria-hidden="true"></i> Cari
                                                    Buku</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="anggota_id">Anggota</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="nama_anggota" readonly required>
                                            <input type="hidden" class="form-control" name="anggota_id" id="anggota_id">
                                            <div class="input-group-prepend">
                                                <button type="button" class="btn btn-primary" onclick="cariAnggota()"><i
                                                        class="fa fa-search" aria-hidden="true"></i> Cari
                                                    Anggota</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modelCariBuku" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Data Buku</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0 py-2">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>ISBN</th>
                                <th>Jumlah Buku</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_buku as $buku)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $buku->judul }}</td>
                                    <td>{{ $buku->kategori->nama_kategori ?? '-' }}</td>
                                    <td>{{ $buku->pengarang }}</td>
                                    <td>{{ $buku->penerbit }}</td>
                                    <td>{{ $buku->tahun_terbit }}</td>
                                    <td>{{ $buku->isbn }}</td>
                                    <td>{{ $buku->jumlah_buku }}</td>
                                    <td>
                                        @if ($buku->jumlah_buku > 0)
                                            <button type="button" class="btn btn-primary btn-sm"
                                                onclick="pilihBuku('{{ json_encode($buku) }}')">Pilih
                                                Buku</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modelCariAnggota" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Data Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0 py-2">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>No Telepon</th>
                                <th>Aksi</th>
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
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm"
                                            onclick="pilihAnggota('{{ json_encode($anggota) }}')">Pilih
                                            Buku</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.datatable').DataTable({
                language: {
                    'paginate': {
                        'previous': '<i class="fas fa-angle-left"></i>',
                        'next': '<i class="fas fa-angle-right"></i>'
                    }
                }
            });
        });

        function cariBuku() {
            $('#modelCariBuku').modal('show');
        }

        function pilihBuku(payload) {
            var data = JSON.parse(payload);
            $('#nama_buku').val(`${data.judul} | ${data.isbn}`);
            $('#buku_id').val(data.id);
            $('.modal').modal('hide');
        }

        function cariAnggota() {
            $('#modelCariAnggota').modal('show');
        }

        function pilihAnggota(payload) {
            var data = JSON.parse(payload);
            $('#nama_anggota').val(`${data.nama} | ${data.nis}`);
            $('#anggota_id').val(data.id);
            $('.modal').modal('hide');
        }
    </script>
@endsection
