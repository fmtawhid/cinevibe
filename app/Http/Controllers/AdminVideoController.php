<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class AdminVideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->paginate(10);
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'video_url' => 'required|url'
        ]);

        try {
            // Extract YouTube ID
            $videoId = $this->getYouTubeId($request->video_url);
            if (!$videoId) {
                return back()->withErrors(['video_url' => 'Invalid YouTube URL'])->withInput();
            }

            // Create video record
            Video::create([
                'title' => $request->title,
                'description' => $request->description,
                'video_url' => $request->video_url,
                'video_path' => $videoId
            ]);

            return redirect()->route('admin-videos.index')
                ->with('success', 'Video added successfully!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Error saving video: ' . $e->getMessage()])->withInput();
        }
    }


    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }


    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|string|max:255', // Added title validation
            'description' => 'required|string|max:255',
            'video_url' => 'required|url'
        ]);

        $videoId = $this->getYouTubeId($request->video_url);
        if (!$videoId) {
            return back()->withErrors(['video_url' => 'Invalid YouTube URL'])->withInput();
        }

        $video->update([
            'title' => $request->title, // Added title update
            'description' => $request->description,
            'video_url' => $request->video_url,
            'video_path' => $videoId
        ]);

        return redirect()->route('admin-videos.index')
            ->with('success', 'Video updated successfully!');
    }


    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin-videos.index')
            ->with('success', 'Video deleted successfully!');
    }


    private function getYouTubeId($url)
    {
        $patterns = [
            '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/]{11})%i',
            '%(?:youtube\.com/watch\?v=|youtu\.be/)([^"&?/]{11})%i',
            '%(?:youtube\.com/embed/)([^"&?/]{11})%i'
        ];

        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $url, $match)) {
                return $match[1];
            }
        }
        return null;
    }
}
