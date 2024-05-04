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
    
                            @php
                                $login_provider = NULL;
                                if($adminData->provider != null){
                                    $login_provider = $adminData->provider;
                                }
                            @endphp

                            {{-- Nombre de Admin --}}
                            @if ($login_provider != null)
                                <h4 class="mb-0">{{ $adminData->name }} ({{ $login_provider }})</h4>
                            @else
                                <h4 class="mb-0">{{ $adminData->name }} </h4>
                            @endif
                            
                            <p class="text-muted">{{ $adminData->email }}</p>

                            {{-- @if ($adminData->provider != null)
                                <p class="text-muted">{{ $adminData->provider }}</p>
                            @endif --}}
                            
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
            

        </div>

    </div>
</div>

@endsection