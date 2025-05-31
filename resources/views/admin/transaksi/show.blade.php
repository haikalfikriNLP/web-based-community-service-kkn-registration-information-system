@extends('layouts.app')

@section('content')
    <div class="header pb-6" style="background-color: #3498db">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Transaksi</h6>
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
                        <a href="/admin/transaksi/tambah" class="btn btn-primary"> <i class="fas fa-plus-square mr-1"></i>
                            Tambah</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive my-2">
                            <table class="table align-items-center table-flush datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Transaksi</th>
                                        <th>Buku</th>
                                        <th>Peminjam</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Sisa Hari</th>
                                        <th>Status</th>
                                        <th class="text-right">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $list_transaksi = \App\Models\Transaksi::with('buku', 'anggota')
                                            ->orderBy('created_at', 'desc')
                                            ->get();
                                    @endphp
                                    @foreach ($list_transaksi as $transaksi)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $transaksi->kode_transaksi }}</td>
                                            <td>{{ $transaksi->buku->judul }}</td>
                                            <td>{{ $transaksi->anggota->nama }}</td>
                                            <td>{{ date('d/m/Y', strtotime($transaksi->tanggal_pinjam)) }} -
                                                {{ date('d/m/Y', strtotime($transaksi->tanggal_kembali)) }}</td>
                                            <td>
                                                @php
                                                    $sisa = \Carbon\Carbon::parse($transaksi->tanggal_kembali)->endOfDay()->timestamp - \Carbon\Carbon::now()->timestamp;
                                                @endphp
                                                @if ($sisa > 0)
                                                    <span class="badge badge-primary">
                                                        {{ \Carbon\Carbon::parse($transaksi->tanggal_kembali)->diffInDays(\Carbon\Carbon::now()) }}
                                                        Hari
                                                    </span>
                                                @elseif($sisa < 0 && $transaksi->status == 'pinjam')
                                                    @php
                                                        $telat_hari = \Carbon\Carbon::parse($transaksi->tanggal_kembali)->diffInDays(\Carbon\Carbon::now());
                                                    @endphp
                                                    <span class="badge badge-danger">
                                                        Telat :
                                                        {{ $telat_hari }} Hari | Denda : Rp. {{ $telat_hari * 2000 }}
                                                    </span>
                                                @else
                                                    <span class="badge badge-success">
                                                        Dikembalikan Tanggal :{{ $transaksi->updated_at }}
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($transaksi->status == 'pinjam')
                                                    <span
                                                        class="badge badge-pill badge-warning">{{ $transaksi->status }}</span>
                                                @elseif($transaksi->status == 'kembali')
                                                    <span
                                                        class="badge badge-pill badge-success">{{ $transaksi->status }}</span>
                                                @endif
                                            </td>
                                            <td class="text-right">
                                                @if ($transaksi->status == 'pinjam')
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                    onclick="showTelahKembali('{{ $transaksi->id }}');">Telah
                                                    Kembali</button>
                                                @endif
                                                <button type="button" class="btn btn-danger btn-sm"
                                                    onclick="showHapus('{{ $transaksi->id }}')"><i class="fa fa-trash"
                                                aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modelTelahKembali" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Telah Kembali</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="/admin/transaksi/status">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="status_id">
                    <div class="modal-body">
                        Apakah kamu yakin ubah status peminjaman menjadi telah kembali?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Iya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modelHapus" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="/admin/transaksi/hapus">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" id="hapus_id">
                    <div class="modal-body">
                        Apakah kamu yakin hapus data?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
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

        function showTelahKembali(id) {
            $('#status_id').val(id);
            $('#modelTelahKembali').modal('show');
        }

        function showHapus(id) {
            $('#hapus_id').val(id);
            $('#modelHapus').modal('show');
        }
    </script>
@endsection
