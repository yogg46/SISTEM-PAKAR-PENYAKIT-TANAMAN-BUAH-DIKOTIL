@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <a href="{{ route('tambah-penyakit') }}" type="button" class="btn btn-alt-success me-1 mb-1">
                <i class="fa fa-fw fa-plus me-1"></i> Tambah Data
            </a>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10%;">Kode Penyakit</th>
                        <th class="text-center" style="width: 30%">Nama Penyakit</th>
                        <th class="text-center" style="width: 30%">Keterangan</th>
                        <th class="text-center" style="width: 30%">Solusi</th>
                        <th class="text-center" style="width: 15%;">Gambar</th>
                        <th class="text-center" style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $no = 1;
                    @endphp
                    @foreach ($penyakit as $key)
                        <tr>
                            <td class="text-center fs-sm">{{ $key->idPenyakit }}</td>
                            <td class="fw-normal fs-sm"> {{ $key->namaPenyakit }}</td>
                            <td class="fw-normal fs-sm" style="text-align: justify"> {{ $key->keterangan }}</td>
                            <td class="fw-normal fs-sm" style="text-align: justify">{{ $key->solusi }}</td>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48"
                                    src="{{ is_null($key->gambar) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->gambar) }}"
                                    alt="">
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('edit-penyakit', $key->key) }}" type="button"
                                        class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                    <button data-id="{{ $key->idPenyakit }}" onclick="deletePost(this)" type="button"
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
                    axios.delete(`/dataPakar/datapenyakit/deletepenyakit/${postId}`)
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
