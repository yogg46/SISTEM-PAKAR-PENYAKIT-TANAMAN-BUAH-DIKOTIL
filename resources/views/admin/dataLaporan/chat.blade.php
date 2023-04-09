@extends('layouts.main')
@section('page')
{{-- @dd($chat) --}}
{{-- @json($chat) --}}

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
                        <th class="text-center" style="width: 10%;">No</th>
                        <th class="text-center" style="width: 20%">Username</th>
                        <th class="text-center" style="width: 40%">Isi Pesan</th>
                        <th class="text-center" style="width: 15%">Tanggal</th>
                        <th class="text-center" style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ( $chat->unique('sender_id') as $key )

                    <tr>
                        <td class="text-center fs-sm">{{ $no++ }}</td>
                        <td class="fw-normal fs-sm"> {{ $key->sender->namaPengguna }}</td>
                        <td class="fw-normal fs-sm" style="text-align: justify"> {{ $key->isi }}
                        </td>
                        <td class="fw-normal fs-sm" style="text-align: justify">{{ $key->created_at }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ route('balas-chat', $key->sender_id) }}" type="button"
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
        </div>
    </div>
@endsection
