<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->get();
        return view('template.index', compact('videos'));
    }

    public function about()
    {
        return view('template.about');
    }

    public function actors()
    {
        return view('template.actors');
    }

    public function adfilm()
    {
        return view('template.ad-film');
    }

    public function birthdaypartyplanning()
    {
        return view('template.birthday-party-planning');
    }

    public function comedians()
    {
        return view('template.comedians');
    }

    public function contact()
    {
        return view('template.contact');
    }

    public function corporateevent()
    {
        return view('template.corporate-event');
    }

    public function corporatephotography()
    {
        return view('template.corporate-photography');
    }

    public function corporatevideos()
    {
        return view('template.corporate-videos');
    }

    public function dancegroup()
    {
        return view('template.dance-group');
    }

    public function documentaryfilm()
    {
        return view('template.documentary-film');
    }

    public function ecommercephotography()
    {
        return view('template.e-commerce-photography');
    }

    public function eventphotography()
    {
        return view('template.event-photography');
    }

    public function fashionphotography()
    {
        return view('template.fashion-photography');
    }

    public function featurefilm()
    {
        return view('template.feature-film');
    }

    public function photo()
    {
        $galleries = Gallery::latest()->get();
        $videos = Video::latest()->get();
        return view('template.gallery', compact('galleries', 'videos'));
    }

    public function kidsphotography()
    {
        return view('template.kids-photography');
    }

    public function maternityphotography()
    {
        return view('template.maternity-photography');
    }

    public function mixingandmastering()
    {
        return view('template.mixing-and-mastering');
    }

    public function modellingagency()
    {
        return view('template.modelling-agency');
    }

    public function musicconcert()
    {
        return view('template.music-concert');
    }

    public function musicvideos()
    {
        return view('template.music-videos');
    }

    public function preweddingphotography()
    {
        return view('template.pre-wedding-photography');
    }

    public function roadshowsmallshows()
    {
        return view('template.road-shows-mall-shows');
    }

    public function shortfilm()
    {
        return view('template.short-film');
    }

    public function singersmusician()
    {
        return view('template.singers-musician');
    }

    public function socialworkers()
    {
        return view('template.singers-musician');
    }

    public function songwriting()
    {
        return view('template.song-writing');
    }

    public function sounddesigning()
    {
        return view('template.sound-designing');
    }

    public function soundrecording()
    {
        return view('template.sound-recording');
    }

    public function sportsprofessionals()
    {
        return view('template.sports-professionals');
    }

    public function studioonhire()
    {
        return view('template.studio-on-hire');
    }

    public function weddingphotography()
    {
        return view('template.wedding-photography');
    }

    public function weddingplanning()
    {
        return view('template.wedding-planning');
    }

    public function youtuber()
    {
        return view('template.youtuber');
    }
}