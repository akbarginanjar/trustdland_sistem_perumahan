@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header">Edit Konsumen</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('konsumen.update', $konsumen->id) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id_user" value="{{ $konsumen->user->id }}" id="">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nama Lengkap</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ $konsumen->user->name }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_telepon" class="col-md-4 col-form-label text-md-right">No
                                    Telepon/Whatsapp</label>
                                <div class="col-md-6">
                                    <input id="no_telepon" type="text"
                                        class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon"
                                        value="{{ $konsumen->no_telepon }}" required autocomplete="no_telepon" autofocus>
                                    @error('no_telepon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat Lengkap</label>
                                <div class="col-md-6">
                                    <input id="alamat" type="text"
                                        class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                        value="{{ $konsumen->alamat }}" required autocomplete="alamat" autofocus>
                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $konsumen->user->email }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password Lama -->
                            <div class="form-group row">
                                <label for="old_password" class="col-md-4 col-form-label text-md-right">Password
                                    Lama</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input id="old_password" type="password"
                                            class="form-control @error('old_password') is-invalid @enderror"
                                            name="old_password" required autocomplete="old-password">
                                        <button class="btn btn-outline-secondary" type="button" id="toggleOldPassword">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Password Baru -->
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password Baru</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">
                                        <button class="btn btn-outline-secondary" type="button" id="toggleNewPassword">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Konfirmasi Password -->
                            <div class="form-group row">
                                <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Konfirmasi
                                    Password Baru</label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input id="password_confirmation" type="password"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            name="password_confirmation" required autocomplete="new-password">
                                        <button class="btn btn-outline-secondary" type="button"
                                            id="toggleConfirmPassword">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                    @error('password_confirmation')
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
                                    <a href="{{ route('konsumen.index') }}" class="btn btn-secondary">
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
        // Toggle password visibility
        document.getElementById('toggleOldPassword').addEventListener('click', function() {
            let oldPasswordInput = document.getElementById('old_password');
            let icon = this.querySelector('i');
            if (oldPasswordInput.type === 'password') {
                oldPasswordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                oldPasswordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });

        document.getElementById('toggleNewPassword').addEventListener('click', function() {
            let newPasswordInput = document.getElementById('password');
            let icon = this.querySelector('i');
            if (newPasswordInput.type === 'password') {
                newPasswordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                newPasswordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });

        document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
            let confirmPasswordInput = document.getElementById('password_confirmation');
            let icon = this.querySelector('i');
            if (confirmPasswordInput.type === 'password') {
                confirmPasswordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                confirmPasswordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
@endsection
