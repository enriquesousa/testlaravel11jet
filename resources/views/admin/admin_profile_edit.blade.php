@extends('admin.admin_master')
@section('admin')
    {{-- Jquery CDN Para poder usar JS --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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

                {{-- Columna 2 --}}
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Editar Perfil</h4>

                            <form method="POST" action="{{ route('admin.store.profile') }}" enctype="multipart/form-data">
                                @csrf

                                {{-- Nombre --}}
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">
                                        {{ __('Name') }}
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="name" type="text" id="name"
                                            value="{{ $editData->name }}">
                                    </div>
                                </div>

                                {{-- Username --}}
                                <div class="row mb-3">
                                    <label for="username" class="col-sm-2 col-form-label" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title=""
                                        data-bs-original-title="Nombre de usuario una sola palabra y en minúscula">
                                        {{ __('Username Short') }}
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('username') is-invalid @enderror" name="username" type="text" id="username"
                                            value="{{ $editData->username }}">
                                        @error('username')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Teléfono --}}
                                <div class="row mb-3">
                                    <label for="phone" class="col-sm-2 col-form-label" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="" data-bs-original-title="Acepta solo números">
                                        {{ __('Telephone') }}
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control @error('phone') is-invalid @enderror" name="phone" type="number" id="phone"
                                            value="{{ $editData->phone }}">
                                        @error('phone')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Email --}}
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="email" type="text" id="email"
                                            value="{{ $editData->email }}">
                                    </div>
                                </div>


                                {{-- Seleccionar Imagen --}}
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">
                                        {{ __('Select Image') }}
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="profile_image" type="file" id="image">
                                    </div>
                                </div>

                                {{-- Display Image --}}
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">

                                        <img id="showImage" class="rounded avatar-lg"
                                            src="{{ !empty($editData->profile_image) ? url('upload/admin_images/' . $editData->profile_image) : url('upload/no_image.jpg') }}"
                                            data-holder-rendered="true">

                                    </div>
                                </div>

                                {{-- Botón Actualizar --}}
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="Actualizar">

                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- JS para el manejo de imagenes --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

@endsection
