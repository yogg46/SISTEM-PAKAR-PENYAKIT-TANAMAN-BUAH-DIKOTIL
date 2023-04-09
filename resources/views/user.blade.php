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
                <div class="block-content block-content-full" style="background-color: #06d47b">
                    {{-- <div class="fs-sm fw-semibold text-uppercase text-muted">Halo Petani,</div> --}}
                    <div class="fs-2 fw-bold text-dark">Halo, Selamat Datang Petani
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-12">
            <div class="block block-rounded">
                <div class="block-header block-header-default" style="background-color: #B3FFAE">
                    <h2 class="block-title text-center">
                        Selamat Datang di Sistem Pakar Penyakit
                        <br>Tanaman Buah Dikotil
                    </h2>
                </div>
                <div class="block-content" style="text-align: justify">
                    <p>Sistem pakar penyakit tanaman buah dikotil adalah sebuah sistem yang menggunakan kecerdasan buatan
                        (artificial intelligence) dan pengetahuan yang diberikan oleh para ahli atau pakar dalam bidang
                        penyakit tanaman buah dikotil untuk mendiagnosis penyakit pada tanaman buah dikotil. Sistem ini
                        biasanya terdiri dari basis pengetahuan yang meliputi gejala-gejala penyakit, penyebab, dan
                        pengobatan yang tepat untuk setiap jenis penyakit pada tanaman buah dikotil.

                        Sistem pakar ini dapat memberikan solusi dan rekomendasi pengobatan yang tepat berdasarkan masukan
                        data gejala penyakit yang diberikan oleh pengguna, sehingga dapat membantu para petani atau praktisi
                        pertanian dalam mengidentifikasi penyakit pada tanaman buah dikotil dan memberikan penanganan yang
                        efektif. Dengan adanya sistem pakar ini, diharapkan dapat membantu meningkatkan produktivitas
                        tanaman dan mengurangi kerugian yang disebabkan oleh serangan penyakit pada tanaman buah dikotil.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
