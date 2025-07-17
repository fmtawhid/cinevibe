@extends('layouts.admin_master')
@section('body')
    <!-- Main Section -->
    <main class="flex-1 overflow-y-auto p-6 bg-gray-50 min-h-screen">
        <!-- Header Actions -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-6 gap-4">
            <h1 class="text-3xl font-semibold text-gray-800 tracking-tight">Videos</h1>
            <a href="{{ route('admin-videos.create') }}"
                class="inline-flex items-center gap-2 bg-blue-600 text-white px-5 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 shadow transition duration-200">
                ➕ Add New
            </a>
        </div>


        <!-- Pagination -->
        <div class="w-full flex justify-end mb-4">
            {{ $videos->links('pagination::tailwind') }}
        </div>

        <!-- Flash Message -->
        @if (session('success'))
            <div class="bg-green-50 border border-green-400 text-green-700 px-4 py-3 rounded-md mb-6 shadow-sm">
                ✅ {{ session('success') }}
            </div>
        @endif

        <!-- Video Table -->
        <div class="overflow-x-auto bg-white rounded-xl shadow-lg border border-gray-100">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">ID</th>
                        <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Description</th>
                        <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Video</th>
                        <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    @forelse($videos as $video)
                        <tr class="hover:bg-gray-50 transition duration-150 ease-in-out">
                            <td class="px-6 py-4 text-gray-900">{{ $video->id }}</td>
                            <td class="px-6 py-4 text-gray-700">{{ Str::limit($video->description, 100) }}</td>
                            <td class="px-6 py-4">
                                <div class="w-64">
                                    <div class="overflow-hidden rounded-md shadow-md border border-gray-200">
                                        <iframe class="w-full h-32"
                                            src="https://www.youtube.com/embed/{{ $video->video_path }}" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            </td>


                            <td class="px-6 py-4">
                                <div class="flex flex-wrap gap-2">
                                    <a href="{{ route('admin-videos.edit', $video->id) }}"
                                        class="inline-block bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 transition text-xs font-semibold shadow-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('admin-videos.destroy', $video->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this video?');">
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
                            <td colspan="4" class="px-6 py-6 text-center text-gray-400 italic">
                                No videos found.
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
