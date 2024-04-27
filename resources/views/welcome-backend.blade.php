<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>{{ __('Welcome Page') }} | {{ config('app.name', 'Laravel') }}</title>
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

</head>

<body class="auth-body-bg">

    <div class="bg-overlay"></div>

    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">

                <div class="card-body">

                    <div class="p-3">

                        <form class="form-horizontal mt-3">

                            {{-- avatar --}}
                            {{-- <div class="text-center mb-4">
                                    <img src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" class="rounded-circle avatar-lg img-thumbnail" alt="thumbnail">
                                </div> --}}

                            <div class="user-profile text-center mt-3">

                                {{-- Imagen que representa este proyecto --}}
                                <div class="">
                                    {{-- <img src="{{ asset('logo/web_dev_image.png') }}" class="rounded-circle avatar-lg img-thumbnail" alt="thumbnail"> --}}
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('logo/web_dev_image.png') }}" class="rounded-circle" alt="thumbnail" width="150px">
                                    </a>
                                </div>

                                <div class="mt-3">
                                    <h5 class="mb-1">
                                        {{ __('Full Stack Web Developer Portfolio') }}
                                    </h5>
                                </div>

                                {{-- <div class="text-center">
                                    <a href="{{ url('https://gorgeous-puppy-eb536f.netlify.app/laravel/realestate/s03-multiauthbreeze/') }}" target="_blank">Ayuda</a>
                                </div> --}}
                            </div>

                            {{-- si el usuario ya ha iniciado sesión --}}
                            @if (Auth::check())
                                <div class="form-group mt-4 mb-0 row">
                                    <div class="col-12 text-center">

                                        <p class="text-white-50">
                                            {{ __('The user') }}: {{ Auth::user()->name }}, {{ __('is already logged in!') }}
                                        </p>

                                        <span class="text-muted">
                                            <i class="ri-record-circle-line align-middle font-size-14 text-success"></i>
                                            {{ __('You are logged in!') }}
                                        </span>
                                        <br>
                                        <br>

                                        <a href="{{ route('dashboard') }}" 
                                            class="btn btn-success">
                                            {{ __('Continue to dashboard') }}
                                        </a>
                                    </div>
                                </div>
                            @endif

                            {{-- Botón Login --}}
                            {{-- La ruta del login esta definida en el archivo app/Providers/RouteServiceProvider.php HOME --}}
                            <div class="form-group text-center row mt-3">
                                <div class="col-12">
                                    @if (Auth::check())
                                    @else
                                        <a href="{{ route('login') }}"
                                            class="btn btn-info w-100 waves-effect waves-light">
                                            {{ __('Login') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            {{-- Botón Registrarse --}}
                            <div class="form-group text-center row mt-3">
                                <div class="col-12">
                                    @if (Auth::check())
                                    @else
                                        <a href="{{ route('register') }}"
                                            class="btn btn-info w-100 waves-effect waves-light">
                                            {{ __('Register') }}
                                        </a>
                                    @endif
                                </div>
                            </div>


                        </form>

                        <br>

                        <div id="accordion" class="custom-accordion">

                            <div class="card mb-1 shadow-none">
                                <a href="#collapseOne" class="text-dark collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                    <div class="card-header btn btn-warning w-100 waves-effect waves-light" id="headingOne">
                                        <h6 class="text-center mb-0">
                                            {{ __('Login Demo') }}
                                            <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                        </h6>
                                    </div>
                                </a>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion" style="">
                                    <div class="card-body">

                                        {!! __('To enter the system it is necessary to log in, to use the system in <strong>Demo</strong> mode you can log in with the following credentials: <br> <br> <strong>User: </strong>demo<br> <strong>Password: </strong>demo') !!}
                                        
                                    </div>
                                </div>
                            </div>

                        </div>

                            


                        <br>


                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <img src="{{ asset('logo/TJWeblogo.png') }}" alt="" width="100px">
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-sm-12 text-center">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>© TJ Web.
                                </div>
                                <br>
                                <div class="col-sm-12">
                                    <div class="text-center d-none d-sm-block">
                                        {{ __('Made with') }} <i class="mdi mdi-heart text-danger"></i> {{ __('by') }} TJ Web.
                                    </div>
                                </div>

                            </div>
                        </div>




                        {{-- Footer: Version de Laravel y PHP --}}
                        <div class="form-group row mt-4">
                            <div class="text-center">
                                <small class="text-muted">
                                    Laravel v{{ Illuminate\Foundation\Application::VERSION }}
                                    (PHP v{{ PHP_VERSION }})
                                </small>
                                <br>
                                <small class="text-muted">
                                    {{-- {!! htmlspecialchars_decode(date('j<\s\up>S</\s\up> F Y', strtotime(now()))) !!}  --}}
                                    @php
                                        $mytime = Carbon\Carbon::now();
                                        // echo $mytime->toDateTimeString();
                                    @endphp
                                    {{-- {{ $mytime->format('d-M-Y H:i') }}  --}}
                                    {{ formatFecha1($mytime) }} {{ $mytime->format('H:i') }}
                                </small>

                            </div>
                        </div>


                    </div>

                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
    </div>

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
                "positionClass": "toast-top-center",
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
