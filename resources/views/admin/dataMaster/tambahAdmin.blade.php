@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <div class="block-content block-content-full">
                <form action="{{ route('simpan-data-admin') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="mb-4">
                                <div class="col-12">
                                    <label class="form-label" for="example-text-input">Id Admin</label>
                                    <input type="text" value="{{ $idg }}" name="idUser" class="form-control"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Nama</label>
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control @error('namaPengguna') is-invalid @enderror"
                                            value="{{ old('namaPengguna') }}" id="example-group2-input1"
                                            name="namaPengguna">
                                        <span class="input-group-text">
                                            <i class="far fa-user"></i>
                                        </span>
                                        @error('namaPengguna')
                                            <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Nama Pengguna</label>
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control form-control @error('username') is-invalid @enderror"
                                            value="{{ old('username') }}" id="example-group2-input1" name="username">
                                        <span class="input-group-text">
                                            <i class="far fa-user"></i>
                                        </span>
                                        @error('username')
                                            <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row push">
                            <div class="mb-4">
                                <label class="form-label" for="example-file-input-multiple">Pilih Foto</label>
                                <input class="form-control" type="file" name="gambar" multiple>
                                @error('gambar')
                                    <span class="text-danger" style="font-size: 0.875rem;">

                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-select"> Role </label>
                                <select class="form-select  @error('userRole') is-invalid @enderror" id="example-select"
                                    id="example-select" name="userRole">
                                    <option value=""> -- Role -- </option>
                                    <option value="admin" {{ old('userRole') == 'admin' ? 'selected' : '' }}>Admin
                                    </option>
                                    <option value="pemilik" {{ old('userRole') == 'pemilik' ? 'selected' : '' }}>Pemilik
                                    </option>
                                </select>
                                @error('userRole')
                                    <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Alamat</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                            value="{{ old('alamat') }}" id="example-group2-input1" name="alamat">
                                        <span class="input-group-text">
                                            <i class="far fa-address-card"></i>
                                        </span>
                                        @error('alamat')
                                            <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Kata Sandi</label>
                                    <div class="input-group">
                                        <input type="password" value="{{ old('password') }}"
                                            class="form-control  @error('password') is-invalid @enderror"
                                            id="example-password-input" name="password" placeholder="">
                                        <span class="input-group-text">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        @error('password')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Ulang Kata Sandi</label>
                                    <div class="input-group">
                                        <input type="password"
                                            class="form-control  @error('password_confirmation') is-invalid @enderror"
                                            id="example-password-input" name="password_confirmation" placeholder="">
                                        <span class="input-group-text">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        @error('password_confirmation')
                                            <span class="invalid-feedback">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success me-1 mb-3 col-3" style="margin-left: 72%">
                        <i class="fa fa-fw fa-plus me-1"></i> Tambah
                    </button>
                </form>
            </div>
        </div>
    @endsection
