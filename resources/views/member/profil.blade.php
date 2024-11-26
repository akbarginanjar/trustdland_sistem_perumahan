@extends('layouts.member')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight"
        style="background-image: url('{{ asset('images/bg-welcome.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Profile <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Dasboard Profile</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-8">
                    <div class="card ftco-animate mt-3"
                        style="box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.048); border-radius: 15px;">
                        <div class="card-body">
                            <h5><b>Detail Pribadi</b></h5>
                            <div style="font-size: 13px;" class="mb-1">Nama Lengkap</div>
                            <input type="text" disabled class="form-control mb-2" value="{{ Auth::user()->name }}">
                            <div style="font-size: 13px;" class="mb-1">Email</div>
                            <input type="text" disabled class="form-control mb-2" value="{{ Auth::user()->email }}">
                            <div style="font-size: 13px;" class="mb-1">No Telepon/Whatsapp</div>
                            <input type="text" disabled class="form-control mb-2"
                                value="{{ Auth::user()->penyewa[0]->no_telepon }}">
                            <div style="font-size: 13px;" class="mb-1">Alamat</div>
                            <input type="text" disabled class="form-control mb-2"
                                value="{{ Auth::user()->penyewa[0]->alamat }}">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card ftco-animate mt-3"
                        style="box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.048); border-radius: 15px;">
                        <div class="card-body">
                            <h6>Total mobil yang disewa</h6>
                            <div style="display: flex; justify-content: space-between;">
                                <h1><b>{{ $countTransaksi }}</b></h1>
                                <i class="fa fa-car text-primary" style="font-size: 50px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h6 class="mb-3">Transaksi Pesanan Saya</h6>
            @foreach ($transaksi as $item)
                <div class="card ftco-animate mb-2"
                    style="box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.099); border-radius: 15px; border-right: 5px solid rgb(230, 25, 25);">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="{{ $item->mobil->gambar() }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-sm">
                                <div style="font-size: 13px;">Merk Mobil</div>
                                <h5><b>{{ $item->mobil->merk }}</b></h5>
                                <div style="font-size: 13px;">Jenis</div>
                                <b class="">{{ $item->mobil->jenis }}</b>
                            </div>
                            <div class="col-sm">
                                <div style="font-size: 13px;">Plat</div>
                                <b> {{ $item->mobil->plat }}</b>
                                <div style="font-size: 13px;">Nomor Mobil</div>
                                <b> {{ $item->mobil->nomor_mobil }} </b>
                            </div>
                            <div class="col-sm">
                                <div style="font-size: 13px;">Tgl Sewa</div>
                                {{ $item->tgl_sewa }}
                                <div style="font-size: 13px;">Tgl Pengembalian</div>
                                {{ $item->tgl_pengembalian }}
                            </div>
                            <div class="col-sm">
                                @if ($item->status == '1')
                                    <div class="bg-secondary text-white p-1 rounded text-center"
                                        style="width: 80px; float: right;">
                                        Pending</div>
                                @elseif($item->status == '2')
                                    <div class="bg-warning text-white p-1 rounded text-center"
                                        style="width: 80px; float: right;">
                                        Sedang Disewa</div>
                                @elseif($item->status == '3')
                                    <div class="bg-success text-white p-1 rounded text-center"
                                        style="width: 80px; float: right;">
                                        Selesai</div>
                                @else
                                    <div class="bg-danger text-white p-1 rounded text-center"
                                        style="width: 80px; float: right;">
                                        Ditolak</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
              
                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                style="background-image: url({{ $item->gambar() }});">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="/mobil/{{ $item->slug }}">{{ $item->merk }}</a></h2>
                                <div class="d-flex mb-1">
                                    <span class="cat">{{ $item->jenis }}</span>
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
              
            </div>
        </div>
    </section> --}}
@endsection
