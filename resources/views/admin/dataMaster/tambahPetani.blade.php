@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <div class="block-content block-content-full">
                <form method="POST" action="{{ route('simpan-data-petani') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3 col-xl-12">
                            <div class="mb-4">
                                <div class="col-12">
                                    <label class="form-label" for="example-text-input">Id Petani</label>
                                    <input type="text" value="{{ $idp }}" name="idUser" class="form-control"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-xl-6">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Nama</label>
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control @error('namaPengguna') is-invalid @enderror"
                                            value="{{ old('namaPengguna') }}" name="namaPengguna">
                                        <span class="input-group-text">
                                            <i class="far fa-user"></i>
                                        </span>
                                        @error('namaPengguna')
                                            <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-6">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Nama Pengguna</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                                            value="{{ old('username') }}" name="username">
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
                                <label class="form-label" for="example-select"> Jenis Kelamin </label>
                                <select class="form-select @error('jenisKelamin') is-invalid @enderror" name="jenisKelamin">
                                    <option value=""> -- Jenis Kelamin -- </option>
                                    <option value="Laki-laki" {{ old('jenisKelamin') == 'Laki-laki' ? 'selected' : '' }}>
                                        Laki-Laki</option>
                                    <option value="Perempuan" {{ old('jenisKelamin') == 'Perempuan' ? 'selected' : '' }}>
                                        Perempuan</option>
                                </select>
                                @error('jenisKelamin')
                                    <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Alamat</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control  @error('alamat') is-invalid @enderror"
                                            value="{{ old('alamat') }}" name="alamat">
                                        <span class="input-group-text">
                                            <i class="far fa-address-card"></i>
                                        </span>
                                        @error('alamat')
                                            <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Kata Sandi</label>
                                    <div class="input-group">
                                        <input type="password" value="{{ old('password') }}"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="">
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
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Ulang Kata Sandi</label>
                                    <div class="input-group">
                                        <input type="password"
                                            class="form-control  @error('password_confirmation') is-invalid @enderror"
                                            name="password_confirmation" placeholder="">
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
