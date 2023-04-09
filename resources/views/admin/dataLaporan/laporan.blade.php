@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <div class="mb-1">
                <div class="btn-group" role="group" aria-label="Horizontal Primary">
                    <a href="{{ route('lihat-laporan') }}" type="button" class="btn btn-primary"
                        style="background-color: rgb(63, 143, 83)">
                        <i class="fa fa-fw fa-eye me-1"></i> Lihat Laporan
                    </a>
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
                        <th class="text-center" style="width: 15%;">Nama Petani</th>
                        <th class="text-center" style="width: 10%">Tanggal Diagnosa</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Jenis Penyakit</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Solusi</th>
                        <th class="text-center" style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $laporan as $key )

                    <tr>
                        <td class="text-center fs-sm text-center">{{ $key->DiagnosaToUser->namaPengguna }}</td>
                        <td class="fw-normal fs-sm text-center">{{ $key->tanggal }}</td>
                        <td class="d-none d-sm-table-cell fs-sm text-center">
                           {{ $key->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->namaPenyakit }}
                        </td>
                        <td class="d-none d-sm-table-cell" style="text-align: justify">
                            {{ $key->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->solusi }}
                        </td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="/laporan/detail/1" type="button"
                                    class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip"
                                    aria-label="Delete" data-bs-original-title="Delete">
                                    <i class="fa fa-fw fa-reply"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
