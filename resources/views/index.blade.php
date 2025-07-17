@extends('layouts.admin_master')
@section('title', 'Video Gallery')

@section('header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="m-0">Video Gallery</h1>
        <a href="{{ route('admin-videos.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Add Video
        </a>
    </div>
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($videos as $video)
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/{{ $video->video_path }}" frameborder="0"
                            allowfullscreen></iframe>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $video->description }}</h5>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin-videos.edit', $video->id) }}" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-edit me-1"></i> Edit
                            </a>
                            <form action="{{ route('admin-videos.destroy', $video->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Delete this video?')">
                                    <i class="fas fa-trash me-1"></i> Delete
                                </button>
                            </form>
                        </div>


                        <div class="flex flex-wrap gap-2">
                            <a href="{{ route('admin-videos.edit', $video->id) }}"
                                class="inline-block bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 transition text-xs font-semibold shadow-sm">
                                Edit
                            </a>

                            <form action="{{ route('admin-videos.destroy', $video->id) }}" method="POST"
                                onsubmit="return confirm('Delete this video?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-block bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition text-xs font-semibold shadow-sm">
                                    Delete
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
