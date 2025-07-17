<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cinevibe Media - Movies, TV and Celebrities</title>
    <link rel="shortcut icon" href="/assets/img/logo.webp" type="image/png" />
    <link rel="canonical" href="https://cinevibemedia.com/" />
    <meta name="release-date" content="2025-07-05" />
    <meta name="description"
        content="Cinevibe Media is a full-service production house offering film, music, photography, acting training, celebrity & event management, interviews, and brand promotion." />
    <meta name="keywords"
        content="Films production, Movies production, Photography, Musics production, Celebrities production " />
    <meta property="og:title" content="Cinevibe Media - Movies, TV and Celebrities" />
    <meta property="og:description"
        content="Cinevibe Media is a full-service production house offering film, music, photography, acting training, celebrity & event management, interviews, and brand promotion." />
    <meta property="og:image" content="https://cinevibemedia.com/assets/img/logo.webp" />
    <link rel="og:url" href="https://cinevibemedia.com/" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Cinevibe Media - Movies, TV and Celebrities" />
    <meta name="twitter:description"
        content="Cinevibe Media is a full-service production house offering film, music, photography, acting training, celebrity & event management, interviews, and brand promotion." />
    <meta name="twitter:image" content="/assets/img/logo.webp" />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="EN" />
    <script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "LocalBusiness",
			"address": {
			"@type": "PostalAddress",
			"addressLocality": "Dhaka",
			"addressRegion": "Bangladesh",
			"streetAddress": "Mohanagar Project Road 3, Block D, House 34 1st Floor (Flat 202)"
			},
			"description": "Cinevibe Media - Movies, TV and Celebrities",
			"name": "Cinevibe Media",
			"telephone": "+880 1792095788"
		}
	</script>

    <script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "WebSite",
			"url": "https://cinevibemedia.com/",
			"potentialAction": [
				{
					"@type": "SearchAction",
					"target": {
					"@type": "EntryPoint",
					"urlTemplate": "https://cinevibemedia.com/search?q={search_term_string}"
					},
					"query-input": {
					"@type": "PropertyValueSpecification",
					"valueRequired": "http://schema.org/True",
					"valueName": "search_term_string"
					}
				},
				{
					"@type": "SearchAction",
					"target": {
					"@type": "EntryPoint",
					"urlTemplate": "android-app://com.cinevibemedia.android/cinevibemedia/search?q={search_term_string}"
					},
					"query-input": {
					"@type": "PropertyValueSpecification",
					"valueRequired": "http://schema.org/True",
					"valueName": "search_term_string"
					}
				}
			]
		}
	</script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-WS4GF5R5PQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-WS4GF5R5PQ');
    </script>

    <link rel="shortcut icon" href="{{ asset('assets/img/logo.webp') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="assets/js/tw-configue.js"></script>
</head>

<body class="font-josefin">

    <!-- Navigation bar -->
    <nav class="bg-black px-6 py-4 flex items-center justify-between relative z-50 text-[14px] sticky top-0 w-full">
        <div class="flex items-center space-x-4">
            <a href="/">
                <img src="{{ asset('assets/img/logo.webp') }}" alt="cvm logo"
                    class="h-8 xl:h-6 transition-all duration-300" />
            </a>
        </div>

        <!-- Mobile menu button -->
        <button id="mobile-menu-button" class="xl:hidden text-white focus:outline-none transition-all duration-500">
            <svg id="menu-icon" class="h-6 w-6 transition-all duration-300" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="close-icon" class="h-6 w-6 transition-all duration-800 hidden" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Desktop Menu -->
        <ul class="hidden xl:flex text-white gap-5 transition-all duration-300">
            <li class="mt-5"><a href="/" class="hover:text-[#C1AB65] py-5 transition-all duration-300">Home</a>
            </li>

            <li class="relative group">
                <button class="hover:text-[#C1AB65] py-5 flex items-center gap-1 transition-all duration-300">Film
                    Production
                    <svg class="fill-white h-3 w-3 transition-transform duration-300 group-hover:rotate-180"
                        viewBox="0 0 448 512">
                        <path
                            d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                    </svg></button>
                <ul
                    class="absolute left-0 bg-white text-black shadow-md rounded w-56 opacity-0 group-hover:opacity-100 invisible group-hover:visible mt-3 group-hover:mt-0 divide-y divide-gray-300 divide-dashed overflow-hidden transition-all duration-300">
                    <li><a href="{{ route('feature-film') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] bg-white transition-all duration-300">Feature
                            Films</a></li>
                    <li><a href="{{ route('short-film') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] bg-white transition-all duration-300">Short
                            Films</a></li>
                    <li><a href="{{ route('documentary-film') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] bg-white transition-all duration-300">Documentary
                            Films</a></li>
                    <li><a href="{{ route('ad-film') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] bg-white transition-all duration-300">Ad
                            Films</a></li>
                    <li><a href="{{ route('music-videos') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] bg-white transition-all duration-300">Music
                            Videos</a></li>
                    <li><a href="{{ route('corporate-videos') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] bg-white transition-all duration-300">Corporate
                            Videos</a></li>
                </ul>
            </li>
            <li class="relative group">
                <button class="hover:text-[#C1AB65] py-5 flex items-center gap-1 transition-all duration-300">Music
                    Production <svg class="fill-white h-3 w-3 transition-transform duration-300 group-hover:rotate-180"
                        viewBox="0 0 448 512">
                        <path
                            d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                    </svg></button>
                <ul
                    class="absolute left-0 bg-white text-black shadow-md rounded w-56 opacity-0 group-hover:opacity-100 invisible group-hover:visible mt-3 group-hover:mt-0 divide-y divide-gray-300 divide-dashed overflow-hidden transition-all duration-300">
                    <li><a href="{{ route('song-writing') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Song
                            Writing</a></li>
                    <li><a href="{{ route('sound-designing') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Sound
                            Designing</a></li>
                    <li><a href="{{ route('sound-recording') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Sound
                            Recording</a></li>
                    <li><a href="{{ route('mixing-and-mastering') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Mixing
                            &
                            Mastering</a></li>
                </ul>
            </li>
            <li class="relative group">
                <button
                    class="hover:text-[#C1AB65] py-5 flex items-center gap-1 transition-all duration-300">Photography
                    <svg class="fill-white h-3 w-3 transition-transform duration-300 group-hover:rotate-180"
                        viewBox="0 0 448 512">
                        <path
                            d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                    </svg></button>
                <ul
                    class="absolute left-0 bg-white text-black shadow-md rounded w-56 opacity-0 group-hover:opacity-100 invisible group-hover:visible mt-3 group-hover:mt-0 divide-y divide-gray-300 divide-dashed overflow-hidden transition-all duration-300">
                    <li><a href="{{ route('wedding-photography') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Wedding
                            Photography</a></li>
                    <li><a href="{{ route('pre-wedding-photography') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Pre
                            Wedding
                            Photography</a>
                    </li>
                    <li><a href="{{ route('event-photography') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Event
                            Photography</a></li>
                    <li><a href="{{ route('maternity-photography') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Maternity
                            Photography</a></li>
                    <li><a href="{{ route('corporate-photography') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Corporate
                            Photography</a></li>
                    <li><a href="{{ route('kids-photography') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Kids
                            Photography</a></li>
                    <li><a href="{{ route('fashion-photography') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Fashion
                            /
                            Photography</a></li>
                    <li><a href="{{ route('e-commerce-photography') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">E-Commerce
                            Photography</a></li>
                </ul>
            </li>
            <li class="relative group">
                <button class="hover:text-[#C1AB65] py-5 flex items-center gap-1 transition-all duration-300">Event
                    Management <svg class="fill-white h-3 w-3 transition-transform duration-300 group-hover:rotate-180"
                        viewBox="0 0 448 512">
                        <path
                            d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                    </svg></button>
                <ul
                    class="absolute left-0 bg-white text-black shadow-md rounded w-56 opacity-0 group-hover:opacity-100 invisible group-hover:visible mt-3 group-hover:mt-0 divide-y divide-gray-300 divide-dashed overflow-hidden transition-all duration-300">
                    <li><a href="{{ route('corporate-event') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Corporate
                            Event</a></li>
                    <li><a href="{{ route('music-concert') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Music
                            Concert</a></li>
                    <li><a href="{{ route('wedding-planning') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Wedding
                            Planning</a></li>
                    <li><a href="{{ route('birthday-party-planning') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Birthday
                            /
                            Party Planning</a></li>
                    <li><a href="{{ route('road-shows-mall-shows') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Road
                            Shows
                            / Mall Shows</a></li>
                </ul>
            </li>
            <li class="relative group">
                <button class="hover:text-[#C1AB65] py-5 flex items-center gap-1 transition-all duration-300">Celebrity
                    Management
                    <svg class="fill-white h-3 w-3 transition-transform duration-300 group-hover:rotate-180"
                        viewBox="0 0 448 512">
                        <path
                            d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                    </svg></button>
                <ul
                    class="absolute left-0 bg-white text-black shadow-md rounded w-56 opacity-0 group-hover:opacity-100 invisible group-hover:visible mt-3 group-hover:mt-0 divide-y divide-gray-300 divide-dashed overflow-hidden transition-all duration-300">
                    <li><a href="{{ route('actors') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Actors</a>
                    </li>
                    <li><a href="{{ route('singers-musician') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Singers
                            /
                            Musician</a></li>
                    <li><a href="{{ route('youtuber') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Youtuber</a>
                    </li>
                    <li><a href="{{ route('comedians') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Comedians</a>
                    </li>
                    <li><a href="{{ route('dance-group') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Dance
                            Group</a></li>
                    <li><a href="{{ route('sports-professionals') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Sports
                            Professionals</a></li>
                    <li><a href="{{ route('social-workers') }}"
                            class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Social
                            Workers</a></li>
                </ul>
            </li>
            <li class="mt-5"><a href="{{ route('studio-on-hire') }}"
                    class="hover:text-[#C1AB65] py-5 transition-all duration-300">Studio On
                    Hire</a></li>
            <li class="mt-5"><a href="{{ route('modelling-agency') }}"
                    class="hover:text-[#C1AB65] py-5 transition-all duration-300">Modelling
                    Agency</a></li>
            <li class="mt-5"><a href="{{ route('gallery') }}"
                    class="hover:text-[#C1AB65] py-5 transition-all duration-300">Gallery</a></li>
            <li class="mt-5"><a href="{{ route('contact') }}"
                    class="hover:text-[#C1AB65] py-5 transition-all duration-300">Contact</a></li>
        </ul>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu xl:hidden absolute top-full left-0 right-0 bg-black w-full px-6">
            <ul class="text-white space-y-4 py-4">
                <li><a href="/" class="hover:text-[#C1AB65] block py-2 transition-all duration-300">Home</a>
                </li>

                <li class="relative">
                    <button
                        class="mobile-dropdown-btn hover:text-[#C1AB65] w-full flex justify-between items-center py-2 transition-all duration-300">Film
                        Production
                        <svg class="dropdown-arrow fill-white h-4 w-4 transform transition-transform duration-300"
                            viewBox="0 0 448 512">
                            <path
                                d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                        </svg>
                    </button>
                    <ul class="mobile-dropdown-content pl-4 space-y-2 transition-all duration-300">
                        <li><a href="{{ route('feature-film') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Feature
                                Films</a></li>
                        <li><a href="{{ route('short-film') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Short
                                Films</a></li>
                        <li><a href="{{ route('documentary-film') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Documentary
                                Films</a></li>
                        <li><a href="{{ route('ad-film') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Ad
                                Films</a></li>
                        <li><a href="{{ route('music-videos') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Music
                                Videos</a></li>
                        <li><a href="{{ route('corporate-videos') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Corporate
                                Videos</a></li>
                    </ul>
                </li>
                <li class="relative">
                    <button
                        class="mobile-dropdown-btn hover:text-[#C1AB65] w-full flex justify-between items-center py-2 transition-all duration-300">Music
                        Production
                        <svg class="dropdown-arrow fill-white h-4 w-4 transform transition-transform duration-300"
                            viewBox="0 0 448 512">
                            <path
                                d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                        </svg>
                    </button>
                    <ul class="mobile-dropdown-content pl-4 space-y-2 transition-all duration-300">
                        <li><a href="{{ route('song-writing') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Song
                                Writing</a></li>
                        <li><a href="{{ route('sound-designing') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Sound
                                Designing</a></li>
                        <li><a href="{{ route('sound-recording') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Sound
                                Recording</a></li>
                        <li><a href="{{ route('mixing-and-mastering') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Mixing
                                &
                                Mastering</a></li>
                    </ul>
                </li>
                <li class="relative">
                    <button
                        class="mobile-dropdown-btn hover:text-[#C1AB65] w-full flex justify-between items-center py-2 transition-all duration-300">Photography
                        <svg class="dropdown-arrow fill-white h-4 w-4 transform transition-transform duration-300"
                            viewBox="0 0 448 512">
                            <path
                                d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                        </svg>
                    </button>
                    <ul class="mobile-dropdown-content pl-4 space-y-2 transition-all duration-300">
                        <li><a href="{{ route('wedding-photography') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Wedding
                                Photography</a></li>
                        <li><a href="{{ route('pre-wedding-photography') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Pre
                                Wedding
                                Photography</a>
                        </li>
                        <li><a href="{{ route('event-photography') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Event
                                Photography</a></li>
                        <li><a href="{{ route('maternity-photography') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Maternity
                                Photography</a></li>
                        <li><a href="{{ route('corporate-event') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Corporate
                                Photography</a></li>
                        <li><a href="{{ route('kids-photography') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Kids
                                Photography</a></li>
                        <li><a href="{{ route('fashion-photography') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Fashion
                                /
                                Photography</a></li>
                        <li><a href="{{ route('e-commerce-photography') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">E-Commerce
                                Photography</a></li>
                    </ul>
                </li>
                <li class="relative">
                    <button
                        class="mobile-dropdown-btn hover:text-[#C1AB65] w-full flex justify-between items-center py-2 transition-all duration-300">Event
                        Management
                        <svg class="dropdown-arrow fill-white h-4 w-4 transform transition-transform duration-300"
                            viewBox="0 0 448 512">
                            <path
                                d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                        </svg>
                    </button>
                    <ul class="mobile-dropdown-content pl-4 space-y-2 transition-all duration-300">
                        <li><a href="{{ route('corporate-event') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Corporate
                                Event</a></li>
                        <li><a href="{{ route('music-concert') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Music
                                Concert</a></li>
                        <li><a href="{{ route('wedding-planning') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Wedding
                                Planning</a></li>
                        <li><a href="{{ route('birthday-party-planning') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Birthday
                                /
                                Party Planning</a></li>
                        <li><a href="{{ route('road-shows-mall-shows') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Road
                                Shows
                                / Mall Shows</a></li>
                    </ul>
                </li>
                <li class="relative">
                    <button
                        class="mobile-dropdown-btn hover:text-[#C1AB65] w-full flex justify-between items-center py-2 transition-all duration-300">Celebrity
                        Management
                        <svg class="dropdown-arrow fill-white h-4 w-4 transform transition-transform duration-300"
                            viewBox="0 0 448 512">
                            <path
                                d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                        </svg>
                    </button>
                    <ul class="mobile-dropdown-content pl-4 space-y-2 transition-all duration-300">
                        <li><a href="{{ route('actors') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Actors</a>
                        </li>
                        <li><a href="{{ route('singers-musician') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Singers
                                /
                                Musician</a></li>
                        <li><a href="{{ route('youtuber') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Youtuber</a>
                        </li>
                        <li><a href="{{ route('comedians') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Comedians</a>
                        </li>
                        <li><a href="{{ route('dance-group') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Dance
                                Group</a></li>
                        <li><a href="{{ route('sports-professionals') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Sports
                                Professionals</a></li>
                        <li><a href="{{ route('social-workers') }}"
                                class="block px-4 py-2 hover:text-[#C1AB65] transition-all duration-300">Social
                                Workers</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('studio-on-hire') }}"
                        class="hover:text-[#C1AB65] block py-2 transition-all duration-300">Studio
                        On Hire</a>
                </li>
                <li><a href="{{ route('modelling-agency') }}"
                        class="hover:text-[#C1AB65] block py-2 transition-all duration-300">Modelling
                        Agency</a>
                </li>
                <li><a href="{{ route('gallery') }}"
                        class="hover:text-[#C1AB65] block py-2 transition-all duration-300">Gallery</a>
                </li>
                <li><a href="{{ route('contact') }}"
                        class="hover:text-[#C1AB65] block py-2 transition-all duration-300">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('body')
    <footer class="bg-black">
        <div
            class="text-white py-12 px-6 max-w-screen-xl mx-auto px-4 grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-10">
            <div>
                <a href="/">
                    <img src="assets/img/logo.webp" alt="cvm logo" class="h-12 mb-4 inline">
                </a>
                <p class="text-sm leading-relaxed">
                    Cinevibe Media is a complete production house which covers everything
                    from film
                    production -
                    music production - photography - acting training - celebrity management - event
                    management -
                    celebrity
                    interviews - brand promotion.
                </p>
                <div class="flex space-x-4 mt-4">
                    <a class="bg-white h-8 w-8 p-3 flex justify-center items-center text-black rounded-full"
                        href="https://www.facebook.com/cinevibemedia/" target="_blank"><svg viewBox="0 0 320 512">
                            <path
                                d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                        </svg></a>
                    <a class="bg-white h-8 w-8 p-2 flex justify-center items-center text-black rounded-full"
                        href="#"><svg viewBox="0 0 448 512">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg></a>
                    <a class="bg-white h-8 w-8 p-2 flex justify-center items-center text-black rounded-full"
                        href="#"><svg viewBox="0 0 576 512">
                            <path
                                d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                        </svg></a>
                </div>
            </div>

            <div>
                <h4 class="font-semibold text-[20px] mb-4">Useful Links</h4>
                <div class="flex flex-col gap-1">
                    <div>
                        <a href="/" class="hover:text-[#C1AB65] text-sm transition-all duration-300">Home</a>
                    </div>
                    <div>
                        <a href="{{ route('about') }}"
                            class="hover:text-[#C1AB65] text-sm transition-all duration-300">About</a>
                    </div>
                    <div>
                        <a href="{{ route('gallery') }}"
                            class="hover:text-[#C1AB65] text-sm transition-all duration-300">Gallery</a>
                    </div>
                    <div>
                        <a href="{{ route('modelling-agency') }}"
                            class="hover:text-[#C1AB65] text-sm transition-all duration-300">Modelling
                            Agency</a>
                    </div>
                    <div>
                        <a href="{{ route('contact') }}"
                            class="hover:text-[#C1AB65] text-sm transition-all duration-300">Contact</a>
                    </div>
                </div>
            </div>

            <div>
                <h4 class="font-semibold text-[20px] mb-4">Useful Links</h4>
                <div class="flex flex-col gap-1">
                    <div>
                        <a href="{{ route('feature-film') }}"
                            class="hover:text-[#C1AB65] text-sm transition-all duration-300">Film
                            Productions</a>
                    </div>
                    <div>
                        <a href="{{ route('song-writing') }}"
                            class="hover:text-[#C1AB65] text-sm transition-all duration-300">Music
                            Productions</a>
                    </div>
                    <div>
                        <a href="{{ route('wedding-photography') }}"
                            class="hover:text-[#C1AB65] text-sm transition-all duration-300">Photography</a>
                    </div>
                    <div>
                        <a href="{{ route('actors') }}"
                            class="hover:text-[#C1AB65] text-sm transition-all duration-300">Acting
                            Training</a>
                    </div>
                    <div>
                        <a href="{{ route('corporate-event') }}"
                            class="hover:text-[#C1AB65] text-sm transition-all duration-300">Celebrity
                            Management</a>
                    </div>
                </div>
            </div>

            <div>
                <h4 class="font-semibold text-[20px] mb-4">Get In Touch</h4>
                <div class="flex items-start mb-2">
                    <span class="mr-2"><svg class="fill-white h-3 w-3 mt-1" viewBox="0 0 512 512">
                            <path
                                d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" />
                        </svg></span>
                    <div>
                        <p class="text-[16px]">Phone:</p>
                        <p class="text-gray-400">+880 1792095788</p>
                    </div>
                </div>
                <div class="flex items-start mb-2">
                    <span class="mr-2"><svg class="fill-white h-3 w-3 mt-1" viewBox="0 0 512 512">
                            <path
                                d="M64 208.1L256 65.9 448 208.1l0 47.4L289.5 373c-9.7 7.2-21.4 11-33.5 11s-23.8-3.9-33.5-11L64 255.5l0-47.4zM256 0c-12.1 0-23.8 3.9-33.5 11L25.9 156.7C9.6 168.8 0 187.8 0 208.1L0 448c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-239.9c0-20.3-9.6-39.4-25.9-51.4L289.5 11C279.8 3.9 268.1 0 256 0z" />
                        </svg></span>
                    <div>
                        <p class="text-[16px]">Email:</p>
                        <p class="text-gray-400">info@cinevibemedia.com</p>
                    </div>
                </div>
                <div class="flex items-start mb-2">
                    <span class="mr-2"><svg class="fill-white h-3 w-3 mt-1" viewBox="0 0 512 512">
                            <path
                                d="M64 208.1L256 65.9 448 208.1l0 47.4L289.5 373c-9.7 7.2-21.4 11-33.5 11s-23.8-3.9-33.5-11L64 255.5l0-47.4zM256 0c-12.1 0-23.8 3.9-33.5 11L25.9 156.7C9.6 168.8 0 187.8 0 208.1L0 448c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-239.9c0-20.3-9.6-39.4-25.9-51.4L289.5 11C279.8 3.9 268.1 0 256 0z" />
                        </svg></span>
                    <div>
                        <p class="text-[16px]">Email:</p>
                        <p class="text-gray-400">contact@cinevibemedia.com</p>
                    </div>
                </div>
                <div class="flex items-start mb-2">
                    <span class="mr-2"><svg class="fill-white h-3 w-3 mt-1" viewBox="0 0 384 512">
                            <path
                                d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                        </svg></span>
                    <div>
                        <p class="text-[16px]">
                            Address:
                        </p>
                        <p class="text-gray-400">Mohanagar Project
                            Road 3, Block D, House 34
                            1st Floor (Flat 202)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <p class="text-white text-center py-5">© Copyright. All Right Reserved.</p>
        </div>
    </footer>

    <!-- jQuery & Slick Slider JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Custom Script -->
    <script src="assets/js/script.js"></script>

</body>

</html>
