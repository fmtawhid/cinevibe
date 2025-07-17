@extends('layouts.admin_master')
@section('body')
    <div class="p-6 bg-gray-50 min-h-screen">
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Quick Overview</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Total Gallery -->
            <div
                class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300 ease-in-out">
                <h2 class="text-gray-600 text-base font-semibold mb-1 uppercase tracking-wide">Total Gallery</h2>
                <p class="text-3xl font-bold text-blue-600">{{ $totalGallery }}</p>
            </div>

            <!-- Total Videos -->
            <div
                class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300 ease-in-out">
                <h2 class="text-gray-600 text-base font-semibold mb-1 uppercase tracking-wide">Total Videos</h2>
                <p class="text-3xl font-bold text-blue-600">{{ $totalVideos }}</p>
            </div>

            <!-- Total Form Messages -->
            <div
                class="bg-white p-6 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition duration-300 ease-in-out">
                <h2 class="text-gray-600 text-base font-semibold mb-1 uppercase tracking-wide">Total Contact Submissions
                </h2>
                <p class="text-3xl font-bold text-blue-600">{{ $totalMessages }}</p>
            </div>
        </div>
    </div>
@endsection
