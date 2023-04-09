@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <div class="block-content block-content-full">
                <form action="{{ route('update-data-gejala') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="idGejala" value="{{ $editGejala->idGejala }}">
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3 col-xl-12">
                            <div class="mb-4">
                                <div class="col-12">
                                    <label class="form-label" for="example-text-input">Id Gejala</label>
                                    <input type="text" value="{{ $editGejala->idGejala }}" readonly class="form-control"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xl-12">
                            <div class="mb-4">
                                <label class="form-label" for="example-text-input">Nama Gejala</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('namaGejala', $editGejala->namaGejala) }}"
                                        class="form-control form-control @error('namaGejala') is-invalid @enderror"
                                        id="example-group2-input1" name="namaGejala">
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
                                <label class="form-label" for="gambarGejala">Gambar Gejala</label>
                                <input class="form-control" type="file" id="gambarGejala" name="gambarGejala" multiple>
                                @error('gambarGejala')
                                    {{ $message }}
                                @enderror
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
