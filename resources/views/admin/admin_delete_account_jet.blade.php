@extends('admin.admin_master')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">

                <x-app-layout>

                    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                        <x-section-border />

                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.delete-user-form')
                        </div>
                    @endif

                    <br>
                </x-app-layout>

            </div>
        </div>
    </div>
    
@endsection
