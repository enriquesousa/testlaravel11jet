<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Regístrate | testlaravel11jet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Basic Blog Demo" name="Basic Blog Demo" />

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

                    {{-- Logo --}}
                    <div class="text-center mt-2">
                        <div class="mb-3">
                            <a href="{{ route('home') }}" class="auth-logo">
                                <img src="{{ asset('logo/TJWeblogo.png') }}" alt="" width="150px">
                            </a>
                        </div>
                    </div>

                    {{-- Titulo --}}
                    <h4 class="text-muted text-center font-size-18">
                        {!! __('<b>Register Form</b>') !!}
                    </h4>

                    <div class="p-3">

                        <form class="form-horizontal mt-1" method="POST" action="{{ route('register') }}">
                            @csrf

                            {{-- Nombre 'name' --}}
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @error('name') is-invalid @enderror" id="name"
                                        type="text" name="name" required="" placeholder="{{ __('Name') }}">
                                    @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Nombre de Usuario Corto 'username' --}}
                            {{-- <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @error('username') is-invalid @enderror" id="username"
                                        type="text" name="username" required=""
                                        placeholder="{{ __('Username') }}">
                                    @error('username')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- Teléfono 'phone' --}}
                            {{-- <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @error('phone') is-invalid @enderror" id="phone"
                                        type="number" name="phone" 
                                        placeholder="{{ __('Telephone') }}">
                                    @error('phone')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div> --}}

                            {{-- Correo electrónico 'email' --}}
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @error('email') is-invalid @enderror" id="email"
                                        type="email" name="email" required="" placeholder="{{ __('Email') }}">
                                    @error('email')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Contraseña 'password' --}}
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @error('password') is-invalid @enderror" id="password"
                                        type="password" name="password" required=""
                                        placeholder="{{ __('Register Password') }}">
                                    @error('password')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            {{-- Confirmar Contraseña 'password_confirmation' --}}
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input class="form-control @error('password_confirmation') is-invalid @enderror"
                                        id="password_confirmation" type="password" name="password_confirmation"
                                        required="" placeholder="{{ __('Confirm Password') }}">
                                    @error('password_confirmation')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>



                            {{-- términos y condiciones --}}
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="form-label ms-1 fw-normal" for="customCheck1">
                                            {{ __('I accept the ') }}
                                            <a href="#" class="text-primary">
                                                {{ __('Terms and Conditions') }}
                                            </a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            {{-- Botón Registrarse --}}
                            <div class="form-group text-center row mt-3 pt-1">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>

                            {{-- ¿Ya tienes cuenta? --}}
                            <div class="form-group mt-2 mb-0 row">
                                <div class="col-12 mt-3 text-center">
                                    <a href="{{ route('login') }}" class="text-muted">
                                        {{ __('Already have an account?') }}
                                    </a>
                                </div>
                            </div>

                            <div>
                                <hr>
                            </div>

                            {{-- Inicia sesión con Redes Sociales --}}
                            <div class="text-center">
                                {{-- <h5 class="mt-3 text-muted">{{ __('Or Register with Yor Favorite Social Account') }}</h5> --}}
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
                                        {{-- <a href="/auth/google/register/redirect"
                                            class="social-list-item border-danger text-danger">
                                            <i class="mdi mdi-google"></i>
                                        </a> --}}
                                        <a href="javascript: void(0);" class="social-list-item border-muted text-muted disabled">
                                            <i class="mdi mdi-google"></i>
                                        </a>
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
                                        {{-- <a href="/auth/github/register/redirect"
                                            class="social-list-item border-primary text-primary">
                                            <i class="mdi mdi-github"></i>
                                        </a> --}}
                                        <a href="javascript: void(0);"
                                            class="social-list-item border-muted text-muted disabled">
                                            <i class="mdi mdi-github"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            {{-- Botón Registrarse con Redes Sociales --}}
                            <div class="mt-2 text-center">
                                <button type="button" class="btn btn-secondary waves-effect waves-light" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#myModal">
                                    {{ __('Or Register with Yor Favorite Social Account') }}
                                </button>
                            </div>
                            {{-- Ventana Modal --}}
                            <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">{{ __('Social Media Accounts') }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <h5>{{ __('Information') }}</h5>
                                            
                                            <p>¿Qué es el inicio de sesión social? El inicio de sesión social es un inicio de sesión único para los usuarios finales. Al utilizar la información de inicio de sesión existente de un proveedor de redes sociales como Facebook, GitHub o Google, el usuario puede iniciar sesión en un sitio web de terceros en lugar de crear una nueva cuenta específicamente para ese sitio web.</p>
                                            <p>Al permitir a los usuarios registrarse y verificarse con un simple clic a través de su perfil de redes sociales existente, se elimina la necesidad de largos formularios de registro y recuperación de contraseñas. De hecho, el 75% de los jóvenes entre 18 y 25 años prefieren el inicio de sesión social.</p>
                                            <p>El inicio de sesión social es más rápido y conveniente y elimina problemas como la fricción al iniciar sesión y la fatiga de las contraseñas. No es necesario confirmar correo electrónico ni cambiar o asignar contraseñas desde esta plataforma, ya que todo eso se hace desde el proveedor de redes sociales.</p>
                                            <p>A continuación, te puedes registrar con tu red social favorita.</p>
                                            
                                            {{-- Inicia sesión con Redes Sociales --}}
                                            <div class="text-center">
                                                {{-- <h5 class="mt-3 text-muted">{{ __('Or Register with Yor Favorite Social Account') }}</h5> --}}
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
                                                        <a href="/auth/google/register/redirect"
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
                                                        <a href="/auth/github/register/redirect"
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

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light waves-effect" data-bs-dismiss="modal">{{ __('Close') }}</button>
                                            {{-- <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button> --}}
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>


                        </form>
                        <!-- end form -->

                        <div>
                            <hr>
                        </div>

                        {{-- Botón Regresar al inicio --}}
                        <div class="text-center">
                            <a href="{{ route('home') }}" class="ms-2 text-sm text-gray-600">
                                {{ __('Back to Home') }}
                            </a>
                        </div>

                    </div>
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

</body>

</html>
