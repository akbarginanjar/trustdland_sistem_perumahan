@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header">Edit Bangunan</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('bangunan.update', $bangunan->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="nama_project" class="col-md-4 col-form-label text-md-right">Pilih
                                    Konsumen</label>

                                <div class="col-md-6">
                                    <select name="id_konsumen"
                                        class="form-select @error('id_konsumen') is-invalid @enderror">
                                        <option value="">Pilih Konsumen</option>
                                        @foreach ($konsumen as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $bangunan->id_konsumen == $item->id ? 'selected' : '' }}>
                                                {{ $item->user->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('id_konsumen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="id_project" class="col-md-4 col-form-label text-md-right">Pilih Project</label>

                                <div class="col-md-6">
                                    <select name="id_project" id="id_project" class="form-select">
                                        <option value="">Pilih Project</option>
                                        @foreach ($project as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $bangunan->id_project == $item->id ? 'selected' : '' }}>
                                                {{ $item->nama_project }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @error('id_project')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lat" class="col-md-4 col-form-label text-md-right">Pilih Siteplan</label>

                                <div class="col-md-6">
                                    <select name="id_siteplan" id="id_siteplan" class="form-select">
                                        <option value="">Pilih Siteplan</option>
                                        <option value="{{ $bangunan->id_siteplan }}" selected>
                                            {{ $bangunan->siteplan->kode }}</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="long" class="col-md-4 col-form-label text-md-right">Tanggal
                                    Pembelian</label>

                                <div class="col-md-6">
                                    <input id="tgl_pembelian" type="date"
                                        class="form-control @error('tgl_pembelian') is-invalid @enderror"
                                        name="tgl_pembelian" value="{{ $bangunan->tgl_pembelian }}"
                                        autocomplete="tgl_pembelian" autofocus>

                                    @error('tgl_pembelian')
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#id_project').on('change', function() {
            const projectId = $(this).val();
            const taskSelect = $('#id_siteplan');
            const taskError = $('#task-error');

            taskSelect.html('<option value="">Pilih Siteplan</option>'); // Reset options
            taskError.hide(); // Hide error

            if (projectId) {
                $.ajax({
                    url: `/admin/pilih-siteplan/${projectId}`,
                    type: 'GET',
                    success: function(tasks) {
                        tasks.forEach(task => {
                            taskSelect.append(
                                `<option value="${task.id}">${task.kode} - ${task.luas}</option>`
                            );
                        });
                    },
                    error: function() {
                        taskError.show();
                        taskError.find('strong').text('Gagal mengambil data task.');
                    }
                });
            }
        });
    </script>
@endsection
