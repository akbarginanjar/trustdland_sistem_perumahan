@extends('layouts.member')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="https://dev.microsites.99iddev.net/app/uploads/sites/771/2023/04/Penampakan-rumah-modern-di-Parkland-Podomoro.jpg"
            alt="" data-aos="fade-in">

        <div class="container">

            <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-9 col-lg-8">
                    <h2>Kembangkan Bersama Meningkatkan Value dari Setiap Aset Property Anda<span>.</span></h2>
                    {{-- <p>We are team of talented digital marketers</p> --}}
                </div>
            </div>

        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <iframe width="100%" style="border-radius: 20px;" height="330px"
                        src="https://www.youtube.com/embed/0su_c2ZUUgc" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <h1><b> Tentang Kami </b></h1>
                    <p>
                        Untuk mencapai sasaran dan kebutuhan yang diinginkan, efektif dan efesien dalam melaksanakan
                        pelayanan sesuai dengan bidang masing yang ditangani. Maksud dan tujuan disampaikan company profile
                        adalah untuk memberikan pola pelayanan pengelolaan adalah : <b> “ Pelayanan Efektif dan Efisien
                            kepada
                            mitra Kerja / User / Pengguna” </b>
                    </p>
                </div>
            </div>

        </div>

    </section>
    <!-- /About Section -->

    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 mt-3">

                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('images/TypeTeduh.webp') }}" class="img-fluid" style="border-radius: 20px;"
                        alt="">
                </div>
                <div class="col-lg-5">

                    <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div>
                            <h1 class="text-dark mt-2"><b>01</b></h1>
                            <br>
                            <h4 class="text-dark">Type Teduh</h4>
                            <h3 class="text-success"><b>Bukit Teras CIHANJUANG</b></h3>
                            <p>Rumah Kost Premium bernuansa jawa pertama di Kota Malang, dengan berbagai fasilitas unggulan
                                incaran para Mahasiswa.</p>
                            <br>
                            <a href="/type-teduh" class="btn btn-outline-dark">Selengkapnya ></a>
                        </div>
                    </div><!-- End Features Item-->

                </div>
            </div>

            <br>

            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('images/TypeHalimun.webp') }}" class="img-fluid" style="border-radius: 20px;"
                        alt="">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <div>
                        <h1 class="text-dark mt-2"><b>02</b></h1>
                        <br>
                        <h4 class="text-dark">Type 50</h4>
                        <h3 class="text-success">Bukit Teras CIHANJUANG</h3>
                        <p>Rumah Kost Premium bernuansa jawa pertama di Kota Malang, dengan berbagai fasilitas unggulan
                            incaran para Mahasiswa.</p>
                        <br>
                        <a href="/type-50" class="btn btn-outline-dark">Selengkapnya ></a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            {{-- <h2>Services</h2> --}}
            <p>Fasilitas</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Hunian Nyaman untuk Keluarga Muda</h3>
                        </a>

                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>High Speed Internet</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Air Artesis</h3>
                        </a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-bounding-box-circles"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>20 Menit dari TOL Buahbatu</h3>
                        </a>
                        <a href="service-details.html" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Lokasi Strategis</h3>
                        </a>
                        <a href="service-details.html" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-chat-square-text"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>View Pegunungan di Bandung Selatan</h3>
                        </a>
                        <a href="service-details.html" class="stretched-link"></a>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 align-items-center justify-content-between">


                <div class="col-lg-12">

                    <h3 class="fw-bold fs-2 mb-3 text-dark text-center">Lokasi Strategis</h3>

                    <div class="row gy-4 mt-4">

                        <div class="col-lg-4">
                            <div class="stats-item d-flex">
                                <img src="{{ asset('images/pemkot-cimahi.webp') }}"
                                    style="width: 140px; border-radius: 10px;" class="me-3" alt="">
                                <div>
                                    <h5 class="text-dark mt-2"><b> 10 Menit </b></h5>
                                    <span>Ke Pemkot Cimahi</span>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-4">
                            <div class="stats-item d-flex">
                                <img src="{{ asset('images/alun-alun-cimahi.webp') }}"
                                    style="width: 140px; border-radius: 10px;" class="me-3" alt="">
                                <div>
                                    <h5 class="text-dark mt-2"><b> 15 Menit </b></h5>
                                    <span>Ke Alun-Alun Cimahi</span>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-4">
                            <div class="stats-item d-flex">
                                <img src="{{ asset('images/rajawali.webp') }}" style="width: 140px; border-radius: 10px;"
                                    class="me-3" alt="">
                                <div>
                                    <h5 class="text-dark mt-2"><b> 2 Menit </b></h5>
                                    <span>Ke STIKES Rajawali</span>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-4">
                            <div class="stats-item d-flex">
                                <img src="{{ asset('images/park-and-zoo.webp') }}"
                                    style="width: 140px; border-radius: 10px;" class="me-3" alt="">
                                <div>
                                    <h5 class="text-dark mt-2"><b> 15 Menit </b></h5>
                                    <span>Ke Park & Zoo</span>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-4">
                            <div class="stats-item d-flex">
                                <img src="{{ asset('images/polban.webp') }}" style="width: 140px; border-radius: 10px;"
                                    class="me-3" alt="">
                                <div>
                                    <h5 class="text-dark mt-2"><b> 10 Menit </b></h5>
                                    <span>Ke POLBAN</span>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                        <div class="col-lg-4">
                            <div class="stats-item d-flex">
                                <img src="{{ asset('images/toll-baros.webp') }}"
                                    style="width: 140px; border-radius: 10px;" class="me-3" alt="">
                                <div>
                                    <h5 class="text-dark mt-2"><b> 25 Menit </b></h5>
                                    <span>Ke Gate TOLL Baros</span>
                                </div>
                            </div>
                        </div><!-- End Stats Item -->

                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="{{ asset('assets/member/assets/img/cta-bg.jpg') }}" alt="">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h1>TRUSTD</h1>
                        <p>Kepercayaan klien adalah integritas kami dalam bekerja pada setiap proyek yang kami tangani
                        </p>
                        {{-- <a class="cta-btn" href="#">Call To Action</a> --}}
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->

    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 mt-3">

                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('images/visi.png') }}" class=""
                        style="border-radius: 20px; width: 100%; height: 450px; object-fit: cover;" alt="">
                </div>
                <div class="col-lg-5">

                    <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div>
                            <h1 class="text-dark mt-2"><b>Visi</b></h1>
                            <br>
                            <h4 class="text-dark">Perusahaan TRUSTD LAND</h4>
                            <p>Menjadi perusahaan properti terpercaya dan terdepan yang memberikan solusi hunian berkualitas
                                serta berkelanjutan, dengan mengedepankan nilai kepercayaan, inovasi, dan kepuasan pelanggan
                                di setiap langkah bisnis kami</p>
                            <br>
                        </div>
                    </div><!-- End Features Item-->

                </div>
            </div>

            <br>

            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('images/misi.png') }}" class=""
                        style="border-radius: 20px; width: 100%; height: 550px; object-fit: cover;" alt="">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <div>
                        <h1 class="text-dark mt-2"><b>Misi</b></h1>
                        <br>
                        <h4 class="text-dark">Perusahaan TRUSTD LAND</h4>
                        <p>1. Membangun Hunian Berkualitas: Menyediakan properti dengan standar terbaik yang nyaman, aman,
                            dan berkelanjutan, serta sesuai dengan kebutuhan masyarakat modern. <br><br>

                            2. Mengutamakan Kepercayaan: Menjaga integritas dan transparansi dalam setiap proses bisnis
                            untuk membangun hubungan jangka panjang dengan pelanggan dan mitra. <br><br>

                            3. Menciptakan Inovasi Terbaru: Terus berinovasi dalam desain, teknologi, dan layanan untuk
                            memberikan solusi properti yang efisien dan ramah lingkungan. <br><br>

                            4. Memberikan Layanan Pelanggan Terbaik: Mengutamakan kepuasan pelanggan dengan memberikan
                            layanan yang profesional, responsif, dan berorientasi pada kebutuhan klien. <br><br>

                            5. Kontribusi Sosial dan Lingkungan: Berperan aktif dalam pembangunan berkelanjutan yang ramah
                            lingkungan dan memberikan dampak positif bagi masyarakat sekitar.</p>
                        <br>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section id="about" class="about section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 mt-3">

                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('images/careers.png') }}" class=""
                        style="border-radius: 20px; 20px; width: 100%; height: 300px; object-fit: cover;" alt="">
                </div>
                <div class="col-lg-5">

                    <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div>
                            <h1 class="text-dark mt-2"><b>Together We Build TRUSTD LAND</b></h1>
                            <br>
                            <p>Creativity, persistent, and the culture of islam become our core values</p>
                            <br>
                            <a href="/careers" class="btn btn-outline-dark">Selengkapnya ></a>
                        </div>
                    </div><!-- End Features Item-->

                </div>
            </div>

            <br>

            <div class="row gy-4">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('images/partnership.png') }}" class="img-fluid"
                        style="border-radius: 20px; 20px; width: 100%; height: 300px; object-fit: cover;" alt="">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 content">
                    <div>
                        <h1 class="text-dark mt-2"><b>Unlock New Opportunities</b></h1>
                        <br>
                        <p>Together, we can achieve more. Explore collaborative possibilities that drive success and
                            innovation.</p>
                        <br>
                        <a href="/partnetship" class="btn btn-outline-dark">Selengkapnya ></a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <div class="container mt-5">
        <h1 class="mb-4 text-dark text-center"><b>FAQ </b></h1>
        <div class="accordion" id="accordionExample">
            <!-- Item 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Dimana lokasi perumahannya?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Jl. Cihanjuang, Cihanjuang Rahayu, Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 40559,
                        Indonesia.
                        <br><br>
                        6°50’09.2″S 107°34’31.1″E
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Ada berapa type rumahnya?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Type 36/60 (Mezzanin)</li>
                            <li>Type 50/60 (2 lantai)</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Berapa harganya ?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>Type 36/ 60 550 juta</li>
                            <li>Type 50/ 60 700 juta</li>
                        </ul>
                        Harga Kelebihan Tanah 6jt/m <br>
                        Biaya Unit Rumah Hook 20jt
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Berapa dpnya?
                    </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Utk cash keras dp 95% <br>
                        Utk cash bertahap dp 50%
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        Saya tertarik dengan Perumahannya, apa yg harus saya lakukan selanjutnya?
                    </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Booking Rp. 5.000.000,-
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                        Bagaimana cara pembayaranya?
                    </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Cash Keras dp 95% sisanya dibayarkan saat bast Unit Rumah <br>
                        Cash bertahap dp 50% sisa nya di cicil maksimal 24x ( 24 Bulan ) <br>
                        KPR Dp 10-20% ( BSI, BTN Syariah, BJB Syariah ) on Proses <br>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        Apa nama developer Perumahan BUKIT TERAS CIHANJUANG ?
                    </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        TrustLand Developer <br>
                        (PT. WADO MITRA MANDIRI)
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                        Sertifikatnya apa?
                    </button>
                </h2>
                <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        FREE <br>
                        SHM <br>
                        AJB BN <br>
                        PBG / IMB <br>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                        Sumber airnya apa ?
                    </button>
                </h2>
                <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Submersible pump / Bor Sibel per unit Rumah
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                        Ada berapa total unit dari Perumahan BUKIT TERAS CIHANJUANG ?
                    </button>
                </h2>
                <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        24 Unit
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                        Berapa Lama Serah Terima Unit ?
                    </button>
                </h2>
                <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul>
                            <li>untuk type 1,5 Lantai 6 Bulan Dimulai setelah Pengerjaan Pondasi Awal</li>
                            <li>untuk type 2 Lantai 8 Bulan</li>
                        </ul>
                        Dimulai setelah Pengerjaan Pondasi Awal
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                        Apa Keunggulan Bukit ?
                    </button>
                </h2>
                <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        - City ViewUdara <br>
                        - Sejuk Cimahi Utara<br>
                        - Lingkungan Nyaman<br>
                        - Siap Bangun<br>
                        - Free Design Costum<br>
                        - Dekat Kampus<br>
                        - Dekat Area Pendidikan<br>
                        - Dekat Wisata Lembang<br>
                        - Air Berlimpah<br>
                        - Dekat Kota Cimahi<br>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                        Akses ke Lokasi ?
                    </button>
                </h2>
                <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Dari Jalan Raya Cihanjuang belok Kanan 70 meter menuju Lokasi
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                        Bagaimana Keamanan Di Lokasi ?
                    </button>
                </h2>
                <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Keamanaan ada Pos Jaga 24 Jam & One Gate System
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br><br><br>
@endsection
