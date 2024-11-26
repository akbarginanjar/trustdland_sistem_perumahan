@extends('layouts.member')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ asset('assets/member/images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Mobil <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Pilih mobil yang akan kamu sewa</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach ($mobil as $item)
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                style="background-image: url({{ $item->gambar() }});">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="/mobil/{{ $item->slug }}">{{ $item->merk }}</a></h2>
                                <div class="d-flex mb-1">
                                    <span class="cat">{{ Str::limit($item->jenis, 13) }}</span>
                                    <p class="price ml-auto">Rp.
                                        {{ number_format($item->harga_sewa, 0, ',', '.') }}<span>/Perhari</span></p>
                                </div>
                                @if ($item->status == 'Tersedia')
                                    <div class="rounded float-left"
                                        style="padding: 2px 5px; font-size: 12px; color:white; background: rgb(63, 195, 42);">
                                        Tersedia</div><br>
                                @else
                                    <div class="rounded bg-warning float-left"
                                        style="padding: 2px 5px; font-size: 12px; color:white;">
                                        Sedang disewa</div><br>
                                @endif
                                @if ($item->status == 'Tersedia')
                                    <a href="/mobil/{{ $item->slug }}"
                                        class="btn btn-secondary btn-block mt-3">Booking</a>
                                @else
                                    <a href="/mobil/{{ $item->slug }}"
                                        class="btn btn-secondary btn-block mt-3 disabled">Booking</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
