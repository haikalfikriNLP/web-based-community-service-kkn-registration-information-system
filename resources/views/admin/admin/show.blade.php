@extends('layouts.app')

@section('content')
    <div class="header pb-6" style="background-color: #3498db">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Admin</h6>
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
                        <a href="{{ route('admin.admin.create') }}" class="btn btn-primary"> <i class="fas fa-plus-square mr-1"></i>
                            Tambah</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive my-2">
                            <table class="table align-items-center table-flush datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th class="text-right">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_admin as $admin)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $admin->name }}</td>
                                            <td>{{ $admin->username }}</td>
                                            <td>{{ $admin->level }}</td>
                                            <td class="text-right">
                                                @if ($admin->id != auth()->user()->id)
                                                    <a href="{{ route('admin.admin.edit', $admin->id) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="showHapus('{{ $admin->id }}')"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modelHapus" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('admin.admin.destroy') }}">
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
    <script src="{{ asset('js/admin_show.js') }}"></script>
@endsection
