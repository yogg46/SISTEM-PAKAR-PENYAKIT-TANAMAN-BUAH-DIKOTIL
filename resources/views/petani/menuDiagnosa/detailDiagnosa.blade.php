@extends('layouts.main')
@section('page')
    {{-- @json($diagnosa)
    @json($diagnosas) --}}
    {{-- <form id="pdf-form"> --}}
        <div id="my-content-div">

        <div   class="mt-4">

            <div class="block block-rounded">
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
                                    <img src=" {{ asset('storage/' . $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->gambar) }}"
                                        alt="" style="width: 50%">

                                </td>

                            </tr>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Nama</th>
                                <td class="fw-semibold fs-sm">
                                    {{ $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->namaPenyakit }}

                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Keterangan</th>
                                <td class="fw-semibold fs-sm">
                                    <p>

                                        {{ $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->keterangan }}
                                    </p>

                                </td>

                            </tr>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Solusi</th>
                                <td class="fw-semibold fs-sm">
                                    {{ $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->solusi }}

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div style="    page-break-before: always;            ">            </div>
            <div class="block block-rounded">
                <div class="block-content">
                    <div>
                        <h4 class="block-title">
                            Detail Obat
                        </h4>
                    </div>
                    <table class="table table-bordered table-hover table-vcenter">
                        <thead>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Gambar</th>
                                <td class="fw-semibold fs-sm">
                                    <img src=" {{ asset('storage/' . $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->penyakitToObat[0]->gambarObat) }}"
                                        alt="" style="width: 50%">

                                </td>

                            </tr>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Nama</th>
                                <td class="fw-semibold fs-sm">
                                    {{ $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->penyakitToObat[0]->namaObat }}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Jenis</th>
                                <td class="fw-semibold fs-sm">
                                    {{ $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->penyakitToObat[0]->jenis }}
                                </td>

                            </tr>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Khasiat</th>
                                <td class="fw-semibold fs-sm">
                                    {{ $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->penyakitToObat[0]->khasiat }}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center" style="width: 30%" scope="row">Cara Pengggunaan Obat</th>
                                <td class="fw-semibold fs-sm">
                                    {{ $diagnosa[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->penyakitToObat[0]->cara }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            @foreach ($diagnosas as $key2)
                @foreach ($key2->DiagnosaToDetail as $key1)
                    <div class="block block-rounded">
                        <div class="block-content">
                            <div>
                                <h4 class="block-title">
                                    Gejala {{ '(' . $key1->RelasidetailPenyakit->DetailPenyakitToGejala->idGejala . ')' }}
                                </h4>
                            </div>
                            <table class="table table-bordered table-hover table-vcenter">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-center" style="width: 30%" scope="row">Gambar</th>
                                        <td class="fw-semibold fs-sm">
                                            {{-- src="{{ is_null($key->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->gambar) ? '/assets/media/avatars/avatar10.jpg' : asset('storage/' . $key->DiagnosaToDetail[0]->RelasidetailPenyakit->DetailPenyakitToPenyakit->gambar) }}" --}}
                                            <img src=" {{ asset('storage/' . $key1->RelasidetailPenyakit->DetailPenyakitToGejala->gambarGejala) }}"
                                                alt="" style="width: 50%">
                                            {{-- {{ $key1->RelasidetailPenyakit->DetailPenyakitToGejala->gambarGejala }} --}}

                                        </td>

                                    </tr>
                                    <tr>
                                        <th class="text-center" style="width: 30%" scope="row">Detail Gejala</th>
                                        <td class="fw-semibold fs-sm">
                                            {{ $key1->RelasidetailPenyakit->DetailPenyakitToGejala->namaGejala }}

                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>
<br>
<br>
<br>
                @endforeach
            @endforeach
        </div>
    </div>


        <div class="mt-2">
            <a href="{{ URL::previous() }}" type="button" class="btn rounded-pill btn-alt-success me-1 mb-3">
                <i class="fa fa-fw fa-arrow-left-long me-1"></i> Kembali
            </a>
            <a href="{{ route('diagnosa') }}" type="button" class="btn rounded-pill btn-alt-success me-1 mb-3">
                <i class="fa fa-fw fa-rotate me-1"></i> Diagnosa Ulang
            </a>
            <button  id="download-pdf-btn" class="btn rounded-pill btn-alt-success me-1 mb-3">
                <i class="fa fa-fw fa-print me-1"></i> Cetak
            </button>
        </div>
    {{-- </form> --}}
@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

<script>
    const downloadBtn = document.getElementById('download-pdf-btn');
    const contentDiv = document.getElementById('my-content-div');

    downloadBtn.addEventListener('click', () => {
        const now = new Date();
        const dateString = now.getFullYear() + '-' + (now.getMonth() + 1).toString().padStart(2, '0') + '-' + now.getDate().toString().padStart(2, '0');
        const filename = 'Diagnosa-' + dateString + '.pdf';
        html2pdf().from(contentDiv).save(filename);
    });


</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
    
@endpush
