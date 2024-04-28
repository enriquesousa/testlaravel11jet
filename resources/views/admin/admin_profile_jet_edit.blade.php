@extends('admin.admin_master')
@section('admin')
    
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">

                <x-app-layout>
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')
                        <x-section-border />
                    @endif
                </x-app-layout>
                
            </div>
        </div>
    </div>
   
@endsection
