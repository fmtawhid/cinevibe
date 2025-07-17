@extends('layouts.master')
@section('body')
    <!-- Breadcrumb -->
    <section class="bg-hero-pattern bg-cover bg-center">
        <div class=" text-white flex flex-col items-center bg-black bg-opacity-70 md:py-20 py-10">
            <h1 class="text-[30px] font-bold">Mixing & Mastering</h1>
            <div class="flex items-center">
                <p class="block">Home</p>
                <div class="h-[6px] w-[6px] mx-3 rotate-45 bg-[#C1AB65]"></div>
                <p>Music Production</p>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="bg-[#0C0C0C]">
        <div class="max-w-screen-xl mx-auto px-4 md:pt-20 pt-10 grid md:grid-cols-3 grid-cols-1">
            <div class="col-span-2">
                <h2 class="font-bold text-[25px] text-white mb-5 uppercase">Mixing & Mastering</h2>
                <img class="h-auto w-full" src="assets/img/music-production/mixing.jpg" alt="mixing">
                <div class="w-full my-5 mb-10">
                    <p class="text-white text-justify mb-3">Mixing is the process of blending all your recorded audio
                        tracks into one cohesive sound, usually in stereo or
                        multi-channel format. It involves adjusting volume levels, positioning instruments in the sound
                        field, and shaping the
                        tone of each track so everything works together. Mastering is the final stage where your mixed
                        audio is polished and
                        prepared for release. This step ensures consistency across the whole project and may include
                        ordering your songs,
                        smoothing transitions, and optimizing the overall sound for various platforms.</p>
                    <p class="text-white text-justify">Once your recording is complete, it's time to mix. Start by
                        organizing your audio files with clear names so you can
                        easily find what you need—for example, “Lead Vocal” is better than “track_14.” Use volume
                        controls to make sure all
                        tracks are balanced. You can also adjust positioning to create space for each sound and make
                        your mix feel open and
                        dynamic. This early stage is called a rough mix. When it’s done right, it lays the foundation
                        for a final master that
                        sounds clean, powerful, and ready to impress.</p>
                </div>
                <!-- <div class="grid sm:grid-cols-3 grid-cols-1 gap-3">
                            <img src="assets/img/music-production/mixing.jpg" alt="mixing">
                            <img src="assets/img/music-production/mixing.jpg" alt="mixing">
                            <img src="assets/img/music-production/mixing.jpg" alt="mixing">
                        </div> -->
            </div>
            <div class="w-full">
                <h2 class="font-bold text-[25px] text-white mb-5 md:ml-5">SERVICES</h2>
                <div class="flex flex-col gap-3 md:ml-5">
                    <a class="flex items-center text-white hover:text-[#C1AB65] transition-all duration-300 group"
                        href="{{ route('feature-film') }}">
                        <div
                            class="h-[6px] w-[6px] mr-3 rotate-45 group-hover:rotate-0 bg-[#C1AB65] transition-all duration-300">
                        </div>
                        <p>Film Production</p>
                    </a>
                    <a class="flex items-center text-white hover:text-[#C1AB65] transition-all duration-300 group"
                        href="{{ route('song-writing') }}">
                        <div
                            class="h-[6px] w-[6px] mr-3 rotate-45 group-hover:rotate-0 bg-[#C1AB65] transition-all duration-300">
                        </div>
                        <p>Music Production</p>
                    </a>
                    <a class="flex items-center text-white hover:text-[#C1AB65] transition-all duration-300 group"
                        href="{{ route('wedding-photography') }}">
                        <div
                            class="h-[6px] w-[6px] mr-3 rotate-45 group-hover:rotate-0 bg-[#C1AB65] transition-all duration-300">
                        </div>
                        <p>Photography</p>
                    </a>
                    <a class="flex items-center text-white hover:text-[#C1AB65] transition-all duration-300 group"
                        href=" {{ route('corporate-event') }}">
                        <div
                            class="h-[6px] w-[6px] mr-3 rotate-45 group-hover:rotate-0 bg-[#C1AB65] transition-all duration-300">
                        </div>
                        <p>Event Management</p>
                    </a>
                    <a class="flex items-center text-white hover:text-[#C1AB65] transition-all duration-300 group"
                        href=" {{ route('actors') }}">
                        <div
                            class="h-[6px] w-[6px] mr-3 rotate-45 group-hover:rotate-0 bg-[#C1AB65] transition-all duration-300">
                        </div>
                        <p>Celebrity Management</p>
                    </a>
                    <a class="flex items-center text-white hover:text-[#C1AB65] transition-all duration-300 group"
                        href=" {{ route('modelling-agency') }}">
                        <div
                            class="h-[6px] w-[6px] mr-3 rotate-45 group-hover:rotate-0 bg-[#C1AB65] transition-all duration-300">
                        </div>
                        <p>Modelling Agency</p>
                    </a>
                    <a class="flex items-center text-white hover:text-[#C1AB65] transition-all duration-300 group"
                        href=" {{ route('road-shows-mall-shows') }}">
                        <div
                            class="h-[6px] w-[6px] mr-3 rotate-45 group-hover:rotate-0 bg-[#C1AB65] transition-all duration-300">
                        </div>
                        <p>Road / Mall Shows</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
