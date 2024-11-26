@extends('layouts.member')

@section('content')
    <section class="hero-kecil dark-background hero-wrap-2 js-fullheight"
        style="background-image: url('https://dev.microsites.99iddev.net/app/uploads/sites/771/2023/04/Penampakan-rumah-modern-di-Parkland-Podomoro.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <h1 class="mt-5 bread"><b> Dashboard Saya </b></h1>
                </div>
            </div>
        </div>
    </section>

    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 align-items-center justify-content-between">


                <div class="col-lg-12">

                    <h3 class="fw-bold fs-2 mb-3 text-dark text-center">Progres Pembangunan Rumah</h3>

                    <div class="row gy-4 mt-4">
                        @foreach ($konsumenBangunan as $item)
                            <h3 class="text-dark"><b>{{ $item->project->nama_project }} - {{ $item->siteplan->kode }}</b>
                            </h3>
                            @if ($item->progresBangunan != '[]')
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($item->progresBangunan as $itemProgres)
                                    <div class="col-lg-4">
                                        <div class="stats-item d-flex">
                                            <img src="{{ $itemProgres->foto() }}"
                                                style="width: 150px; height: 100px; object-fit: cover; border-radius: 10px;"
                                                class="me-3" alt="">
                                            <div>
                                                <h6>Progres Ke {{ $no++ }}</h6>
                                                <h5 class="text-dark "><b>
                                                        {{ \Carbon\Carbon::parse($itemProgres->tgl_laporan)->format('d-m-Y') }}
                                                        {{-- : {{ $itemProgres->waktu_laporan }} --}}
                                                    </b>
                                                </h5>
                                                @if ($itemProgres->video)
                                                    <a href="{{ $itemProgres->video }}" target="_blank"
                                                        class="btn btn-secondary btn-sm mb-1">
                                                        <i class="fa-solid fa-circle-play me-1 text-white"
                                                            style="font-size: 15px;"></i> Lihat Video
                                                    </a>
                                                    <br>
                                                @endif
                                                <span>Ket : {{ $itemProgres->keterangan }}</span>
                                            </div>
                                        </div>
                                    </div><!-- End Stats Item -->
                                @endforeach
                            @endif
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
