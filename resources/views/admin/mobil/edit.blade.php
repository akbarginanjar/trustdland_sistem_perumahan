@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header">Edit Mobil</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('mobil.update', $mobil->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <img src="{{ $mobil->gambar() }}" class="img-fluid" alt="">
                                <label for="gambar" class="col-md-4 col-form-label text-md-right">Foto Mobil</label>

                                <div class="col-md-6">
                                    <input id="gambar" type="file"
                                        class="form-control @error('gambar') is-invalid @enderror" name="gambar"
                                        autocomplete="gambar">

                                    @error('gambar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="plat" class="col-md-4 col-form-label text-md-right">Plat Mobil</label>

                                <div class="col-md-6">
                                    <input id="plat" type="text"
                                        class="form-control @error('plat') is-invalid @enderror" name="plat"
                                        value="{{ $mobil->plat }}" required autocomplete="plat" autofocus>

                                    @error('plat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nomor_mobil" class="col-md-4 col-form-label text-md-right">Nomor Mobil </label>

                                <div class="col-md-6">
                                    <input id="nomor_mobil" type="nomor_mobil"
                                        class="form-control @error('nomor_mobil') is-invalid @enderror" name="nomor_mobil"
                                        value="{{ old('nomor_mobil', $mobil->nomor_mobil) }}" required
                                        autocomplete="nomor_mobil">

                                    @error('nomor_mobil')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group row">
                                <label for="merk" class="col-md-4 col-form-label text-md-right">Merk Mobil</label>

                                <div class="col-md-6">
                                    <input id="merk" type="tetxt"
                                        class="form-control @error('merk') is-invalid @enderror" name="merk"
                                        value="{{ $mobil->merk }}" required autocomplete="merk">

                                    @error('merk')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jenis" class="col-md-4 col-form-label text-md-right">Jenis Mobil</label>

                                <div class="col-md-6">
                                    <input id="jenis" type="tetxt"
                                        class="form-control @error('jenis') is-invalid @enderror" name="jenis"
                                        value="{{ $mobil->jenis }}" required autocomplete="jenis">

                                    @error('jenis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="deskripsi" class="col-md-4 col-form-label text-md-right">Deskripsi Mobil</label>

                                <div class="col-md-6">
                                    <input id="deskripsi" type="tetxt"
                                        class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"
                                        value="{{ $mobil->deskripsi }}" required autocomplete="deskripsi">

                                    @error('deskripsi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="harga_sewa" class="col-md-4 col-form-label text-md-right">Harga Sewa
                                    Mobil</label>

                                <div class="col-md-6">
                                    <input id="harga_sewa" type="number" id="harga_sewa"
                                        class="form-control @error('harga_sewa') is-invalid @enderror" name="harga_sewa"
                                        value="{{ $mobil->harga_sewa }}" required autocomplete="harga_sewa">

                                    @error('harga_sewa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                    <a href="{{ route('mobil.index') }}" class="btn btn-secondary">
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
    <script>
        const input = document.getElementById('harga_sewa');
        input.addEventListener('input', () => {
            if (input.value < 0) {
                input.value = 1;
            }
        });
    </script>
@endsection
