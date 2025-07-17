<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Video;
use App\Models\Contact;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalGallery = Gallery::count();
        $totalVideos = Video::count();
        $totalMessages = Contact::count();

        return view('dashboard', compact('totalGallery', 'totalVideos', 'totalMessages'));
    }
}
