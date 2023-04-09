@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                @if (request()->is('petani/riwayatDiagnosa'))
                Riwayat Diagnosa Petani
                @else

                Hasil Diagnosa Penyakit Tanaman Buah Dikotil
                @endif
            </h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">No</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Jenis Tanaman</th>

                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Nama Penyakit</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Gambar</th>
                        <th class="text-center" style="width: 15%;">Detail</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $no = 1;
                    @endphp
                    @foreach ($diagnosa as $key)
                        {{-- @dd($key->DiagnosaToDetail->RelasidetailPenyakit) --}}
                        <tr>
                            <td class="text-center fs-sm">{{ $no++ }}</td>
                            <td class="fw-normal fs-sm text-center">{{ $key->tanggal }}</td>
                            <td class="fw-normal fs-sm text-center">
                                {{ $key->DiagnosaToDetail[0]->RelasidetailPenyakit->Buah }}
                            </td>
                            <td class="d-none d-sm-table-cell fs-sm text-center">
                                {{ $key->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->namaPenyakit }}
                            </td>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48"
                                    src="{{ is_null($key->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->gambar) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->gambar) }}"
                                    alt="">
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('detail-diagnosa', $key->DiagnosaToDetail[0]->key) }}" type="button"
                                        class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip"
                                        aria-label="reply" data-bs-original-title="reply">
                                        <i class="fa fa-fw fa-reply-all"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            @if (request()->is('petani/riwayatDiagnosa'))
            @else
                <div class="mt-2">
                    <a type="button" href="{{ route('diagnosa') }}" class="btn rounded-pill btn-alt-success me-1 mb-3">
                        <i class="fa fa-fw fa-rotate me-1"></i> Diagnosa Ulang
                    </a>

                </div>
            @endif

        </div>
    </div>
@endsection
