@extends('layouts.master')
@section('body')
    <!-- Breadcrumb -->
    <section class="bg-hero-pattern bg-cover bg-center">
        <div class=" text-white flex flex-col items-center bg-black bg-opacity-70 md:py-20 py-10">
            <h1 class="text-[30px] font-bold">Road / Mall Shows</h1>
            <div class="flex items-center">
                <p class="block">Home</p>
                <div class="h-[6px] w-[6px] mx-3 rotate-45 bg-[#C1AB65]"></div>
                <p>Event Management</p>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section class="bg-[#0C0C0C]">
        <div class="max-w-screen-xl mx-auto px-4 md:pt-20 pt-10 grid md:grid-cols-3 grid-cols-1">
            <div class="col-span-2">
                <h2 class="font-bold text-[25px] text-white mb-5 uppercase">Road / Mall Shows</h2>
                <img class="h-auto w-full" src="assets/img/event-management/road-show/1.jpg" alt="road-shows-mall-shows">
                <div class="w-full my-5 mb-10">
                    <p class="text-white text-justify mb-3">Looking to make an impact in the busiest parts of the city?
                        Roadshows and mall shows are powerful ways to connect with
                        audiences directly, create brand visibility, and engage potential customers in real time. At
                        Cinevibe Media, we
                        specialize in curating live public activations that spark curiosity and boost footfall. Whether
                        it's a product launch, a
                        promotional campaign, or brand awareness activity, we know how to transform everyday spaces into
                        interactive experiences
                        that people remember.</p>
                    <p class="text-white text-justify">SFrom choreographed performances and live demos to celebrity
                        appearances and giveaways, our roadshows and mall shows are
                        designed to entertain and engage. We manage everything—from event planning and venue permissions
                        to stage setup and
                        audience coordination—so you get results without the stress. By placing your message right where
                        people shop and
                        socialize, we create high-energy moments that increase brand recall and drive conversions. With
                        Cinevibe Media behind
                        the scenes, your next public showcase will be bold, vibrant, and unforgettable.</p>
                </div>
                <!-- <div class="grid sm:grid-cols-3 grid-cols-1 gap-3">
                                <img src="assets/img/event-management/road-show/1.jpg" alt="road-shows-mall-shows">
                                <img src="assets/img/event-management/road-show/1.jpg" alt="road-shows-mall-shows">
                                <img src="assets/img/event-management/road-show/1.jpg" alt="road-shows-mall-shows">
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
