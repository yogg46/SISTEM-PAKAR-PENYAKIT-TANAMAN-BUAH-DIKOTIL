@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <a href="{{ route('tambah-petani') }}" type="button" class="btn btn-alt-success me-1 mb-1">
                <i class="fa fa-fw fa-plus me-1"></i> Tambah Data
            </a>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">No</th>
                        <th class="text-center">Nama</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Alamat</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Username</th>
                        <th class="text-center" style="width: 15%;">Level</th>
                        <th class="text-center" style="width: 15%;">Gambar</th>
                        <th class="text-center" style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $no = 1;
                    @endphp
                    @foreach ($petani as $key)
                        <tr>
                            <td class="text-center fs-sm">{{ $no++ }}</td>
                            <td class="fw-semibold fs-sm">{{ $key->namaPengguna }}</td>
                            <td class="d-none d-sm-table-cell fs-sm">
                                {{ $key->alamat }}
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 ">{{ $key->username }}</span>
                            </td>
                            <td>
                                <span
                                    class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">{{ $key->userRole == 'user' ? 'Petani' : '' }}</span>
                            </td>
                            <td class="text-center">
                                <img class="img-avatar img-avatar48"
                                    src="{{ is_null($key->gambar) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->gambar) }}"
                                    alt="">
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('edit-petani', $key->key) }}" type="button"
                                        class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                    <button data-id="{{ $key->idUser }}" onclick="deletePost(this)" type="button"
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
                    axios.delete(`/dataMaster/datapetani/deletepetani/${postId}`)
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
