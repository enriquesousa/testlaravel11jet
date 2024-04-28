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

                            <h4 class="card-title">Editar Foto</h4>

                            {{-- {{ route('admin.store.profile') }} --}}
                            <form method="POST" action="" enctype="multipart/form-data">
                                @csrf


                                {{-- Seleccionar Imagen --}}
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Seleccionar Imagen</label>
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
