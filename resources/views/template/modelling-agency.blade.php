@extends('layouts.master')
@section('body')
    <!-- Breadcrumb -->
    <section class="bg-hero-pattern bg-cover bg-center">
        <div class=" text-white flex flex-col items-center bg-black bg-opacity-70 md:py-20 py-10">
            <h1 class="text-[30px] font-bold">Modelling Agency</h1>
            <div class="flex items-center">
                <p class="block">Home</p>
                <div class="h-[6px] w-[6px] mx-3 rotate-45 bg-[#C1AB65]"></div>
                <p>Modelling Agency</p>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="bg-[#0C0C0C]">
        <div class="max-w-screen-xl mx-auto px-4 md:pt-20 pt-10 grid md:grid-cols-3 grid-cols-1">
            <div class="col-span-2">
                <h2 class="font-bold text-[25px] text-white mb-5 uppercase">Modelling Agency</h2>
                <img class="h-auto w-full" src="assets/img/photography/fashion/1.jpg" alt="modelling-agency">
                <div class="w-full my-5 mb-10">
                    <p class="text-white text-justify mb-3">Cinevibe Media is the bridge between top-tier models and
                        the brands, designers, magazines, and agencies that shape
                        fashion and media. We manage every aspect of model bookings—from catwalks and commercial shoots
                        to brand campaigns and
                        fashion editorials—so you can focus on creativity while we handle the logistics. Even the most
                        complex projects run
                        smoothly with our experienced team guiding each step of production.</p>
                    <p class="text-white text-justify">Whether it’s a high-energy fashion show or an intimate shoot, our
                        coordination covers everything from behind-the-scenes
                        preparation to runway execution. We work globally, delivering flawless experiences that meet
                        international standards
                        while supporting Bangladesh’s vibrant fashion community. At Cinevibe Media, we’re not just a
                        modeling agency—we’re your
                        strategic partner in producing standout visuals with seamless professionalism.</p>
                </div>
                <!-- <div class="grid sm:grid-cols-3 grid-cols-1 gap-3">
                            <img src="assets/img/photography/fashion/1.jpg" alt="modelling-agency">
                            <img src="assets/img/photography/fashion/1.jpg" alt="modelling-agency">
                            <img src="assets/img/photography/fashion/1.jpg" alt="modelling-agency">
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
