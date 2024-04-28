@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
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
    </div>
</div>

@endsection