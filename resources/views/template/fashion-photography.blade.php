@extends('layouts.master')
@section('body')
    <!-- Breadcrumb -->
    <section class="bg-hero-pattern bg-cover bg-center">
        <div class=" text-white flex flex-col items-center bg-black bg-opacity-70 md:py-20 py-10">
            <h1 class="text-[30px] font-bold">Fashion Photography</h1>
            <div class="flex items-center">
                <p class="block">Home</p>
                <div class="h-[6px] w-[6px] mx-3 rotate-45 bg-[#C1AB65]"></div>
                <p>Photography</p>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="bg-[#0C0C0C]">
        <div class="max-w-screen-xl mx-auto px-4 md:pt-20 pt-10 grid md:grid-cols-3 grid-cols-1">
            <div class="col-span-2">
                <h2 class="font-bold text-[25px] text-white mb-5 uppercase">Fashion Photography</h2>
                <img class="h-auto w-full" src="assets/img/photography/fashion/1.jpg" alt="fashion-photography">
                <div class="w-full my-5 mb-10">
                    <p class="text-white text-justify mb-3">Cinevibe Media is one of the top names in fashion
                        photography in Dhaka. We specialize in model portfolios, lookbooks,
                        and advertising campaigns that highlight style, creativity, and bold visual storytelling. Our
                        passion for fashion
                        photography runs deep—it's more than just a profession, it's an artistic love that has been
                        nurtured from the start. For
                        us, capturing striking images isn't just about taking photos—it’s about expressing personality
                        and style through every
                        frame.</p>
                    <p class="text-white text-justify">At Cinevibe Media, we bring together everything that makes
                        fashion photography stand out: Bangladeshi and international
                        models, art direction, bold styling, professional makeup and hair, unique locations, and
                        carefully crafted lighting
                        setups. Each fashion shoot is designed to create an image that goes beyond the model and focuses
                        on the story, the mood,
                        and the style it represents. It's not just about promoting a person—it’s about elevating a brand
                        and crafting visual art
                        that speaks.</p>
                </div>
                <!-- <div class="grid sm:grid-cols-3 grid-cols-1 gap-3">
                            <img src="assets/img/photography/fashion/1.jpg" alt="fashion-photography">
                            <img src="assets/img/photography/fashion/1.jpg" alt="fashion-photography">
                            <img src="assets/img/photography/fashion/1.jpg" alt="fashion-photography">
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
