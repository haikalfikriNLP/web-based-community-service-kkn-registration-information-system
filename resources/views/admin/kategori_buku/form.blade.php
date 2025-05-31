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
                        <a href="/admin/kategori_buku" class="btn btn-primary"> <i class="fas fa-angle-left mr-1"></i>
                            Kembali</a>
                    </div>
                    <form method="POST" action="{{ $form['action'] }}">
                        @csrf
                        @method($form['method'])
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_kategori">Nama Kategori</label>
                                <input type="text" class="form-control" name="nama_kategori" id="nama_kategori"
                                    placeholder="Masukkan Nama Kategori"
                                    value="{{ old('nama_kategori') ?? $form['data'] ? $form['data']->nama_kategori : '' }}">
                                @error('nama_kategori')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
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
