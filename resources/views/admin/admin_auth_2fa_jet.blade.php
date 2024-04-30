@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">

                <x-app-layout>

                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.two-factor-authentication-form')
                        </div>

                        <x-section-border />
                    @endif

                   <br>
                </x-app-layout>

            </div>
        </div>
    </div>
    
@endsection

