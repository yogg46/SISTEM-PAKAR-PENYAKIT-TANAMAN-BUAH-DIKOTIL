@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <div class="block-content block-content-full">
                <form action="{{ route('update-data-obat') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="idObat" value="{{ $editObat->idObat }}">
                    <div class="row">
                        <div class="mb-4">
                            <div class="col-12">
                                <label class="form-label" for="example-text-input">Id Obat</label>
                                <input type="text" name="idObat" value="{{ $editObat->idObat }}" readonly
                                    class="form-control" placeholder="">
                            </div>
                        </div>
                            <div class="mb-4">
                                <label class="form-label" for="example-select"> Pilih Penyakit yang Sesuai untuk
                                    Obat!</label>
                                <select class="form-select @error('idPenyakit') is-invalid @enderror" id="example-select"
                                    name="idPenyakit">
                                    <option value=""> -- Pilih Penyakit -- </option>
                                    @foreach ($Datapenyakit as $s)
                                        <option value="{{ $s->idPenyakit }}"
                                            {{ old('idPenyakit') == $s->idPenyakit || $editObat->idPenyakit == $s->idPenyakit ? 'selected' : '' }}>
                                            {{ $s->namaPenyakit }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('idPenyakit')
                                    <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Nama Obat</label>
                                    <div class="input-group">
                                        <input type="text" value="{{ old('namaObat', $editObat->namaObat) }}"
                                            class="form-control @error('namaObat') is-invalid @enderror"
                                            id="example-group2-input1" name="namaObat">
                                        <span class="input-group-text">
                                            <i class="fa fa-pump-medical"></i>
                                        </span>
                                        @error('namaObat')
                                            <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Cara Penggunaan Obat</label>
                                    <div class="input-group">
                                        <input type="text" value="{{ old('cara', $editObat->cara) }}"
                                            class="form-control @error('cara') is-invalid @enderror"
                                            id="example-group2-input1" name="cara">
                                        <span class="input-group-text">
                                            <i class="fa fa-hand-holding-medical"></i>
                                        </span>
                                        @error('cara')
                                            <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Jenis Obat</label>
                                    <div class="input-group">
                                        <input type="text" value="{{ old('jenis', $editObat->jenis) }}"
                                            class="form-control @error('jenis') is-invalid @enderror"
                                            id="example-group2-input1" name="jenis">
                                        <span class="input-group-text">
                                            <i class="fa fa-bong"></i>
                                        </span>
                                        @error('jenis')
                                            <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-12">
                                <div class="mb-4">
                                    <label class="form-label" for="example-text-input">Khasiat</label>
                                    <div class="input-group">
                                        <input type="text" value="{{ old('khasiat', $editObat->khasiat) }}"
                                            class="form-control @error('khasiat') is-invalid @enderror"
                                            id="example-group2-input1" name="khasiat">
                                        <span class="input-group-text">
                                            <i class="fa fa-bong"></i>
                                        </span>
                                        @error('khasiat')
                                            <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-12 overflow-hidden">
                                <div class="mb-4">
                                    <label class="form-label" for="gambarObat">Gambar Obat</label>
                                    <input class="form-control" type="file" id="gambarObat" name="gambarObat" multiple>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success me-1 mb-3 col-3" style="margin-left: 75%">
                            <i class="fa fa-fw fa-plus me-1"></i> Simpan
                        </button>
                </form>
            </div>
        </div>
    </div>
@endsection
