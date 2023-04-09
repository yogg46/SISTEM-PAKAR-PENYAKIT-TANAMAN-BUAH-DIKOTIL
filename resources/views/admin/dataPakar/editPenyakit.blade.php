@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <div class="block-content block-content-full">
                <form action="{{ route('update-data-penyakit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="idPenyakit" value="{{ $editPenyakit->idPenyakit }}">
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3 col-xl-12">
                            <div class="mb-4">
                                <div class="col-12">
                                    <label class="form-label" for="example-text-input">Id
                                        Penyakit</label>
                                    <input type="text" value="{{ $editPenyakit->idPenyakit }}" readonly
                                        class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-12">
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Nama Penyakit</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('namaPenyakit', $editPenyakit->namaPenyakit) }}"
                                        class="form-control @error('namaPenyakit') is-invalid @enderror"
                                        id="example-group2-input1" name="namaPenyakit">
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
                                <label class="form-label" for="keterangan">Keterangan</label>
                                <textarea class="form-control @error('keterangan') is-invalid @enderror" aria-invalid="true" id="keterangan"
                                    name="keterangan" rows="6" placeholder="Keterangan">{{ old('keterangan', $editPenyakit->keterangan) }}</textarea>
                                @error('keterangan')
                                    <div id="keterangan" class="invalid-feedback animated fadeIn mt-1 mb-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-12">
                            <div class="mb-4">
                                <label class="form-label" for="keterangan">Solusi</label>
                                <textarea class="form-control @error('solusi') is-invalid @enderror" aria-invalid="true" id="solusi" name="solusi"
                                    rows="6" placeholder="Solusi">{{ old('solusi', $editPenyakit->solusi) }}</textarea>
                                @error('solusi')
                                    <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-12 overflow-hidden">
                            <div class="mb-4">
                                <label class="form-label" for="gambar">Gambar Penyakit</label>
                                <input class="form-control" type="file" id="gambar" name="gambar" multiple>
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
