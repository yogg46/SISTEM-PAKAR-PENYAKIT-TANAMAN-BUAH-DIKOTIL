@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <div class="block-content block-content-full">
                <form action="{{ route('update-detail-penyakit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $editDetailPenyakit->id }}">
                    <div class="row">
                        <div class="mb-4">
                            <label class="form-label" for="example-select"> Pilih Buah</label>
                            <select class="form-select @error('Buah') is-invalid @enderror" id="example-select"
                                name="Buah">
                                <option value=""> -- Pilih Buah -- </option>
                                <option value="Mangga" {{ old('Buah') == 'Mangga' ? 'selected' : '' }}
                                    {{ $editDetailPenyakit->Buah == 'Mangga' ? 'selected' : '' }}>
                                    Mangga </option>
                                <option value="Alpukat" {{ old('Buah') == 'Alpukat' ? 'selected' : '' }}
                                    {{ $editDetailPenyakit->Buah == 'Alpukat' ? 'selected' : '' }}> Alpukat </option>
                                <option value="Durian" {{ old('Buah') == 'Durian' ? 'selected' : '' }}
                                    {{ $editDetailPenyakit->Buah == 'Durian' ? 'selected' : '' }}> Durian </option>
                                <option value="Jeruk" {{ old('Buah') == 'Jeruk' ? 'selected' : '' }}
                                    {{ $editDetailPenyakit->Buah == 'Jeruk' ? 'selected' : '' }}> Jeruk </option>
                                <option value="Nangka" {{ old('Buah') == 'Nangka' ? 'selected' : '' }}
                                    {{ $editDetailPenyakit->Buah == 'Nangka' ? 'selected' : '' }}> Nangka </option>
                                <option value="Rambutan" {{ old('Buah') == 'Rambutan' ? 'selected' : '' }}
                                    {{ $editDetailPenyakit->Buah == 'Rambutan' ? 'selected' : '' }}> Rambutan
                                </option>
                                <option value="Kelengkeng" {{ old('Buah') == 'Kelengkeng' ? 'selected' : '' }}
                                    {{ $editDetailPenyakit->Buah == 'Kelengkeng' ? 'selected' : '' }}> Kelengkeng
                                </option>
                                <option value="Anggur" {{ old('Buah') == 'Anggur' ? 'selected' : '' }}
                                    {{ $editDetailPenyakit->Buah == 'Anggur' ? 'selected' : '' }}> Anggur </option>
                                <option value="Sawo" {{ old('Buah') == 'Sawo' ? 'selected' : '' }}
                                    {{ $editDetailPenyakit->Buah == 'Sawo' ? 'selected' : '' }}> Sawo </option>
                                <option value="Jambu Biji" {{ old('Buah') == ' Jambu Biji' ? 'selected' : '' }}
                                    {{ $editDetailPenyakit->Buah == ' Jambu Biji' ? 'selected' : '' }}> Jambu Biji
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
                                <option value="Buah"
                                    {{ old('Bagian') == 'Buah' || $editDetailPenyakit->Bagian == 'Buah' ? 'selected' : '' }}>
                                    Buah </option>
                                <option value="Batang"
                                    {{ old('Bagian') == 'Batang' || $editDetailPenyakit->Bagian == 'Batang' ? 'selected' : '' }}>
                                    Batang </option>
                                <option value="Daun"
                                    {{ old('Bagian') == 'Daun' || $editDetailPenyakit->Bagian == 'Daun' ? 'selected' : '' }}>
                                    Daun </option>
                                <option value="Akar"
                                    {{ old('Bagian') == 'Akar' || $editDetailPenyakit->Bagian == 'Akar' ? 'selected' : '' }}>
                                    Akar </option>
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
                                        {{ old('idGejala') == $k->idGejala || $editDetailPenyakit->idGejala == $k->idGejala ? 'selected' : '' }}>
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
                                        {{ old('idPenyakit') == $k->idPenyakit || $editDetailPenyakit->idPenyakit == $k->idPenyakit ? 'selected' : '' }}>
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
                        <i class="fa fa-fw fa-plus me-1"></i> Simpan
                    </button>
                </form>
            </div>
        </div>
    @endsection
