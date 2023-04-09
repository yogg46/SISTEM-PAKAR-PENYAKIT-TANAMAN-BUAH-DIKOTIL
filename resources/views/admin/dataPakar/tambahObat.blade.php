@extends('layouts.main')
@section('page')
    {{-- {{ $idObt }} --}}
    @php
        if (!is_null($idObt)) {
            if ((int) substr($idObt->idObat, -2, 2) < 9) {
                $ido = 'S-0' . (int) substr($idObt->idObat, -2, 2) + 1;
            } else {
                $ido = 'S-' . (int) substr($idObt->idObat, -2, 2) + 1;
            }
        } else {
            $ido = 'S-01';
        }

    @endphp
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <div class="block-content block-content-full">
                <form action="{{ route('simpan-data-obat') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="row">
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Id Obat</label>
                                    <input type="text" name="idObat" value="{{ $ido }}" class="form-control"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-select"> Pilih Penyakit yang Sesuai untuk
                                        Obat!</label>
                                    <select class="form-select @error('idPenyakit') is-invalid @enderror"
                                        id="example-select" name="idPenyakit">
                                        @foreach ($Datapenyakit as $s)
                                            <option value="{{ $s->idPenyakit }}"
                                                {{ old('idPenyakit') == $s->idPenyakit ? 'selected' : '' }}>
                                                {{ $s->namaPenyakit }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('idPenyakit')
                                        <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Nama Obat</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('namaObat') is-invalid @enderror"
                                            value="{{ old('namaObat') }}" id="example-group2-input1" name="namaObat">
                                        <span class="input-group-text">
                                            <i class="fa fa-pump-medical"></i>
                                        </span>
                                        @error('namaObat')
                                            <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Cara Penggunaan Obat</label>
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control form-control @error('cara') is-invalid @enderror"
                                            value="{{ old('cara') }}" id="example-group2-input1" name="cara">
                                        <span class="input-group-text">
                                            <i class="fa fa-hand-holding-medical"></i>
                                        </span>
                                        @error('cara')
                                            <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Jenis Obat</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('jenis') is-invalid @enderror"
                                            value="{{ old('jenis') }}" id="example-group2-input1" name="jenis">
                                        <span class="input-group-text">
                                            <i class="fa fa-bong"></i>
                                        </span>
                                        @error('jenis')
                                            <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Khasiat</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control @error('khasiat') is-invalid @enderror"
                                            value="{{ old('khasiat') }}" id="example-group2-input1" name="khasiat">
                                        <span class="input-group-text">
                                            <i class="fa fa-bong"></i>
                                        </span>
                                        @error('khasiat')
                                            <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-12 overflow-hidden">
                                <div class="mb-4">
                                    <label class="form-label" for="example-file-input-multiple">Pilih Foto</label>
                                    <input class="form-control" type="file" name="gambarObat" multiple>
                                    @error('gambarObat')
                                        <span class="text-danger" style="font-size: 0.875rem;">

                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success me-1 mb-3 col-3" style="margin-left: 75%">
                            <i class="fa fa-fw fa-plus me-1"></i> Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
