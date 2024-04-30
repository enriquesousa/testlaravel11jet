@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">

                <x-app-layout>
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.logout-other-browser-sessions-form')
                    </div>

                   <br>
                </x-app-layout>

            </div>
        </div>
    </div>
    
@endsection

