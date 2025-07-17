@extends('layouts.admin_master')
@section('body')
    <!-- Main Section -->
    <main class="flex-1 overflow-y-auto p-6 bg-gray-50 min-h-screen">
        <!-- Header Actions -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 gap-4">
            <h1 class="text-3xl font-semibold text-gray-800 tracking-tight">Gallery</h1>
            <a href="{{ route('admin-gallery.create') }}"
                class="inline-flex items-center gap-2 bg-blue-600 text-white px-5 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 shadow transition duration-200">
                ➕ Add New
            </a>
        </div>

        <!-- Pagination -->
        <div class="w-full flex justify-end mb-4">
            {{ $galleries->links('pagination::tailwind') }}
        </div>


        <!-- Flash Message -->
        @if (session('success'))
            <div class="bg-green-50 border border-green-400 text-green-700 px-4 py-3 rounded-md mb-6 shadow-sm">
                ✅ {{ session('success') }}
            </div>
        @endif

        <!-- Gallery Table -->
        <div class="overflow-x-auto bg-white rounded-xl shadow-lg border border-gray-100">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-3 py-2 text-left font-semibold uppercase tracking-wider">ID</th>
                        <th class="px-3 py-2 text-left font-semibold uppercase tracking-wider">Title</th>
                        <th class="px-3 py-2 text-left font-semibold uppercase tracking-wider">Description</th>
                        <th class="px-3 py-2 text-left font-semibold uppercase tracking-wider">Image</th>
                        <th class="px-3 py-2 text-left font-semibold uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @forelse($galleries as $gallery)
                        <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                            <td class="px-3 py-3 text-gray-900">{{ $gallery->id }}</td>
                            <td class="px-3 py-3 font-medium text-gray-800">
                                {{ $gallery->title ?? 'No Title' }}
                            </td>
                            <td class="px-3 py-3 text-gray-600 max-w-xs truncate">
                                {{ Str::limit($gallery->description, 80) }}</td>
                            <td class="px-3 py-3">
                                <img src="{{ asset($gallery->image_path) }}" alt="{{ $gallery->title ?? 'Gallery Image' }}"
                                    class="h-24 w-36 rounded-md object-cover border border-gray-200 shadow-sm">

                            </td>
                            <td class="px-3 py-3">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin-gallery.edit', $gallery->id) }}"
                                        class="inline-block bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 transition text-xs font-semibold shadow-sm">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin-gallery.destroy', $gallery->id) }}" method="POST"
                                        class="inline-block"
                                        onsubmit="return confirm('Are you sure you want to delete this item?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-block bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition text-xs font-semibold shadow-sm">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-6 text-center text-gray-400 italic">
                                No gallery items found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <!-- Spacer for bottom padding -->
        <div class="py-8 sm:py-12"></div>
    </main>
@endsection
