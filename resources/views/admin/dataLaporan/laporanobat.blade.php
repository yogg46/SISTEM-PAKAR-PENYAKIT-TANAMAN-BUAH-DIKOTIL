@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <div class="mb-1">
                <div class="btn-group" role="group" aria-label="Horizontal Primary">
                    <button type="button" class="btn btn-primary" style="background-color: rgb(129, 123, 234)">
                        <i class="fa fa-fw fa-print me-1"></i> Cetak Laporan
                    </button>
                </div>
            </div>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 20%;">Nama Petani</th>
                        <th class="text-center" style="width: 20%">Tanggal Diagnosa</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 60%;">Obat yang digunakan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center fs-sm text-center">Rizki Aminah</td>
                        <td class="fw-normal fs-sm text-center">21-09-2023</td>
                        <td class="d-none d-sm-table-cell fs-sm text-center">
                            Fungisida VELIMEX 80wp
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
