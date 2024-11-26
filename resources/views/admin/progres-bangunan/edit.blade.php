@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header">Edit Progres Bangunan</div>

                    <div class="card-body">
                        <form method="POST"
                            action="/admin/bangunan/{{ $idBangunan }}/progres-bangunan/{{ $progresBangunan->id }}/update"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right"></label>
                                <div class="col-md-6">
                                    <img id="image-preview" src="#" alt="Image Preview"
                                        style="display:none; border-radius: 15px; width: 350px;">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Foto</label>

                                <div class="col-md-6">
                                    <input id="image-input" accept="image/*" type="file"
                                        class="form-control @error('foto') is-invalid @enderror" name="foto"
                                        autocomplete="foto">

                                    @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="video" class="col-md-4 col-form-label text-md-right">Link Video</label>
                                <div class="col-md-6">
                                    <input id="video" type="text"
                                        class="form-control @error('video') is-invalid @enderror" name="video"
                                        value="{{ $progresBangunan->video }}" autocomplete="video" autofocus>

                                    @error('video')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tgl_laporan" class="col-md-4 col-form-label text-md-right">Tanggal
                                    Laporan</label>

                                <div class="col-md-6">
                                    <input id="tgl_laporan" type="date"
                                        class="form-control @error('tgl_laporan') is-invalid @enderror" name="tgl_laporan"
                                        value="{{ $progresBangunan->tgl_laporan }}" autocomplete="tgl_laporan" autofocus>

                                    @error('tgl_laporan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="waktu_laporan" class="col-md-4 col-form-label text-md-right">Waktu
                                    Laporan</label>

                                <div class="col-md-6">
                                    <input id="waktu_laporan" type="time"
                                        class="form-control @error('waktu_laporan') is-invalid @enderror"
                                        name="waktu_laporan" value="{{ $progresBangunan->waktu_laporan }}"
                                        autocomplete="waktu_laporan" autofocus>

                                    @error('waktu_laporan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="keterangan" class="col-md-4 col-form-label text-md-right">Keterangan</label>

                                <div class="col-md-6">
                                    <textarea rows="4" id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror"
                                        name="keterangan" autocomplete="keterangan" autofocus>{{ $progresBangunan->keterangan }}</textarea>

                                    @error('keterangan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Simpan Perubahan
                                    </button>
                                    <a href="{{ route('project.index') }}" class="btn btn-secondary">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height: 300px;"></div>
    <script>
        document.getElementById('image-input').addEventListener('change', function(event) {
            const imagePreview = document.getElementById('image-preview');
            const file = event.target.files[0]; // Ambil file yang diunggah

            if (file) {
                const reader = new FileReader(); // Membaca file dengan FileReader

                reader.onload = function(e) {
                    imagePreview.src = e.target.result; // Mengatur src gambar
                    imagePreview.style.display = 'block'; // Menampilkan gambar
                };

                reader.readAsDataURL(file); // Membaca file sebagai URL
            } else {
                imagePreview.src = '#'; // Reset jika tidak ada file
                imagePreview.style.display = 'none'; // Sembunyikan gambar
            }
        });
    </script>
@endsection
