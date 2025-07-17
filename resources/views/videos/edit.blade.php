@extends('layouts.admin_master')
@section('body')
    <main class="pt-3 pb-5 px-4 max-w-2xl mx-auto bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-3">Edit Video</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-3 py-2 rounded mb-3">
                <ul class="list-disc pl-5 text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin-videos.update', $video->id) }}">
            @csrf
            @method('PUT')

            <!-- Title Field -->
            <div class="mb-3">
                <label class="block text-gray-700 font-semibold mb-1 text-sm">Title</label>
                <input type="text" name="title" value="{{ old('title', $video->title) }}"
                    class="w-full border border-gray-300 py-1.5 px-3 rounded focus:outline-none focus:ring focus:border-blue-300 text-sm"
                    required>
            </div>

            <!-- Description Field -->
            <div class="mb-3">
                <label class="block text-gray-700 font-semibold mb-1 text-sm">Description</label>
                <textarea name="description" rows="3"
                    class="w-full border border-gray-300 py-1.5 px-3 rounded focus:outline-none focus:ring focus:border-blue-300 text-sm">{{ old('description', $video->description) }}</textarea>
            </div>

            <!-- Current Video Preview -->
            <div class="mb-3">
                <label class="block text-gray-700 font-semibold mb-1 text-sm">Current Video</label>
                <iframe class="w-full h-36" src="https://www.youtube.com/embed/{{ $video->video_path }}" frameborder="0"
                    allowfullscreen></iframe>
            </div>

            <!-- YouTube URL Field -->
            <div class="mb-3">
                <label class="block text-gray-700 font-semibold mb-1 text-sm">Change YouTube URL</label>
                <input type="url" name="video_url" value="{{ old('video_url', $video->video_url) }}"
                    class="w-full border border-gray-300 py-1.5 px-3 rounded focus:outline-none focus:ring focus:border-blue-300 text-sm"
                    placeholder="https://www.youtube.com/watch?v=..." required>
                <p class="text-gray-500 text-xs mt-1">Paste the full YouTube URL</p>
            </div>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 text-sm">
                Update
            </button>
            <a href="{{ route('admin-videos.index') }}" class="ml-2 text-gray-600 hover:underline text-sm">← Cancel</a>
        </form>
    </main>
@endsection
