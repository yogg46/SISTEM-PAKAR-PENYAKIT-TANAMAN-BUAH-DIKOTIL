@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <a href="{{ route('tambah-detailpenyakit') }}" type="button" class="btn btn-alt-success me-1 mb-1">
                <i class="fa fa-fw fa-plus me-1"></i> Tambah Data
            </a>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10%">No</th>
                        <th class="text-center" style="width: 10%">Nama Buah</th>
                        <th class="text-center" style="width: 10%">Bagian Terserang</th>
                        <th class="text-center" style="width: 10%"> Nama Penyakit</th>
                        <th class="text-center" style="width: 70%"> Gejala Penyakit</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($detailpenyakit as $key)
                        <tr>
                            <td class="text-center fs-sm text-center">{{ $no++ }} </td>
                            <td class="text-center fs-sm text-center">{{ $key->Buah }} </td>
                            <td class="fw-normal fs-sm text-center">{{ $key->Bagian }}</td>
                            <td class="fw-normal fs-sm text-center" style="text-align: justify">
                                {{ $key->DetailPenyakitToPenyakit->namaPenyakit }}
                            </td>
                            <td class="fw-normal fs-sm text-center " style="text-align: justify">
                                {{ $key->DetailPenyakitToGejala->namaGejala }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('edit-detail-penyakit', $key->id) }}" type="button"
                                        class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip"
                                        aria-label="Edit" data-bs-original-title="Edit">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                    <button data-id="{{ $key->id }}" onclick="deletePost(this)" type="button"
                                        class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled delete-user"
                                        data-bs-toggle="tooltip" aria-label="Delete" data-bs-original-title="Delete">
                                        <i class="fa fa-fw fa-times"></i>
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

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        // import axios from 'axios'

        function deletePost(button) {
            const postId = button.getAttribute('data-id');
            Swal.fire({
                title: 'Are you sure?',
                text: 'This action cannot be undone!',
                icon: 'error',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete(`/dataAturan/detailpenyakit/delete/${postId}`)
                        .then(() => {
                            const post = button.closest('.post');
                            post.remove();
                            // Swal.fire({
                            //     title: 'Success!',
                            //     text: 'The post has been deleted.',
                            //     icon: 'success',
                            //     confirmButtonText: 'OK'
                            // });
                        })
                        .catch(() => {
                            location.reload()
                            // Swal.fire({
                            //     title: 'Error!',
                            //     text: 'An error occurred while deleting the post.',
                            //     icon: 'success',
                            //     confirmButtonText: 'OK'
                            // });
                        });
                }
            });
        }
    </script>
@endpush
