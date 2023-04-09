@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Diagnosa Tanaman</h3>
            <button type="button" class="btn rounded-pill btn-alt-success me-1 mb-1">
                <i class="fa fa-fw fa-plus me-1"></i> Tambah Tanaman
            </button>
            <button type="button" class="btn rounded-pill btn-alt-success me-1 mb-1">
                <i class="fa fa-fw fa-rotate me-1"></i> Mulai Diagnosa
            </button>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <div class="row push">
                <div class="col-lg-12 col-xl-12">
                    <div class="mb-1">
                        <label class="form-label">
                            <h5> Jenis Tanaman </h5>
                        </label>
                        <div class="row space-y-2">
                            <div class="col space-y-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Mangga">
                                    <label class="form-check-label" for="example-radios-default1">Mangga</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Alpukat">
                                    <label class="form-check-label" for="example-radios-default2">Alpukat</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Rambutan">
                                    <label class="form-check-label" for="example-radios-default3">Rambutan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Kelengkeng">
                                    <label class="form-check-label" for="example-radios-default3">Kelengkeng</label>
                                </div>
                            </div>

                            <div class="col space-y-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Nangka">
                                    <label class="form-check-label" for="example-radios-default3">Nangka</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Durian">
                                    <label class="form-check-label" for="example-radios-default3">Durian</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Anggur">
                                    <label class="form-check-label" for="example-radios-default3">Anggur</label>
                                </div>
                            </div>

                            <div class="col space-y-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Jambu Biji">
                                    <label class="form-check-label" for="example-radios-default3">Jambu Biji</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Jeruk">
                                    <label class="form-check-label" for="example-radios-default3">Jeruk</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Sawo">
                                    <label class="form-check-label" for="example-radios-default3">Sawo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="mb-1">
                        <label class="form-label">
                            <h5>Bagian Tanaman</h5>
                        </label>
                        <div class="row space-y-2">
                            <div class="col space-y-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default1"
                                        value="Buah">
                                    <label class="form-check-label" for="example-radios-default12">Buah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default1"
                                        value="Batang">
                                    <label class="form-check-label" for="example-radios-default12">Batang</label>
                                </div>
                            </div>

                            <div class="col space-y-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default1"
                                        value="Akar">
                                    <label class="form-check-label" for="example-radios-default13">Akar</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default1"
                                        value="Daun">
                                    <label class="form-check-label" for="example-radios-default3">Daun</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xl-12">
                <div class="mb-4">
                    <label class="form-label">
                        <h5>Jamur Tanaman Buah</h5>
                    </label>
                    <div class="space-y-2">
                        <div class="col">
                            <div class="form-check d-flex align-items-center">
                                <div>
                                    <input class="form-check-input" type="checkbox" id="example-radios-default11"
                                        name="example-radios-default1" value="option1">
                                </div>
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col-lg-4 col-xl-4">
                                            <img class="img-thumbnail m-2 " width="100px"
                                                src="/assets/media/avatars/avatar10.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <label class="form-check-label" for="example-radios-default11">
                                                <p>
                                                    (G-01) Jamur Collectrichum Gleosporidioes
                                                </p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-xl-12">
                        <div class="mb-5">
                            <label class="form-label">
                                <h5> Pilih Gejala </h5>
                            </label>
                            <div class="space-y-2">
                                <div class="col">
                                    <div class="form-check d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input" type="checkbox" id="example-radios-default11"
                                                name="example-radios-default1" value="option1">
                                        </div>
                                        <div class="p-1">
                                            <div class="row">
                                                <div class="col-lg-4 col-xl-4">
                                                    <img class="img-thumbnail m-2 " width="100px"
                                                        src="/assets/media/avatars/avatar10.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <label class="form-check-label" for="example-radios-default11">
                                                        <p>
                                                            (G-01) Jamur Collectrichum Gleosporidioes
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="col">
                                    <div class="form-check d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input" type="checkbox" id="example-radios-default11"
                                                name="example-radios-default1" value="option1">
                                        </div>
                                        <div class="p-1">
                                            <div class="row">
                                                <div class="col-lg-4 col-xl-4">
                                                    <img class="img-thumbnail m-2 " width="100px"
                                                        src="/assets/media/avatars/avatar10.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <label class="form-check-label" for="example-radios-default11">
                                                        <p>
                                                            (G-01) Jamur Collectrichum Gleosporidioes
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="col">
                                    <div class="form-check d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input" type="checkbox" id="example-radios-default11"
                                                name="example-radios-default1" value="option1">
                                        </div>
                                        <div class="p-1">
                                            <div class="row">
                                                <div class="col-lg-4 col-xl-4">
                                                    <img class="img-thumbnail m-2 " width="100px"
                                                        src="/assets/media/avatars/avatar10.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <label class="form-check-label" for="example-radios-default11">
                                                        <p>
                                                            (G-01) Jamur Collectrichum Gleosporidioes
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Diagnosa Tanaman</h3>
            <button type="button" class="btn rounded-pill btn-alt-danger me-1 mb-1">
                <i class="fa fa-fw fa-remove me-1"></i> Hapus
            </button>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <div class="row push">
                <div class="col-lg-12 col-xl-12">
                    <div class="mb-1">
                        <label class="form-label">
                            <h5>Jenis Tanaman</h5>
                        </label>
                        <div class="row space-y-2">
                            <div class="col space-y-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Mangga">
                                    <label class="form-check-label" for="example-radios-default1">Mangga</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Alpukat">
                                    <label class="form-check-label" for="example-radios-default2">Alpukat</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Rambutan">
                                    <label class="form-check-label" for="example-radios-default3">Rambutan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Kelengkeng">
                                    <label class="form-check-label" for="example-radios-default3">Kelengkeng</label>
                                </div>
                            </div>

                            <div class="col space-y-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Nangka">
                                    <label class="form-check-label" for="example-radios-default3">Nangka</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Durian">
                                    <label class="form-check-label" for="example-radios-default3">Durian</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Anggur">
                                    <label class="form-check-label" for="example-radios-default3">Anggur</label>
                                </div>
                            </div>

                            <div class="col space-y-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Jambu Biji">
                                    <label class="form-check-label" for="example-radios-default3">Jambu Biji</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Jeruk">
                                    <label class="form-check-label" for="example-radios-default3">Jeruk</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default"
                                        value="Sawo">
                                    <label class="form-check-label" for="example-radios-default3">Sawo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="mb-1">
                        <label class="form-label">
                            <h5>Bagian Tanaman</h5>
                        </label>
                        <div class="row space-y-2">
                            <div class="col space-y-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default1"
                                        value="Buah">
                                    <label class="form-check-label" for="example-radios-default12">Buah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default1"
                                        value="Batang">
                                    <label class="form-check-label" for="example-radios-default12">Batang</label>
                                </div>
                            </div>

                            <div class="col space-y-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default1"
                                        value="Akar">
                                    <label class="form-check-label" for="example-radios-default13">Akar</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="example-radios-default1"
                                        value="Daun">
                                    <label class="form-check-label" for="example-radios-default3">Daun</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xl-12">
                <div class="mb-4">
                    <label class="form-label">
                        <h5>Jamur Tanaman Buah </h5>
                    </label>
                    <div class="space-y-2">
                        <div class="col">
                            <div class="form-check d-flex align-items-center">
                                <div>
                                    <input class="form-check-input" type="checkbox" id="example-radios-default11"
                                        name="example-radios-default1" value="option1">
                                </div>
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col-lg-4 col-xl-4">
                                            <img class="img-thumbnail m-2 " width="100px"
                                                src="/assets/media/avatars/avatar10.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-12">
                                            <label class="form-check-label" for="example-radios-default11">
                                                <p>
                                                    (G-01) Jamur Collectrichum Gleosporidioes
                                                </p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-xl-12">
                        <div class="mb-5">
                            <label class="form-label">
                                <h5>Pilih Gejala</h5>
                            </label>
                            <div class="space-y-2">
                                <div class="col">
                                    <div class="form-check d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input" type="checkbox" id="example-radios-default11"
                                                name="example-radios-default1" value="option1">
                                        </div>
                                        <div class="p-1">
                                            <div class="row">
                                                <div class="col-lg-4 col-xl-4">
                                                    <img class="img-thumbnail m-2 " width="100px"
                                                        src="/assets/media/avatars/avatar10.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <label class="form-check-label" for="example-radios-default11">
                                                        <p>
                                                            (G-01) Jamur Collectrichum Gleosporidioes
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="col">
                                    <div class="form-check d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input" type="checkbox" id="example-radios-default11"
                                                name="example-radios-default1" value="option1">
                                        </div>
                                        <div class="p-1">
                                            <div class="row">
                                                <div class="col-lg-4 col-xl-4">
                                                    <img class="img-thumbnail m-2 " width="100px"
                                                        src="/assets/media/avatars/avatar10.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <label class="form-check-label" for="example-radios-default11">
                                                        <p>
                                                            (G-01) Jamur Collectrichum Gleosporidioes
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="col">
                                    <div class="form-check d-flex align-items-center">
                                        <div>
                                            <input class="form-check-input" type="checkbox" id="example-radios-default11"
                                                name="example-radios-default1" value="option1">
                                        </div>
                                        <div class="p-1">
                                            <div class="row">
                                                <div class="col-lg-4 col-xl-4">
                                                    <img class="img-thumbnail m-2 " width="100px"
                                                        src="/assets/media/avatars/avatar10.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <label class="form-check-label" for="example-radios-default11">
                                                        <p>
                                                            (G-01) Jamur Collectrichum Gleosporidioes
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
