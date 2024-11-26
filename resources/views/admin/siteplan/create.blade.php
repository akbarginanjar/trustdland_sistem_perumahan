@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header">Tambah Siteplan</div>

                    <div class="card-body">
                        <form method="POST" action="/admin/project/{{ $project->id }}/siteplan/store">
                            @csrf

                            <div class="form-group row">
                                <label for="kode" class="col-md-4 col-form-label text-md-right">Kode</label>

                                <div class="col-md-6">
                                    <input id="kode" type="text"
                                        class="form-control @error('kode') is-invalid @enderror" name="kode"
                                        value="{{ old('kode') }}" autocomplete="kode" autofocus>

                                    @error('kode')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="luas" class="col-md-4 col-form-label text-md-right">Luas</label>

                                <div class="col-md-6">
                                    <input id="luas" type="text"
                                        class="form-control @error('luas') is-invalid @enderror" name="luas"
                                        value="{{ old('luas') }}" autocomplete="luas" autofocus>

                                    @error('luas')
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
    <div style="height: 500px;"></div>
@endsection
