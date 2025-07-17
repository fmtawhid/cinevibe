@extends('layouts.admin_master')
@section('body')
    <main class="pt-3 pb-5 px-4 max-w-2xl mx-auto bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-3">Edit Gallery Item</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded mb-3">
                <ul class="list-disc pl-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin-gallery.update', $gallery->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Title -->
            <div class="mb-3">
                <label class="block text-gray-700 font-semibold mb-1 text-sm">Title (optional)</label>
                <input type="text" name="title" value="{{ old('title', $gallery->title) }}"
                    class="w-full border border-gray-300 py-1.5 px-3 rounded focus:outline-none focus:ring focus:border-blue-300 text-sm">
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label class="block text-gray-700 font-semibold mb-1 text-sm">Description</label>
                <textarea name="description" rows="3"
                    class="w-full border border-gray-300 py-1.5 px-3 rounded focus:outline-none focus:ring focus:border-blue-300 text-sm">{{ $gallery->description }}</textarea>
            </div>

            <!-- Current Image -->
            <div class="mb-3">
                <label class="block text-gray-700 font-semibold mb-1 text-sm">Current Image</label>
                <img src="{{ asset('/' . $gallery->image_path) }}" class="w-full h-40 object-cover rounded mb-2"
                    alt="Gallery Image">
            </div>

            <!-- Change Image -->
            <div class="mb-3">
                <label class="block text-gray-700 font-semibold mb-1 text-sm">Change Image (optional)</label>
                <input type="file" name="image" accept="image/*"
                    class="w-full border border-gray-300 py-1.5 px-3 rounded text-sm">
            </div>

            <!-- Buttons -->
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 text-sm">
                Update
            </button>
            <a href="{{ route('admin-gallery.index') }}" class="ml-2 text-gray-600 hover:underline text-sm">← Cancel</a>
        </form>
    </main>
@endsection
