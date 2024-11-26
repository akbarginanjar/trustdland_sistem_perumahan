<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Admin">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo-trustdland.webp') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/admin/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/admin/dist/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <style>
        body {
            background-color: rgb(41, 124, 74);
        }
    </style>
    <div class="container" style="margin-top: 100px; margin-bottom: 200px;">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card border-0 shadow bg-white" style="border-radius: 15px;">
                    <div class="card-body">
                        <center>
                            <a href="/">
                                <img src="{{ asset('images/logo-trustdland.webp') }}" class="mb-2" width="90px;"
                                    alt="">
                            </a>
                        </center>
                        <h1><b>Login Admin</b></h1>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email"
                                    class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="input-group">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    <button class="btn btn-outline-primary" type="button" id="togglePassword">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" style="height: 50px;" class="btn btn-primary rounded w-100">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('assets/admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/dist/js/app-style-switcher.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assets/admin/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets/admin/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets/admin/dist/js/custom.js') }}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{ asset('assets/admin/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}">
    </script>
    <script src="{{ asset('assets/admin/dist/js/pages/dashboards/dashboard1.js') }}"></script>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const passwordFieldType = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', passwordFieldType);

            // Ganti ikon sesuai status
            this.innerHTML = passwordFieldType === 'password' ? '<i class="fas fa-eye"></i>' :
                '<i class="fas fa-eye-slash"></i>';
        });
    </script>

</body>

</html>
