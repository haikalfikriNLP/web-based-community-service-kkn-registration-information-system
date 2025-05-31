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
                        <a href="/admin/buku" class="btn btn-primary"> <i class="fas fa-angle-left mr-1"></i>
                            Kembali</a>
                    </div>
                    <form method="POST" action="{{ $form['action'] }}">
                        @csrf
                        @method($form['method'])
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kategori_buku_id">Kategori Buku</label>
                                        <select class="form-control" name="kategori_buku_id" id="kategori_buku_id">
                                            <option value="">- Pilih Kategori Buku -</option>
                                            @php
                                                $option_kategori_buku = \App\Models\KategoriBuku::all();
                                            @endphp
                                            @foreach ($option_kategori_buku as $kategori_buku)
                                                <option value="{{ $kategori_buku->id }}"
                                                    {{ (old('kategori_buku_id') ?? $form['data'] ? $form['data']->kategori_buku_id : '') == $kategori_buku->id ? 'selected' : '' }}>
                                                    {{ $kategori_buku->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                        @error('kategori_buku_id')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="judul">Judul</label>
                                        <input type="text" class="form-control" name="judul" id="judul"
                                            placeholder="Masukkan Judul"
                                            value="{{ old('judul') ?? $form['data'] ? $form['data']->judul : '' }}">
                                        @error('judul')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pengarang">Pengarang</label>
                                        <input type="text" class="form-control" name="pengarang" id="pengarang"
                                            placeholder="Masukkan Pengarang"
                                            value="{{ old('pengarang') ?? $form['data'] ? $form['data']->pengarang : '' }}">
                                        @error('pengarang')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="penerbit">Penerbit</label>
                                        <input type="text" class="form-control" name="penerbit" id="penerbit"
                                            placeholder="Masukkan Penerbit"
                                            value="{{ old('penerbit') ?? $form['data'] ? $form['data']->penerbit : '' }}">
                                        @error('penerbit')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">

                                    <div class="form-group">
                                        <label for="tahun_terbit">Tahun Terbit</label>
                                        <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit"
                                            placeholder="Masukkan Tahun Terbit"
                                            value="{{ old('tahun_terbit') ?? $form['data'] ? $form['data']->tahun_terbit : '' }}">
                                        @error('tahun_terbit')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="isbn">ISBN</label>
                                        <input type="text" class="form-control" name="isbn" id="isbn"
                                            placeholder="Masukkan ISBN"
                                            value="{{ old('isbn') ?? $form['data'] ? $form['data']->isbn : '' }}">
                                        @error('isbn')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah_buku">Jumlah Buku</label>
                                        <input type="text" class="form-control" name="jumlah_buku" id="jumlah_buku"
                                            placeholder="Masukkan Jumlah Buku"
                                            value="{{ old('jumlah_buku') ?? $form['data'] ? $form['data']->jumlah_buku : '' }}">
                                        @error('jumlah_buku')
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
