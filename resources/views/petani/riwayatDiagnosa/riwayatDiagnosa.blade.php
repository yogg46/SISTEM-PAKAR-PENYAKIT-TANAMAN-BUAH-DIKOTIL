@extends('layouts.main')
@section('page')

    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Riwayat Diagnosa Petani</h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">ID</th>
                        <th class="text-center">Jenis Tanaman</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Nama Penyakit</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Gambar</th>
                        <th class="text-center" style="width: 15%;">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center fs-sm">1</td>
                        <td class="fw-normal fs-sm text-center">Mangga</td>
                        <td class="d-none d-sm-table-cell fs-sm text-center">Busuk Buah</td>
                        <td class="text-center">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar1.jpg" alt="">
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="/chat/balaschat/1" type="button"
                                    class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip"
                                    aria-label="reply" data-bs-original-title="reply">
                                    <i class="fa fa-fw fa-reply-all"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center fs-sm">2</td>
                        <td class="fw-normal fs-sm text-center">Alpukat</td>
                        <td class="d-none d-sm-table-cell fs-sm text-center">Busuk Batang</td>
                        <td class="text-center">
                            <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar1.jpg" alt="">
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="/chat/balaschat/1" type="button"
                                    class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip"
                                    aria-label="reply" data-bs-original-title="reply">
                                    <i class="fa fa-fw fa-reply-all"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
