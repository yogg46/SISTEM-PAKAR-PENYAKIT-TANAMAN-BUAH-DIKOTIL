@extends('layouts.main')
@section('page')
<div class="block block-rounded">
    <div class="block-header block-header-default" style="padding-bottom: 25px">
        {{-- <button type="button" class="btn btn-alt-success me-1 mb-1">
            <i class="fa fa-fw fa-plus me-1"></i> Tambah Data
        </button> --}}
    </div>
    <div class="block-content block-content-full">
      <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
      <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
        <thead>
          <tr>
            <th class="text-center" style="width: 15%;">ID Petani</th>
            <th class="text-center" style="width: 15%">Nama Petani</th>
            <th class="text-center" style="width: 15%">Nilai</th>
            <th class="text-center" style="width: 40%">Saran</th>
            <th class="text-center" style="width: 15%;">Aksi</th>
          </tr>
        </thead>
        <tbody>
@foreach ($komentar as $rating)
{{-- @json($rating->chatToUser) --}}

      <tr>
        <td class="fs-sm text-center">{{ $rating->idUser }}</td>
        <td class="fw-normal fs-sm text-center"> {{ $rating->username  }}</td>
        <td class="fw-normal fs-sm text-center" style="text-align: justify">

            <div class="js-rating" data-score="{{ $rating->nilai }}" data-read-only="true" data-star-on="fa fa-fw fa-star text-info"></div>

        <td class="fw-normal fs-sm text-center">{{ $rating->saran }}</td>
        </td>
        <td class="text-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
                    <i class="fa fa-fw fa-trash"></i>
                </button>
            </div>
        </td>
      </tr>
@endforeach

        </tbody>
      </table>
    </div>
  </div>
@endsection
