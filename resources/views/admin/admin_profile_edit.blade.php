@extends('admin.admin_master')
@section('admin')

    {{-- Jquery CDN Para poder usar JS --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">

                {{-- Columna 1 --}}
                <div class="col-lg-6">
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
                                    <label for="username" class="col-sm-2 col-form-label" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Nombre de usuario una sola palabra y en minúscula">
                                        {{ __('Username Short') }}
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="username" type="text" id="username"
                                            value="{{ $editData->username }}">
                                    </div>
                                </div>

                                {{-- Teléfono --}}
                                <div class="row mb-3">
                                    <label for="phone" class="col-sm-2 col-form-label" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Acepta solo números">
                                        {{ __('Telephone') }}
                                    </label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="phone" type="number" id="phone"
                                            value="{{ $editData->phone }}">
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
