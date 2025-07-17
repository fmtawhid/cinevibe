@extends('layouts.master')
@section('body')
    <!-- Hero section slider -->
    <header>
        <div class="slider-hero w-full">
            <div class="bg-no-repeat bg-cover bg-center" style="background-image: url('assets/img/index/welcome.jpg');">
                <div
                    class="px-4 flex flex-col justify-center items-center gap-5 lg:py-[250px] md:py-[200px] sm:py-[150px] py-[100px] bg-black bg-opacity-40">
                    <h1 class="md:text-[80px] text-[35px] text-white font-bold uppercase text-center leading-tight">
                        Welcome
                        To</h1>
                    <p class="text-white text-[24px]">Cinevibe Media</p>
                    <div class="md:mt-5 mt-0">
                        <a class="uppercase bg-white px-10 py-4 rounded-lg" href="/">View More</a>
                    </div>
                </div>
            </div>
            <div class="bg-no-repeat bg-cover bg-center"
                style="background-image: url('assets/img/film-production/feature-film.jpg');">
                <div
                    class="px-4 flex flex-col justify-center items-center gap-5 lg:py-[250px] md:py-[200px] sm:py-[150px] py-[100px] bg-black bg-opacity-40">
                    <h1 class="md:text-[80px] text-[35px] text-white font-bold uppercase text-center leading-tight">
                        Feature Films
                    </h1>
                    <p class="text-white text-[24px]">Cinevibe Media</p>
                    <div class="md:mt-5 mt-0">
                        <a class="uppercase bg-white px-10 py-4 rounded-lg" href="{{ route('feature-film') }}">View
                            More</a>
                    </div>
                </div>
            </div>
       
            <div class="bg-no-repeat bg-cover bg-center"
                style="background-image: url('assets/img/celibrity-management/actors.jpg');">
                <div
                    class="px-4 flex flex-col justify-center items-center gap-5 lg:py-[250px] md:py-[200px] sm:py-[150px] py-[100px] bg-black bg-opacity-40">
                    <h1 class="md:text-[80px] text-[35px] text-white font-bold uppercase text-center leading-tight">
                        Actors
                    </h1>
                    <p class="text-white text-[24px]">Cinevibe Media</p>
                    <div class="md:mt-5 mt-0">
                        <a class="uppercase bg-white px-10 py-4 rounded-lg" href="{{ route('actors') }}">View
                            More</a>
                    </div>
                </div>
            </div>
            <div class="bg-no-repeat bg-cover bg-center"
                style="background-image: url('assets/img/celibrity-management/youtuber/1.jpg');">
                <div
                    class="px-4 flex flex-col justify-center items-center gap-5 lg:py-[250px] md:py-[200px] sm:py-[150px] py-[100px] bg-black bg-opacity-40">
                    <h1 class="md:text-[80px] text-[35px] text-white font-bold uppercase text-center leading-tight">
                        Youtuber
                    </h1>
                    <p class="text-white text-[24px]">Cinevibe Media</p>
                    <div class="md:mt-5 mt-0">
                        <a class="uppercase bg-white px-10 py-4 rounded-lg" href="{{ route('youtuber') }}">View
                            More</a>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <!-- About Us -->
    <section class="bg-black md:py-20 py-10">
        <span class="text-[#C1AB65] text-[18px] text-center block uppercase">The Cinevibe Media</span>
        <h2 class="text-white md:text-[45px] text-[30px] text-center uppercase mb-5">About Us</h2>
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="grid md:grid-cols-2 grid-cols-1 md:gap-5 gap-0">
                <div class="text-white">
                    <p class="mb-3 ">Cinevibe Media is a complete media production house in Dhaka,
                        Bangladesh. We
                        specialize in everything from film
                        production, music production, and photography to acting training, celebrity management, event
                        planning, celebrity
                        interviews, and brand promotion. If you're looking for end-to-end media solutions, we're the
                        creative team to count on.</p>
                    <p class="mb-8 ">Cinevibe Media is quickly becoming one of the leading names in
                        Bangladesh’s video
                        production scene. Our fresh and
                        engaging ideas are designed to bring golden opportunities for brands and individuals alike. We
                        craft creative films, TV
                        commercials, corporate videos, explainer animations, testimonial reels, and impactful
                        documentaries. Our goal is to
                        become one of the most trusted and innovative video production companies in Dhaka.</p>
                    <div class="flex items-start mb-3 space-x-4">
                        <div class="h-[6px] w-[6px] mt-2 rotate-45 bg-[#C1AB65]"></div>
                        <p class="">We believe in bold, breakthrough concepts that take your brand to the
                            next level. Every idea
                            we develop is infused with
                            strategy, creativity, and a clear vision for impact.
                        </p>
                    </div>
                    <div class="flex items-start mb-3 space-x-4">
                        <div class="h-[6px] w-[6px] mt-2 rotate-45 bg-[#C1AB65]"></div>
                        <p class="">Our design work goes beyond visuals—it tells your story in a way that’s
                            memorable and
                            meaningful. We create designs that
                            leave a legacy and spark conversations.
                        </p>
                    </div>
                    <div class="flex items-start mb-3 space-x-4">
                        <div class="h-[6px] w-[6px] mt-2 rotate-45 bg-[#C1AB65]"></div>
                        <p class="">We combine stunning visuals with compelling copy to produce content that
                            resonates. Whether
                            it’s a commercial or a brand
                            film, we treat it like your own thriller.
                        </p>
                    </div>
                    <div class="flex items-start mb-3 space-x-4">
                        <div class="h-[6px] w-[6px] mt-2 rotate-45 bg-[#C1AB65]"></div>
                        <p class="">A powerful idea is only as good as its execution—and ours is top-notch.
                            With meticulous
                            planning and artistic finesse,
                            we bring every project to life with excellence.
                        </p>
                    </div>
                </div>
                <img class="w-full mb-5" src="assets/img/about/1.jpg" alt="about">
            </div>
            <div class="text-white">
                <h3 class="text-[28px] mb-3 font-semibold">How we could work together</h3>
                <p class="mb-2">Clients come to us with a vision, and we turn that vision into reality using
                    animation,
                    live-action filming, or a mix of
                    both. Our creative team dives into each brief with fresh ideas tailored to your goals.</p>
                <p class="mb-2">We understand that every client has their own marketing objectives. That’s why we’re
                    here to support you at every
                    step—whether it’s concept development, production, or even distribution if needed.</p>
                <p class="mb-2">Our client list includes some of the biggest names in the world. We've shown time and
                    time again that we can handle even
                    the most challenging projects with confidence and quality.</p>
                <p>Over the past seven years, our commitment to creativity and high standards has helped us grow
                    steadily. We've earned
                    glowing testimonials and built a strong reputation for delivering top-quality productions that
                    clients love.</p>
            </div>
        </div>
    </section>

    <!-- Videos -->
    <section class="bg-black md:py-20 py-10">
        <span class="text-[#C1AB65] text-[18px] text-center block uppercase">The Cinevibe Media</span>
        <h2 class="text-white md:text-[45px] text-[30px] text-center uppercase mb-5">Our Videos</h2>
        <div class="max-w-screen-xl mx-auto px-4 grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-5">
            @foreach ($videos->take(12) as $video)
                <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/{{ $video->video_path }}"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen title="{{ $video->title }}">
                </iframe>
            @endforeach
        </div>
    </section>

    <!-- Productions -->
    <section class="bg-black md:py-20 py-10">
        <span class="text-[#C1AB65] text-[18px] text-center block uppercase">The Cinevibe Media</span>
        <h2 class="text-white md:text-[45px] text-[30px] text-center uppercase mb-5">Productions</h2>
        <div class="max-w-screen-xl mx-auto px-4 grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-5">
            <div class="border border-gray-700 px-5 py-10 rounded-lg">
                <img class="w-full mb-5" src="assets/img/film-production/feature-film.jpg" alt="production">
                <p class="text-[#C1AB65] uppercase text-sm mb-5">Cinevibe Media</p>
                <h3 class="text-[20px] text-white font-semibold">Film Production</h3>
                <p class="text-white text-justify line-clamp-3">Cinevibe Media is a full-service film production
                    company
                    located in
                    Dhaka. We help you share your story with the world
                    using creative and clear visual storytelling. Whether you're a brand, a start-up, an artist, or
                    someone with a unique
                    idea, we offer custom video solutions tailored to your marketing goals. Our passionate team and
                    strong skills make us
                    one of the top choices for video production in Bangladesh.</p>
                <a class="text-[#C1AB65]" href="{{ route('feature-film') }}">Read More...</a>
            </div>
            <div class="border border-gray-700 px-5 py-10 rounded-lg">
                <img class="w-full mb-5" src="assets/img/celibrity-management/youtuber/1.jpg" alt="production">
                <p class="text-[#C1AB65] uppercase text-sm mb-5">Cinevibe Media</p>
                <h3 class="text-[20px] text-white font-semibold">Youtuber</h3>
                <p class="text-white text-justify line-clamp-3">Whether you're just starting out or already creating
                    content,
                    Cinevibe Media helps YouTubers take their channels to the
                    next level. From high-quality video production and creative scripting to eye-catching thumbnails and
                    SEO-rich titles, we
                    make sure your content stands out. Our team knows what engages viewers and how to keep them coming
                    back for more. With
                    our editing finesse and strategic planning, your videos will look polished, professional, and
                    tailored to your audience.</p>
                <a class="text-[#C1AB65]" href="{{ route('youtuber') }}">Read More...</a>
            </div>
            <div class="border border-gray-700 px-5 py-10 rounded-lg">
                <img class="w-full mb-5" src="assets/img/event-management/birthday.jpg" alt="production">
                <p class="text-[#C1AB65] uppercase text-sm mb-5">Cinevibe Media</p>
                <h3 class="text-[20px] text-white font-semibold">Birthday / Party Planning</h3>
                <p class="text-white text-justify line-clamp-3">What could be more exciting for a child than their
                    birthday? Every
                    parent wants that special day to be perfect. That’s
                    where a professional event planner comes in—and Twizzle Events is here to make the magic happen and
                    give your child a
                    celebration they’ll remember forever.</p>
                <a class="text-[#C1AB65]" href="{{ route('birthday-party-planning') }}">Read More...</a>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="bg-testimonial bg-cover bg-center">
        <div class="bg-black bg-opacity-80 md:py-20 py-10">
            <span class="text-[#C1AB65] text-[18px] text-center block uppercase">The Cinevibe Media</span>
            <h2 class="text-white md:text-[45px] text-[30px] text-center uppercase">What Customer's Say</h2>
            <div class="slider-testimonials w-full max-w-screen-md mx-auto px-4 text-center text-lg">
                <div class="flex flex-col items-center text-center">
                    <div class="mt-5">
                        <svg class="fill-[#A7A7A0] h-16 w-16 mx-auto" viewBox="0 0 448 512">
                            <path
                                d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z" />
                        </svg>
                    </div>
                    <p class="text-white mb-5">
                        Despite the abundance of pseudo-creative phrases scattered across the internet, most have lost
                        their charm to excessive
                        modification, overwritten syntax, or whimsical nonsense. Before inserting any such content, it's
                        wise to double-check
                        for missteps that might leave your audience raising an eyebrow.
                    </p>
                    <span class="text-white border-b">Sazzad Hossain</span>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="mt-5">
                        <svg class="fill-[#A7A7A0] h-16 w-16 mx-auto" viewBox="0 0 448 512">
                            <path
                                d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z" />
                        </svg>
                    </div>
                    <p class="text-white mb-5">
                        Countless iterations of placeholder text flood design templates, often tweaked so heavily they
                        border on surreal. If
                        you’re planning to feature one in a project, make sure you’re not unknowingly showcasing
                        something that reads like a
                        cryptic joke to the unsuspecting viewer.
                    </p>
                    <span class="text-white border-b">Tawhidul Islam</span>
                </div>
                <div class="flex flex-col items-center text-center">
                    <div class="mt-5">
                        <svg class="fill-[#A7A7A0] h-16 w-16 mx-auto" viewBox="0 0 448 512">
                            <path
                                d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z" />
                        </svg>
                    </div>
                    <p class="text-white mb-5">
                        The world of dummy text is vast—some versions quirky, others disturbingly absurd. While they may
                        look harmless at first
                        glance, a second read might reveal awkward humor or misplaced words. Take caution: what’s funny
                        in filler can be
                        embarrassing in production.

                        Want me to tailor these for a specific audience or tone (e.g. professional, tech-savvy, witty)?
                        I'd love to play with
                        more variations!

                    </p>
                    <span class="text-white border-b">Tanzilur Rahman</span>
                </div>
            </div>
        </div>
    </section>
@endsection
