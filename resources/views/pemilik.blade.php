{{-- @foreach ($aturan as $key)
{{ $key->aturanToPenyakit->kodePenyakit}}  {{ $key->aturanToPenyakit->namaPenyakit}}<br>
{{ $key->aturanToGejala->kodeGejala}}  {{ $key->aturanToGejala->namaGejala}}<br>
@endforeach --}}


{{-- @foreach ($penyakit as $s)
    {{$s->penyakitToAturan->aturanToGejala}}
   @foreach ($s->penyakitToAturan as $c)
       {{ $c->aturanToGejala->namaGejala}}
   @endforeach
@endforeach --}}
@extends('layouts.main')

@section('page')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xl-12">
            <a class="block block-rounded block-link-pop border-start border-primary border-4" href="/">
                <div class="block-content block-content-full" style="background-color: rgba(37, 166, 202, 0.562)">
                    <div class="fs-sm fw-semibold text-uppercase text-muted">Hello, Admin</div>
                    <div class="fs-2 fw-bold text-dark">Selamat Datang Di Sistem Pakar Penyakit Tanaman Buah Dikotil</div>
                </div>
            </a>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center"
                    style="background-color: rgb(22, 235, 160)">
                    <dl class="mb-0">
                        <dt class="fs-3 fw-bold">2</dt>
                        <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0" style="color: #000000!important">Data
                            User</dd>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        <i class="fa fa-user-gear fs-3 text-primary"></i>
                    </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                    <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                        href="/">
                        <span>Lihat rincian</span>
                        <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center"
                    style="background-color: rgb(22, 235, 160)">
                    <dl class="mb-0">
                        <dt class="fs-3 fw-bold">6</dt>
                        <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0" style="color: #000000!important">Data
                            Petani</dd>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        <i class="fa fa-user-plus fs-3 text-primary"></i>
                    </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                    <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                        href="/">
                        <span>Lihat rincian</span>
                        <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center"
                    style="background-color: rgb(22, 235, 160)">
                    <dl class="mb-0">
                        <dt class="fs-3 fw-bold">8</dt>
                        <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0" style="color: #000000!important">Data
                            Penyakit</dd>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        <i class="fa fa-disease fs-3 text-primary"></i>
                    </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                    <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                        href="/">
                        <span>Lihat rincian</span>
                        <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column h-100 mb-0">
                <div class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center"
                    style="background-color: rgb(22, 235, 160)">
                    <dl class="mb-0">
                        <dt class="fs-3 fw-bold">51</dt>
                        <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0" style="color: #000000!important">Data
                            Gejala</dd>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        <i class="fa fa-retweet fs-3 text-primary"></i>
                    </div>
                </div>
                <div class="bg-body-light rounded-bottom">
                    <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                        href="/">
                        <span>Lihat rincian</span>
                        <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-3 col-lg-3 col-xl-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default" style="background-color: #B9F3E4">
                    <h3 class="block-title fw-bold" style="color: #000000!important">Data Laporan Penyakit Tanaman Buah
                        Petani</h3>
                    <div class="block-options">
                        {{-- <div class="block-options-item text-danger">Special!</div> --}}
                    </div>
                </div>
                <div class="block-content block-content-full text-center">

                    <div class="py-3 px-xxl-7">
                        <!-- Pie Chart Container -->
                        <canvas id="js-chartjs-pie"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-6">
            <div class="block block-rounded">
                <div class="block-header block-header-default" style="background-color: #B9F3E4">
                    <h3 class="block-title fw-bold" style="color: #000000!important">Data Obat Yang Sering Digunakan Petani
                        Petani</h3>
                    <div class="block-options">
                        {{-- <div class="block-options-item text-danger">Special!</div> --}}
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="py-3 px-xxl-7">
                        <!-- Pie Chart Container -->
                        <canvas id="js-chartjs-donut"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3 col-xl-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default" style="background-color: #B9F3E4">
                    <h3 class="block-title fw-bold" style="color: #000000!important">Data Laporan Penyakit 6 Bulan Terakhir
                        Petani</h3>
                    <div class="block-options">
                        {{-- <div class="block-options-item text-danger">Special!</div> --}}
                    </div>
                </div>
                <div class="block-content block-content-full text-center">
                    <div class="py-3 ">
                        <!-- Pie Chart Container -->
                        <canvas id="js-chartjs-lines"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- @push('chart')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            $(function() {
                //get the pie chart canvas
                // var cData = JSON.parse(`<?php echo $chart_data; ?>`);
                var ctx = $("#pie-chart");

                //pie chart data
                var data = {
                    labels: cData.label,
                    datasets: [{
                        label: "Users Count",
                        data: cData.data,
                        backgroundColor: [
                            "#DEB887",
                            "#A9A9A9",
                            "#DC143C",
                            "#F4A460",
                            "#2E8B57",
                            "#1D7A46",
                            "#CDA776",
                        ],
                        borderColor: [
                            "#CDA776",
                            "#989898",
                            "#CB252B",
                            "#E39371",
                            "#1D7A46",
                            "#F4A460",
                            "#CDA776",
                        ],
                        borderWidth: [1, 1, 1, 1, 1, 1, 1]
                    }, {
                        label: "This Week",
                        fill: !0,
                        backgroundColor: "rgba(0, 0, 0, .1)",
                        borderColor: "rgba(0, 0, 0, .3)",
                        pointBackgroundColor: "rgba(0, 0, 0, .3)",
                        pointBorderColor: "#fff",
                        pointHoverBackgroundColor: "#fff",
                        pointHoverBorderColor: "rgba(0, 0, 0, .3)",
                        data: [30, 32, 40, 45, 43, 38, 55]
                    }]
                };

                //options
                var options = {
                    responsive: true,
                    title: {
                        display: true,
                        position: "top",
                        text: "Last Week Registered Users -  Day Wise Count",
                        fontSize: 18,
                        fontColor: "#111"
                    },
                    legend: {
                        display: true,
                        position: "bottom",
                        labels: {
                            fontColor: "#333",
                            fontSize: 16
                        }
                    }
                };

                //create Pie Chart class object
                var chart1 = new Chart(ctx, {
                    type: "line",
                    data: data,
                    options: options
                });

            });
        </script>
    @endpush
     --}}
@endsection
