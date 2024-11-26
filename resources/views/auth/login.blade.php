@extends('layouts.member')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="https://dev.microsites.99iddev.net/app/uploads/sites/771/2023/04/Penampakan-rumah-modern-di-Parkland-Podomoro.jpg"
            alt="" data-aos="fade-in">

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card border-0 shadow bg-white" style="border-radius: 15px;">
                        <div class="p-4">
                            <h4 class="text-dark mb-2"><b>Silahkan Login</b></h4>
                            <div style="height: 5px; width: 60px; background: rgb(48, 137, 97); border-radius: 5px;"></div>
                            <br>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="email"
                                        class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" placeholder="" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                                    <div class="input-group">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required placeholder="" autocomplete="current-password">

                                        <button type="button" class="btn btn-outline-success" id="togglePassword">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mt-4 mb-4">
                                    <div class="">
                                        <button type="submit" style="height: 50px;" class="btn btn-success rounded w-100">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Hero Section -->

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');

        togglePassword.addEventListener('click', function(e) {
            // Toggle the type attribute of the password field
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;

            // Toggle the eye icon
            this.querySelector('i').classList.toggle('fa-eye');
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    </script>
@endsection
