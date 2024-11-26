<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rental Moobil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/member/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/member/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/member/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/member/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/member/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/member/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/member/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/member/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/member/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/member/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/member/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/member/css/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <style>
        body {
            background-color: whitesmoke;
        }
    </style>
    <div class="container" style="margin-top: 100px; margin-bottom: 200px;">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card border-0 shadow bg-white" style="border-radius: 15px;">
                    <div class="card-body">
                        <center>
                            <a href="/">
                                <img src="{{ asset('images/logo-moobil.png') }}" class="mt-3 mb-3" width="250px;"
                                    alt="">
                            </a>

                        </center>
                        <h4><b>Register</b></h4>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>


                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="email"
                                    class="col-form-label text-md-end">{{ __('Email Address') }}</label>


                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>


                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="password-confirm"
                                    class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>


                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="form-group mt-4 mb-4">
                                <div class="">
                                    <button type="submit" style="height: 50px;"
                                        class="btn btn-primary rounded btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <center>
                                Sudah punya akun? <a href="/login">Login</a>
                            </center>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('assets/member/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/member/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/member/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/member/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/member/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/member/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/member/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/member/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/member/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/member/js/aos.js') }}"></script>
    <script src="{{ asset('assets/member/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/member/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/member/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/member/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('assets/member/js/google-map.js') }}"></script>
    <script src="{{ asset('assets/member/js/main.js') }}"></script>

</body>

</html>
