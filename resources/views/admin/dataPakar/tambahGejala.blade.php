@extends('layouts.main')
@section('page')
    @php
        if (!is_null($idGej)) {
            if ((int) substr($idGej->idGejala, -2, 2) < 9) {
                $idg = 'G-0' . (int) substr($idGej->idGejala, -2, 2) + 1;
            } else {
                $idg = 'G-' . (int) substr($idGej->idGejala, -2, 2) + 1;
            }
        } else {
            $idg = 'G-01';
        }
    @endphp
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <div class="block-content block-content-full">
                <form action="{{ route('simpan-data-gejala') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3 col-xl-12">
                            <div class="mb-4">
                                <div class="col-12">
                                    <label class="form-label" for="example-text-input">Id Gejala</label>
                                    <input type="text" name="idGejala" value="{{ $idg }}" class="form-control"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-12">
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Nama Gejala</label>
                                <div class="input-group">
                                    <input type="text" class="form-control @error('namaGejala') is-invalid @enderror"
                                        value="{{ old('namaGejala') }}" id="example-group2-input1" name="namaGejala">
                                    <span class="input-group-text">
                                        <i class="fa fa-bacteria"></i>
                                    </span>
                                    @error('namaGejala')
                                        <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-12 overflow-hidden">
                            <div class="mb-4">
                                <label class="form-label" for="example-file-input-multiple">Pilih Foto</label>
                                <input class="form-control" type="file" name="gambarGejala" multiple>
                                @error('gambarGejala')
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
                </form>
            </div>
        </div>
    </div>
@endsection
