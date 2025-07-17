@extends('layouts.admin_master')

@section('body')
    <main class="p-6 max-w-2xl mx-auto bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-4">➕ Add Gallery Item</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin-gallery.store') }}" enctype="multipart/form-data">

            @csrf


            <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-1">Title (optional)</label>
            <input type="text" name="title" value="{{ old('title') }}"
            class="w-full border border-gray-300 p-2 rounded">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Description</label>
                <textarea name="description" rows="3"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:border-blue-300">{{ old('description') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-1">Image</label>
                <input type="file" name="image" accept="image/*" class="w-full border border-gray-300 p-2 rounded">
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
            <a href="{{ route('admin-gallery.index') }}" class="ml-2 text-gray-600 hover:underline">← Back</a>
        </form>
    </main>
@endsection
