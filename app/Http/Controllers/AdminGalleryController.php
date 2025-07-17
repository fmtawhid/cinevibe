<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;




class AdminGalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('admin-gallery', compact('galleries'));
        // $galleries = Gallery::latest()->get();
        // return view('admin-gallery', compact('galleries'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:6144', // Adjust the 'max' value to customize
        ]);

        $file = $request->file('image');
        $filename = Str::uuid() . '.' . $file->extension();
        $targetDir = public_path('gallery');

        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        $file->move($targetDir, $filename);

        Gallery::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image_path' => 'gallery/' . $filename,
        ]);

        return redirect()
            ->route('admin-gallery.index')
            ->with('success', 'Gallery item added successfully!');
    }

    public function edit(Gallery $gallery)
    {
        return view('gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $validated = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:6144', // Adjust the 'max' value to customize
        ]);

        if ($request->hasFile('image')) {
            // Delete old file
            $old = public_path($gallery->image_path);
            if (is_file($old)) {
                @unlink($old);
            }

            // Save new file
            $file = $request->file('image');
            $filename = Str::uuid() . '.' . $file->extension();
            $file->move(public_path('gallery'), $filename);
            $gallery->image_path = 'gallery/' . $filename;
        }

        $gallery->title = $validated['title'];
        $gallery->description = $validated['description'];
        $gallery->save();

        return redirect()
            ->route('admin-gallery.index')
            ->with('success', 'Gallery item updated successfully!');
    }

    public function destroy(Gallery $gallery)
    {
        // Delete image file
        $full = public_path($gallery->image_path);
        if (is_file($full)) {
            @unlink($full);
        }

        // Delete record
        $gallery->delete();

        return redirect()
            ->route('admin-gallery.index')
            ->with('success', 'Gallery item deleted successfully!');
    }
}
