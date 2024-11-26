@extends('layouts.member')

@section('content')
    @php
        use App\Models\Mobil;
        $countMobil = Mobil::count();
    @endphp
    <section class="ftco-section bg-light">
        <div class="container">
            <h3><b>Pembayaran Sewa</b></h3>
            <form action="/member/mobil/{{ $mobil->slug }}/prosesSewa" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card border-0 ftco-animate mt-3"
                    style="box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.048); border-radius: 15px;">
                    <div class="card-body">
                        @if ($penyewa == '[]')
                            <div class="text-dark mb-2"><b> Lengkapi data pribadi</b></div>
                            <div class="form-group">
                                <label>Nomor Telepon/Whatsapp</label>
                                <input type="number" required class="form-control form-control-sm" name="no_telepon">
                                @error('no_telepon')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat Lengkap</label>
                                <textarea name="alamat" required class="form-control" rows="3"></textarea>
                                @error('alamat')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                            <hr>
                        @endif
                        <div>Lanjutkan upload bukti bayar untuk melakukan sewa mobil</div>
                        <div class="card ftco-animate mt-3"
                            style="box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.099); border-radius: 15px; border-right: 5px solid rgb(230, 25, 25);">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="{{ $mobil->gambar() }}" style="width: 200px;" alt="">
                                    </div>
                                    <div class="col-sm">
                                        <div style="font-size: 13px;">Merk Mobil</div>
                                        <h5><b>{{ $mobil->merk }}</b></h5>
                                        <div style="font-size: 13px;">Jenis</div>
                                        <b class="">{{ $mobil->jenis }}</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="alert alert-primary">
                            Untuk melanjutkan sewa silahkan melakukan pembayaran terlebih dahulu ke rekening BRI dibawah
                            ini.
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2e/BRI_2020.svg"
                                                    style="width: 100%;" alt="">
                                            </div>
                                            <div class="col">
                                                <b class="text-dark">Rental Moobil</b><br>
                                                068892635748192
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img id="preview" src="" alt="" class="rounded" style="width: 300px;" />
                                <div style="font-size: 13px;" class="mb-1 mt-2">Upload Bukti Bayar</div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="bukti_bayar" required
                                            onchange="tampilkanPreview(this,'preview')" accept="image/*"
                                            autocomplete="bukti_bayar" class="custom-file-input" id="inputGroupFile04">
                                        <label class="custom-file-label" for="inputGroupFile04">Upload disini</label>
                                    </div>
                                </div>
                                <div style="font-size: 13px;" class="mb-1 mt-2">Tanggal Mulai Sewa</div>
                                <input type="date" name="tgl_sewa" id="inputDate" required class="form-control"
                                    onchange="hitungTanggal()">
                                <input type="number" id="inputDays" min="1" value="{{ $lamaSewa }}" hidden>
                                <h5 id="result" class="mt-4"></h5>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-right mt-1">
                                    <div style="font-size: 13px;" class="text-right">Harga Sewa</div>
                                    <h5 class="text-right"><b>Rp.
                                            {{ number_format($mobil->harga_sewa, 0, ',', '.') }}/Hari</b>
                                    </h5>
                                    <div style="font-size: 13px;" class="text-right">Lama Sewa</div>
                                    <h5 class="text-right"><b>{{ $lamaSewa }} Hari</b>
                                    </h5>
                                    <div style="font-size: 13px;" class="text-right">Total Bayar</div>
                                    <h2 class="text-right text-primary"><b>Rp.
                                            {{ number_format($totalBayar, 0, ',', '.') }}</b>
                                    </h2>
                                </div>

                            </div>
                        </div>
                        <input type="text" hidden name="tgl_pengembalian" id="tgl_pengembalian">
                        <input name="lama_sewa" value="{{ $lamaSewa }}" hidden>
                        <input name="total_bayar" value="{{ $totalBayar }}" hidden>
                        <button type="submit" class="btn btn-primary btn-block mt-3">Sewa</button>
                    </div>
                </div>
            </form>

    </section>

    <script>
        function hitungTanggal() {
            // Ambil nilai dari input tanggal
            var inputDate = document.getElementById("inputDate").value;

            // Ambil nilai dari input jumlah hari
            var inputDays = parseInt(document.getElementById("inputDays").value, 10);

            // Pastikan input tanggal tidak kosong
            if (inputDate === "") {
                document.getElementById("result").innerHTML = "Silakan masukkan tanggal terlebih dahulu.";
                return; // Keluar dari fungsi jika input tanggal kosong
            }

            // Pastikan input jumlah hari valid (harus lebih besar dari 0)
            if (isNaN(inputDays) || inputDays <= 0) {
                document.getElementById("result").innerHTML = "Jumlah hari harus diisi dengan angka positif.";
                return; // Keluar dari fungsi jika input jumlah hari tidak valid
            }

            // Buat objek Date dari input tanggal
            var tanggal = new Date(inputDate);

            // Tambah jumlah hari yang diinputkan
            tanggal.setDate(tanggal.getDate() + inputDays);

            // Format tanggal untuk ditampilkan
            var dd = String(tanggal.getDate()).padStart(2, '0');
            var mm = String(tanggal.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = tanggal.getFullYear();

            // Tampilkan hasilnya
            var hasil = dd + '-' + mm + '-' + yyyy;
            document.getElementById("result").innerHTML = 'Tanggal Pengembalian : ' + hasil;
            document.getElementById("tgl_pengembalian").value = hasil;
        }

        // Panggil fungsi hitungTanggal() saat halaman pertama kali dimuat
        hitungTanggal();



        function tampilkanPreview(gambar, idpreview) {
            var gb = gambar.files;
            for (var i = 0; i < gb.length; i++) {
                var gbPreview = gb[i];
                var imageType = /image.*/;
                var preview = document.getElementById(idpreview);
                var reader = new FileReader();

                if (gbPreview.type.match(imageType)) {
                    preview.file = gbPreview;
                    reader.onload = (function(element) {
                        return function(e) {
                            element.src = e.target.result;
                        };
                    })(preview);
                    reader.readAsDataURL(gbPreview);
                } else {
                    alert("file yang anda upload tidak sesuai. Khusus mengunakan image.");
                }

            }
        }
    </script>
@endsection
