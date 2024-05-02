<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Laravel 11</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />

    {{-- {{ asset('backend/') }} --}}

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <!-- toastr toster-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    {{-- CSS en vista blade, lo voy a usar para deshabilitar los a tag de social login que no voy a usar --}}
    <style type="text/css">
        a.disabled {
            /* Make the disabled links grayish*/
            color: gray;
            /* And disable the pointer events */
            pointer-events: none;
        }
    </style>

</head>

<body class="auth-body-bg">
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">

                    <div class="text-center mt-4">
                        <div class="mb-3">
                            <a href="{{ route('home') }}" class="auth-logo">
                                <img src="{{ asset('logo/TJWeblogo.png') }}" alt="" width="150px">
                            </a>
                        </div>
                    </div>

                    {{-- <h4 class="text-muted text-center font-size-18"><b>{{ __('Login') }}</b></h4> --}}
                    <h5 class="mt-1 text-muted text-center">{{ __('Login') }}</h5>

                    <div class="p-3">

                        <form class="form-horizontal mt-1" method="POST" action="{{ route('login') }}">
                            @csrf

                            {{-- <input type="hidden" name="username" id="" value="username_test">
                            <input type="hidden" name="phone" id="" value="phone_test"> --}}

                            {{-- Nombre de Usuario Corto 'username' --}}
                            {{-- <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @error('username') is-invalid @enderror" id="username"
                                        type="text" name="username" required=""
                                        placeholder="Nombre de Usuario Corto">
                                    @error('username')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- Correo electrónico 'email' --}}
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @error('email') is-invalid @enderror" id="email"
                                        type="text" name="email" required=""
                                        placeholder="{{ __('Email/Username/Phone') }}">
                                    @error('email')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Ingresar loginName: 'Email / Username / Phone' --}}
                            {{-- <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @error('loginName') is-invalid @enderror" id="loginName"
                                        type="text" name="loginName" required="" placeholder="{{ __('Email/Username/Phone') }}">
                                    @error('loginName')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div> --}}


                            {{-- Contraseña 'password' --}}
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @error('password') is-invalid @enderror" id="password"
                                        type="password" name="password" required=""
                                        placeholder="{{ __('Password') }}">
                                    @error('password')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>


                            {{-- Recuérdame --}}
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input id="remember_me" type="checkbox" name="remember"
                                            class="custom-control-input">
                                        <label class="form-label ms-1"
                                            for="customCheck1">{{ __('Remember me') }}</label>
                                    </div>
                                </div>
                            </div>

                            {{-- Iniciar Sesión --}}
                            <div class="form-group mb-3 text-center row mt-3 pt-1">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>


                            {{-- ¿Olvidaste tu contraseña? y Crear una cuenta --}}
                            <div class="form-group mb-0 row mt-2">
                                <div class="col-sm-7 mt-3">
                                    <a href="{{ route('password.request') }}" class="text-muted">
                                        <i class="mdi mdi-lock"></i>
                                        {{ __('Forgot your password?') }}
                                    </a>
                                </div>
                                <div class="col-sm-5 mt-3">
                                    <a href="{{ route('register') }}" class="text-muted">
                                        <i class="mdi mdi-account-circle"></i>
                                        {{ __('Create an account') }}
                                    </a>
                                </div>
                            </div>

                            <div>
                                <hr>
                            </div>

                            {{-- Inicia sesión con Redes Sociales --}}
                            <div class="text-center">
                                <h5 class="mt-3 text-muted">{{ __('Or Sign in with') }}</h5>
                                <ul class="social-list list-inline mt-3 mb-0">

                                    {{-- Facebook --}}
                                    <li class="list-inline-item">
                                        {{-- <a href="#" class="social-list-item border-primary text-primary">
                                            <i class="mdi mdi-facebook"></i>
                                        </a> --}}
                                        <a href="#" class="social-list-item border-muted text-muted disabled">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>

                                    {{-- Google --}}
                                    <li class="list-inline-item">
                                        <a href="/auth/google/redirect"
                                            class="social-list-item border-danger text-danger">
                                            <i class="mdi mdi-google"></i>
                                        </a>
                                        {{-- <a href="javascript: void(0);" class="social-list-item border-muted text-muted disabled">
                                            <i class="mdi mdi-google"></i>
                                        </a> --}}
                                    </li>

                                    {{-- Twitter --}}
                                    <li class="list-inline-item">
                                        {{-- <a href="javascript: void(0);" class="social-list-item border-info text-info">
                                            <i class="mdi mdi-twitter"></i>
                                        </a> --}}
                                        <a href="javascript: void(0);"
                                            class="social-list-item border-muted text-muted disabled">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>

                                    {{-- GitHub --}}
                                    <li class="list-inline-item">
                                        <a href="/auth/github/redirect" 
                                            class="social-list-item border-primary text-primary">
                                            <i class="mdi mdi-github"></i>
                                        </a>
                                        {{-- <a href="javascript: void(0);"
                                            class="social-list-item border-muted text-muted disabled">
                                            <i class="mdi mdi-github"></i>
                                        </a> --}}
                                    </li>

                                </ul>
                            </div>

                        </form>
                    </div>
                    <!-- end -->
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    {{-- Toastr Code toster --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                // "positionClass": "toast-top-center",
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ", "Información!");
                    break;
                case 'success':
                    toastr.success(" {{ Session::get('message') }} ", "Éxito!");
                    break;
                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ", "Advertencia!");
                    break;
                case 'error':
                    toastr.error(" {{ Session::get('message') }} ", "Error!");
                    break;
            }
        @endif
    </script>

</body>

</html>
