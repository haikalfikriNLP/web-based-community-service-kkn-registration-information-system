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
                        <a href="/admin/admin" class="btn btn-primary"> <i class="fas fa-angle-left mr-1"></i>
                            Kembali</a>
                    </div>
                    <form method="POST" action="{{ $form['action'] }}">
                        @csrf
                        @method($form['method'])
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="name">Nama</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Masukkan Nama"
                                            value="{{ old('name') ?? $form['data'] ? $form['data']->name : '' }}">
                                        @error('name')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" id="username"
                                            placeholder="Masukkan Username"
                                            value="{{ old('username') ?? $form['data'] ? $form['data']->username : '' }}">
                                        @error('username')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="password">Password
                                            {{ $form['data'] ? '(Abaikan jika tidak ingin diubah)' : '' }}</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Masukkan Password">
                                        @error('password')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="level">Level</label>
                                        <select class="form-control" name="level" id="level">
                                            <option value="">- Pilih Level -</option>
                                            <option value="admin"
                                                {{ (old('level') ?? $form['data'] ? $form['data']->level : '') == 'admin' ? 'selected' : '' }}>
                                                Admin</option>
                                            <option value="user"
                                                {{ (old('level') ?? $form['data'] ? $form['data']->level : '') == 'user' ? 'selected' : '' }}>
                                                User</option>
                                        </select>
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
