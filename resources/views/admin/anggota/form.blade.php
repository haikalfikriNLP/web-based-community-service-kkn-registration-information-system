@extends('layouts.app')

@section('content')
    <div class="header pb-6" style="background-color: #3498db">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">{{ $form['title'] }}</h6>
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
                        <a href="/admin/anggota" class="btn btn-primary"> <i class="fas fa-angle-left mr-1"></i>
                            Kembali</a>
                    </div>
                    <form method="POST" action="{{ $form['action'] }}">
                        @csrf
                        @method($form['method'])
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nis">NIS</label>
                                        <input type="text" class="form-control" name="nis" id="nis"
                                            placeholder="Masukkan NIS"
                                            value="{{ old('nis') ?? $form['data'] ? $form['data']->nis : '' }}">
                                        @error('nis')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="kelas">Kelas</label>
                                        <input type="text" class="form-control" name="kelas" id="kelas"
                                            placeholder="Masukkan Kelas"
                                            value="{{ old('kelas') ?? $form['data'] ? $form['data']->kelas : '' }}">
                                        @error('nis')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            placeholder="Masukkan Nama"
                                            value="{{ old('nama') ?? $form['data'] ? $form['data']->nama : '' }}">
                                        @error('nama')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
                                            placeholder="Masukkan Tempat Lahir"
                                            value="{{ old('tempat_lahir') ?? $form['data'] ? $form['data']->tempat_lahir : '' }}">
                                        @error('tempat_lahir')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"
                                            placeholder="Masukkan Tanggal Lahir"
                                            value="{{ old('tanggal_lahir') ?? $form['data'] ? $form['data']->tanggal_lahir : '' }}">
                                        @error('tanggal_lahir')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                            <option value="">- Pilih Jenis Kelamin -</option>
                                            <option value="L"
                                                {{ (old('jenis_kelamin') ?? $form['data'] ? $form['data']->jenis_kelamin : '') == 'L' ? 'selected' : '' }}>
                                                Laki-Laki</option>
                                            <option value="P"
                                                {{ (old('jenis_kelamin') ?? $form['data'] ? $form['data']->jenis_kelamin : '') == 'P' ? 'selected' : '' }}>
                                                Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_telp">Nomor Telepon</label>
                                        <input type="text" class="form-control" name="no_telp" id="no_telp"
                                            placeholder="Masukkan Nomor Telepon"
                                            value="{{ old('no_telp') ?? $form['data'] ? $form['data']->no_telp : '' }}">
                                        @error('no_telp')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
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
@endsection
