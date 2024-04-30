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

                {{-- Columna 2 Foto --}}
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">{{ __('Edit Photo') }}</h4>

                            <form method="POST" action="{{ route('admin.store.photo') }}" enctype="multipart/form-data">
                                @csrf


                                {{-- Seleccionar Imagen --}}
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">{{ __('Select Image') }}</label>
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
                                <input type="submit" class="btn btn-info waves-effect waves-light" value="{{ __('Update') }}">

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
