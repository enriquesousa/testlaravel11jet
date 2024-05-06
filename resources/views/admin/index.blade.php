@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        {{-- Ayuda Vertical Navigation --}}
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">{{ __('About this application') }}</h4>
                <p class="card-title-desc">
                    {{ __('You can click on any of the following tabs to see the information for each of them.') }}
                </p>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#inicio" role="tab" aria-selected="true">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Inicio</span>    
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#social" role="tab" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Redes Sociales</span>    
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block">Panel 3</span>    
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block">Panel 4</span>    
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">

                    {{-- Inicio --}}
                    <div class="tab-pane active" id="inicio" role="tabpanel">
                        
                        {{-- INIT PANEL --}}
                        <div class="col-12 justify-content-center my-auto">
                            {{-- Card de Información --}}
                            <div class="card">
                                <div class="card-body">
                                    <div class="p-3">

                                        <form class="form-horizontal mt-3">
                                            {{-- Imagen del Proyecto y Titulo --}}
                                            <div class="user-profile text-center mt-3">
                                                <div class="">
                                                    <img src="{{ asset('logo/web_dev_image.png') }}" alt="" width="250px">
                                                </div>

                                                <div class="mt-3">
                                                    {{-- <h4 class="font-size-16 mb-1"></h4> --}}
                                                    <h1 class="display-6 mb-0">TJ Web Plantilla</h1>
                                                </div>
                                            </div>

                                            {{-- si el usuario ya ha iniciado sesión --}}
                                            @if (Auth::check())
                                                <div class="form-group mt-4 mb-0 row">
                                                    <div class="col-12 text-center">
                                                        <p class="text-white-50">
                                                            El usuario: {{ Auth::user()->name }}, ya ha iniciado sesión
                                                        </p>

                                                        <span class="text-muted">
                                                            <i class="ri-record-circle-line align-middle font-size-14 text-success">
                                                            </i>
                                                            {{-- En Linea --}}
                                                            {{ __('Online') }}
                                                        </span>
                                                        <br>
                                                        <br>
                                                        
                                                        <a href="{{ route('admin.view.profile') }}" 
                                                            class="btn btn-success">
                                                            {{-- Ir a Mi Perfil --}}
                                                            {{ __('Go to my profile') }}
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        </form>

                                        <br>
                                        <br>

                                        {{-- logo --}}
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12 text-center">
                                                    <img src="{{ asset('logo/TJWeblogo.png') }}" alt="" width="90px">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Footer: Version de Laravel y PHP --}}
                                        <div class="form-group row mt-1">
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
                                                    {{ formatFecha1($mytime) }} {{ $mytime->format('h:i A') }}
                                                </small>

                                            </div>
                                        </div>

                                        {{-- Footer del Logo --}}
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                {{-- <script>
                                                    document.write(new Date().getFullYear())
                                                </script>© TJ Web. --}}
                                                <p class="text-muted mb-0">
                                                    <span class="text-success fw-bold font-size-12 me-2">
                                                        <i class="ri-calendar-2-line"></i>
                                                        <script>
                                                            document.write(new Date().getFullYear())
                                                        </script>
                                                    </span>
                                                    <span class="font-size-12 me-2">© TJ Web.</span>
                                                </p>
                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                {{-- <div class="text-center d-none d-sm-block">
                                                    Creado con <i class="mdi mdi-heart text-danger"></i> por TJ Web
                                                </div> --}}
                                                <div class="text-center font-size-12 me-2">
                                                    Creado con <i class="mdi mdi-heart text-danger"></i> por TJ Web
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>      

                    </div>

                    {{-- Profile --}}
                    <div class="tab-pane" id="social" role="tabpanel">

                        <p>¿Qué es el inicio de sesión social? El inicio de sesión social es un inicio de sesión único para los usuarios finales. Al utilizar la información de inicio de sesión existente de un proveedor de redes sociales como Facebook, GitHub o Google, el usuario puede iniciar sesión en un sitio web de terceros en lugar de crear una nueva cuenta específicamente para ese sitio web.</p>
                        <p>Al permitir a los usuarios registrarse y verificarse con un simple clic a través de su perfil de redes sociales existente, se elimina la necesidad de largos formularios de registro y recuperación de contraseñas. De hecho, el 75% de los jóvenes entre 18 y 25 años prefieren el inicio de sesión social.</p>
                        <p>El inicio de sesión social es más rápido y conveniente y elimina problemas como la fricción al iniciar sesión y la fatiga de las contraseñas. No es necesario confirmar correo electrónico ni cambiar o asignar contraseñas desde esta plataforma, ya que todo eso se hace desde el proveedor de redes sociales.</p>
                        <p>A continuación, te puedes registrar con tu red social favorita.</p>
                        
                    </div>

                    {{-- Messages --}}
                    <div class="tab-pane" id="messages" role="tabpanel">
                        <p class="mb-0">
                            Etsy mixtape wayfarers, ethical wes anderson tofu before they
                            sold out mcsweeney's organic lomo retro fanny pack lo-fi
                            farm-to-table readymade. Messenger bag gentrify pitchfork
                            tattooed craft beer, iphone skateboard locavore carles etsy
                            salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                            Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh
                            mi whatever gluten yr.
                        </p>
                    </div>

                    {{-- Settings --}}
                    <div class="tab-pane" id="settings" role="tabpanel">
                        <p class="mb-0">
                            Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                            art party before they sold out master cleanse gluten-free squid
                            scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                            art party locavore wolf cliche high life echo park Austin. Cred
                            vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                            farm-to-table VHS.
                        </p>
                    </div>

                </div>

            </div>
        </div>
       


        <div class="row">

            

        </div>

    </div>
</div>

@endsection