@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">

                {{-- Columna 1 --}}
                <div class="col-lg-4">
                    <div class="card">
                        <center>

                            {{-- Imagen de Admin --}}
                            {{-- <img class="rounded-circle avatar-xl mt-4" 
                            src="{{ (!empty($adminData->profile_photo_path) ? url($adminData->profile_photo_path) : url('upload/no_image.jpg')) }}" data-holder-rendered="true"> --}}
                            <br>
                            <img src="{{ !empty($adminData->profile_image) ? url('upload/admin_images/' . $adminData->profile_image) : url('upload/no_image.jpg') }}"
                                alt="" class="avatar-md rounded-circle">

                        </center>

                        <div class="card-body">

                            <center>

                                {{-- <h4 class="card-title">Nombre</h4> --}}

                                {{-- Nombre de Admin --}}
                                <h4 class="mb-0">{{ $adminData->name }}</h4>
                                <p class="text-muted">{{ $adminData->email }}</p>

                                {{-- {{ route('admin.edit.jet.profile') }} --}}
                                <a href="{{ route('admin.edit.profile') }}">
                                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">
                                        {{-- Editar Perfil --}}
                                        {{ __('Edit Profile') }}
                                    </button>
                                </a>

                                <a href="{{ route('admin.edit.photo') }}">
                                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">
                                        {{-- Editar Foto --}}
                                        {{ __('Edit Photo') }}
                                    </button>
                                </a>

                                {{-- <div class="text-start mt-3"> --}}
                                <div class="mt-3">

                                    <p class="text-muted mb-2 font-13">
                                        <strong>{{ __('Name') }}:</strong>
                                        <span class="ms-2">{{ $adminData->name }}</span>
                                    </p>

                                    <p class="text-muted mb-2 font-13">
                                        <strong>{{ __('Username Short') }}:</strong>
                                        <span class="ms-2">{{ $adminData->username }}</span>
                                    </p>

                                    <p class="text-muted mb-2 font-13">
                                        <strong>{{ __('Telephone') }}:</strong>
                                        <span class="ms-2">{{ $adminData->phone }}</span>
                                    </p>

                                    <p class="text-muted mb-2 font-13">
                                        <strong>{{ __('Email') }}:</strong>
                                        <span class="ms-2">{{ $adminData->email }}</span>
                                    </p>

                                </div>

                            </center>

                        </div>
                    </div>
                </div>

                {{-- Columna 2 Change Password --}}
                <div class="col-lg-8">
                    <div class="card">

                        <div class="card-body">

                            <h4 class="mb-4">{{ __('Change Password') }}</h4>

                            {{-- Si hay errores de validación --}}
                            @if (count($errors) > 0)
                                @foreach ($errors->all() as $error)
                                    {{-- <p class="alert alert-danger alert-dismissible fade show">{{ $error }}</p> --}}

                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $error }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endforeach
                            @endif


                            <form method="POST" action="{{ route('admin.update.password') }}">
                                @csrf

                                {{-- Contraseña Antigua --}}
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">
                                        {{ __('Current Password') }}
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="antiguaContraseña" type="password"
                                            id="antiguaContraseña" autofocus>
                                    </div>
                                </div>

                                {{-- Contraseña Nueva --}}
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">
                                        {{ __('New Password') }}
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="nuevaContraseña" type="password"
                                            id="nuevaContraseña">
                                    </div>
                                </div>

                                {{-- Confirmar Contraseña --}}
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">
                                        {{ __('Confirm Password') }}
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="confirmarContraseña" type="password"
                                            id="confirmarContraseña">
                                    </div>
                                </div>



                                {{-- Botón --}}
                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                    value="{{ __('Update Password') }}">

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
