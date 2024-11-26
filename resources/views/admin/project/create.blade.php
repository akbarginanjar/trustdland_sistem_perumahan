@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header">Tambah Project</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('project.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nama_project" class="col-md-4 col-form-label text-md-right">Nama Project</label>

                                <div class="col-md-6">
                                    <input id="nama_project" type="text"
                                        class="form-control @error('nama_project') is-invalid @enderror" name="nama_project"
                                        value="{{ old('nama_project') }}" autocomplete="nama_project" autofocus>

                                    @error('nama_project')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lokasi" class="col-md-4 col-form-label text-md-right">Lokasi</label>

                                <div class="col-md-6">
                                    <input id="lokasi" type="text"
                                        class="form-control @error('lokasi') is-invalid @enderror" name="lokasi"
                                        value="{{ old('lokasi') }}" autocomplete="lokasi" autofocus>

                                    @error('lokasi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lat" class="col-md-4 col-form-label text-md-right">Latitude</label>

                                <div class="col-md-6">
                                    <input id="lat" type="text"
                                        class="form-control @error('lat') is-invalid @enderror" name="lat"
                                        value="{{ old('lat') }}" autocomplete="lat" autofocus>

                                    @error('lat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="long" class="col-md-4 col-form-label text-md-right">Longitude</label>

                                <div class="col-md-6">
                                    <input id="long" type="text"
                                        class="form-control @error('long') is-invalid @enderror" name="long"
                                        value="{{ old('long') }}" autocomplete="long" autofocus>

                                    @error('long')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height: 300px;"></div>
@endsection
