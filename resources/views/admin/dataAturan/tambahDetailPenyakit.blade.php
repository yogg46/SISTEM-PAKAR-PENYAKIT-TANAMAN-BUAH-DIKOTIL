@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <div class="block-content block-content-full">
                <form action="{{ route('simpan-detail-penyakit') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-4">
                            <label class="form-label" for="example-select"> Pilih Buah</label>
                            <select class="form-select @error('Buah') is-invalid @enderror" id="example-select"
                                name="Buah">
                                <option value=""> -- Pilih Buah -- </option>
                                <option value="Mangga" {{ old('Buah') == 'Mangga' ? 'selected' : '' }}> Mangga </option>
                                <option value="Alpukat" {{ old('Buah') == 'Alpukat' ? 'selected' : '' }}> Alpukat </option>
                                <option value="Durian" {{ old('Buah') == 'Durian' ? 'selected' : '' }}> Durian </option>
                                <option value="Jeruk" {{ old('Buah') == 'Jeruk' ? 'selected' : '' }}> Jeruk </option>
                                <option value="Nangka" {{ old('Buah') == 'Nangka' ? 'selected' : '' }}> Nangka </option>
                                <option value="Rambutan" {{ old('Buah') == 'Rambutan' ? 'selected' : '' }}> Rambutan
                                </option>
                                <option value="Kelengkeng" {{ old('Buah') == 'Kelengkeng' ? 'selected' : '' }}> Kelengkeng
                                </option>
                                <option value="Anggur" {{ old('Buah') == 'Anggur' ? 'selected' : '' }}> Anggur </option>
                                <option value="Sawo" {{ old('Buah') == 'Sawo' ? 'selected' : '' }}> Sawo </option>
                                <option value="Jambu Biji" {{ old('Buah') == ' Jambu Biji' ? 'selected' : '' }}> Jambu Biji
                                </option>
                            </select>
                            @error('Buah')
                                <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="example-select"> Pilih Bagian Yang Terserang </label>
                            <select class="form-select @error('Bagian') is-invalid @enderror" value="{{ old('Bagian') }}"
                                id="example-select" name="Bagian">
                                <option value=""> -- Pilih Bagian Tanaman -- </option>
                                <option value="Buah" {{ old('Bagian') == 'Buah' ? 'selected' : '' }}> Buah </option>
                                <option value="Batang" {{ old('Bagian') == 'Batang' ? 'selected' : '' }}> Batang </option>
                                <option value="Daun" {{ old('Bagian') == 'Daun' ? 'selected' : '' }}> Daun </option>
                                <option value="Akar" {{ old('Bagian') == 'Akar' ? 'selected' : '' }}> Akar </option>
                            </select>
                            @error('Bagian')
                                <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="example-select"> Pilih Gejala </label>
                            <select class="form-select @error('idGejala') is-invalid @enderror" id="example-select"
                                name="idGejala">
                                <option value=""> -- Pilih Gejala -- </option>
                                @foreach ($Datagejala as $k)
                                    <option value="{{ $k->idGejala }}"
                                        {{ old('idGejala') == $k->idGejala ? 'selected' : '' }}>
                                        {{ $k->namaGejala }} </option>
                                @endforeach
                            </select>
                            @error('idGejala')
                                <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="example-select"> Pilih Penyakit </label>
                            <select class="form-select @error('idPenyakit') is-invalid @enderror" id="example-select"
                                name="idPenyakit">
                                <option value=""> -- Pilih Penyakit -- </option>
                                @foreach ($Datapenyakit as $k)
                                    <option value="{{ $k->idPenyakit }}"
                                        {{ old('idPenyakit') == $k->idPenyakit ? 'selected' : '' }}>
                                        {{ $k->namaPenyakit }}
                                    </option>
                                @endforeach
                            </select>
                            @error('idPenyakit')
                                <div class="invalid-feedback animated fadeIn mt-1 mb-1">{{ $message }}</div>
                            @enderror
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
