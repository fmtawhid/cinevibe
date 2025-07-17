@extends('layouts.master')
@section('body')
    <!-- Breadcrumb -->
    <section class="bg-hero-pattern bg-cover bg-center">
        <div class="text-white flex flex-col items-center bg-black bg-opacity-70 md:py-20 py-10">
            <h1 class="text-[30px] font-bold">Feature Films</h1>
            <div class="flex items-center">
                <p class="block">Home</p>
                <div class="h-[6px] w-[6px] mx-3 rotate-45 bg-[#C1AB65]"></div>
                <p>Film Production</p>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="bg-[#0C0C0C]">
        <div class="max-w-screen-xl mx-auto px-4 md:pt-20 pt-10 grid md:grid-cols-3 grid-cols-1">
            <div class="col-span-2">
                <h2 class="font-bold text-[25px] text-white mb-5 uppercase">Feature Film</h2>
                <img class="h-auto w-full" src="assets/img/film-production/feature-film.jpg" alt="feature-film">
                <div class="w-full my-5">
                    <p class="text-white text-justify mb-3">Cinevibe Media is a full-service film production company
                        located in Dhaka. We help you share your story with the world
                        using creative and clear visual storytelling. Whether you're a brand, a start-up, an artist, or
                        someone with a unique
                        idea, we offer custom video solutions tailored to your marketing goals. Our passionate team and
                        strong skills make us
                        one of the top choices for video production in Bangladesh.</p>
                    <p class="text-white text-justify">Static presentations no longer make the impact they used to. If
                        you want your next meeting or event to leave a strong
                        impression, we know how to turn ideas into visually powerful experiences. Our corporate video
                        services are designed to
                        connect your message with your audience in a captivating and professional way. Whether you’re
                        pitching to investors or
                        showcasing your products and services, Cinevibe Media delivers high-quality corporate videos
                        that get results.</p>
                </div>

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
