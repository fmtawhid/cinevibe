{{-- @extends('layouts.admin_master')

@section('body')
    <main class="p-6 max-w-2xl mx-auto bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-4">➕ Add Video</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin-videos.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Description</label>
                <textarea name="description" rows="3"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-blue-300">{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">YouTube URL</label>
                <input type="url" name="video_url" value="{{ old('video_url') }}"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-blue-300"
                    placeholder="https://www.youtube.com/watch?v=..." required>
                <p class="text-gray-500 text-sm mt-1">Paste the full YouTube URL</p>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
            <a href="{{ route('admin-videos.index') }}" class="ml-2 text-gray-600 hover:underline">← Back</a>
        </form>
    </main>
@endsection --}}



@extends('layouts.admin_master')

@section('body')
    <main class="p-6 max-w-2xl mx-auto bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-4">➕ Add Video</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin-videos.store') }}">
            @csrf

            <!-- Title Field -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Title</label>
                <input type="text" name="title" value="{{ old('title') }}"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-blue-300"
                    required>
            </div>

            <!-- Description Field -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Description</label>
                <textarea name="description" rows="3"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-blue-300">{{ old('description') }}</textarea>
            </div>

            <!-- YouTube URL Field -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">YouTube URL</label>
                <input type="url" name="video_url" value="{{ old('video_url') }}"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-blue-300"
                    placeholder="https://www.youtube.com/watch?v=..." required>
                <p class="text-gray-500 text-sm mt-1">Paste the full YouTube URL</p>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
            <a href="{{ route('admin-videos.index') }}" class="ml-2 text-gray-600 hover:underline">← Back</a>
        </form>
    </main>
@endsection
