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
                <div class="col-sm">
                    <div class="card ftco-animate mt-3"
                        style="box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.048); border-top: 5px solid rgb(207, 34, 34); border-radius: 15px;">
                        <div class="card-body">
                            <form action="/member/profil/simpanPenyewa" method="POST">
                                @csrf
                                <b class="text-dark">Form Pelengkapan Data Pribadi</b>
                                <div style="font-size: 13px;" class="mb-3">Lengkapi form dibawah ini dengan baik, agar
                                    anda
                                    bisa melakukan sewa</div>
                                <div style="font-size: 13px;" class="mb-1">No Telepon/Whatsapp</div>
                                <input type="text" required name="no_telepon" class="form-control mb-2">
                                <div style="font-size: 13px;" class="mb-1">Alamat</div>
                                <input type="text" required name="alamat" class="form-control mb-4">
                                <center>
                                    <button type="submit" class="btn btn-primary col-4">Simpan</button>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
