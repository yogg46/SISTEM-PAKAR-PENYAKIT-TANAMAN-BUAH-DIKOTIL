@extends('layouts.main')
@section('page')
    @php
        if (!is_null($idPen)) {
            if ((int) substr($idPen->idPenyakit, -2, 2) < 9) {
                $idp = 'P-0' . (int) substr($idPen->idPenyakit, -2, 2) + 1;
            } else {
                $idp = 'P-' . (int) substr($idPen->idPenyakit, -2, 2) + 1;
            }
        } else {
            $idp = 'P-01';
        }

    @endphp
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <div class="block-content block-content-full">
                <form action="{{ route('simpan-data-penyakit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3 col-xl-12">
                            <div class="mb-4">
                                <div class="col-12">
                                    <label class="form-label" for="example-text-input">Id
                                        Penyakit</label>
                                    <input type="text" name="idPenyakit" value="{{ $idp }}" class="form-control"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-12">
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Nama Penyakit</label>
                                <div class="input-group">
                                    <input type="text" class="form-control @error('namaPenyakit') is-invalid @enderror"
                                        value="{{ old('namaPenyakit') }}" id="example-group2-input1" name="namaPenyakit">
                                    <span class="input-group-text">
                                        <i class="fa fa-disease"></i>
                                    </span>
                                    @error('namaPenyakit')
                                        <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-12">
                            <div class="mb-4">
                                <label class="form-label" for="example-textarea-input">Keterangan</label>
                                <textarea class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan') }}"
                                    id="example-textarea-input" name="keterangan" rows="6" placeholder="Keterangan"></textarea>
                                @error('keterangan')
                                    <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-12">
                            <div class="mb-4">
                                <label class="form-label" for="example-textarea-input">Solusi</label>
                                <textarea class="form-control @error('solusi') is-invalid @enderror" value="{{ old('solusi') }}"
                                    id="example-textarea-input" name="solusi" rows="6" placeholder="Solusi"></textarea>
                                @error('solusi')
                                    <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-12 overflow-hidden">
                            <div class="mb-4">
                                <label class="form-label" for="example-file-input-multiple">Pilih Foto</label>
                                <input class="form-control" type="file" name="gambar" multiple>
                                @error('gambar')
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
