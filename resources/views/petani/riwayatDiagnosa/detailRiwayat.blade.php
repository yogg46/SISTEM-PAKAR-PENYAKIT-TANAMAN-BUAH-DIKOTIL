@extends('layouts.main')
@section('page')
    <div class="block block-rounded">
        <div class="block-content">
            <div>
                <h4 class="block-title">
                    Detail Diagnosa
                </h4>
            </div>
            <table class="table table-bordered table-hover table-vcenter">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center" style="width: 30%" scope="row">Gambar Penyakit</th>
                        <td class="fw-semibold fs-sm">

                        </td>

                    </tr>
                    <tr>
                        <th class="text-center" style="width: 30%" scope="row">Nama Penyakit</th>
                        <td class="fw-semibold fs-sm">

                        </td>
                    </tr>
                    <tr>
                        <th class="text-center" style="width: 30%" scope="row">Gejala yang muncul</th>
                        <td class="fw-semibold fs-sm">

                        </td>
                    </tr>
                    <tr>
                        <th class="text-center" style="width: 30%" scope="row">Jamur atau Virus</th>
                        <td class="fw-semibold fs-sm">

                        </td>

                    </tr>
                    <tr>
                        <th class="text-center" style="width: 30%" scope="row">Solusi</th>
                        <td class="fw-semibold fs-sm">

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- <div class="block block-rounded">
        <div class="block-content">
            <div>
                <h4 class="block-title">
                    Detail Penyakit
                </h4>
            </div>
            <table class="table table-bordered table-hover table-vcenter">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center" style="width: 30%" scope="row">Gambar</th>
                        <td class="fw-semibold fs-sm">

                        </td>

                    </tr>
                    <tr>
                        <th class="text-center" style="width: 30%" scope="row">Nama</th>
                        <td class="fw-semibold fs-sm">

                        </td>
                    </tr>
                    <tr>
                        <th class="text-center" style="width: 30%" scope="row">Keterangan</th>
                        <td class="fw-semibold fs-sm">

                        </td>

                    </tr>
                    <tr>
                        <th class="text-center" style="width: 30%" scope="row">Solusi</th>
                        <td class="fw-semibold fs-sm">

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}

    <div class="block block-rounded">
        <div class="block-content">
            <div>
                <h4 class="block-title">
                    Detail Obat yang bisa digunakan
                </h4>
            </div>
            <table class="table table-bordered table-hover table-vcenter">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <th class="text-center" style="width: 30%" scope="row">Gambar</th>
                        <td class="fw-semibold fs-sm">

                        </td>

                    </tr>
                    <tr>
                        <th class="text-center" style="width: 30%" scope="row">Nama</th>
                        <td class="fw-semibold fs-sm">

                        </td>
                    </tr>
                    <tr>
                        <th class="text-center" style="width: 30%" scope="row">Jenis</th>
                        <td class="fw-semibold fs-sm">

                        </td>

                    </tr>
                    <tr>
                        <th class="text-center" style="width: 30%" scope="row">Khasiat</th>
                        <td class="fw-semibold fs-sm">

                        </td>
                    </tr>
                    <tr>
                        <th class="text-center" style="width: 30%" scope="row">Cara Pengggunaan Obat</th>
                        <td class="fw-semibold fs-sm">

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-2">
        <button type="button" class="btn rounded-pill btn-alt-success me-1 mb-3">
            <i class="fa fa-fw fa-arrow-left-long me-1"></i> Kembali
        </button>
        <button type="button" class="btn rounded-pill btn-alt-success me-1 mb-3">
            <i class="fa fa-fw fa-print me-1"></i> Cetak Riwayat
        </button>
    </div>
@endsection
