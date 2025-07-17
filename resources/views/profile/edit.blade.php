{{-- Previous Method --}}

{{-- resources/views/profile/edit.blade.php --}}
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}



{{-- New  --}}
@extends('layouts.admin_master')

@section('body')
    <div class="min-h-screen bg-gray-50 overflow-y-auto scrollbar-thin scrollbar-thumb-blue-400 scrollbar-track-blue-100">
        <!-- Page Heading -->
        <div class="bg-white shadow-sm sm:rounded-lg mb-6 p-6 border border-gray-200">
            <h1 class="font-semibold text-2xl text-gray-900 leading-tight tracking-wide">
                {{ __('Profile') }}
            </h1>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 pb-12">
            <!-- Update Profile Information -->
            <div class="p-6 sm:p-8 bg-white shadow-lg rounded-xl border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password -->
            <div class="p-6 sm:p-8 bg-white shadow-lg rounded-xl border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account -->
            <div class="p-6 sm:p-8 bg-white shadow-lg rounded-xl border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection
