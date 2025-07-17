<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleDropdown() {
            document.getElementById('userDropdown').classList.toggle('hidden');
        }
    </script>
</head>

<body class="bg-gray-100 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">

        <aside class="w-64 bg-[#1e293b] text-white hidden md:flex flex-col shadow-xl">
            <!-- Logo -->
            <div class="h-20 flex items-center justify-center border-b border-slate-700 bg-[#0f172a]">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/logo.webp') }}" alt="Cinevibe Logo" class="h-10 w-auto object-contain">
                </a>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 mt-4 space-y-2 px-4 text-sm font-medium">
                <a href="{{ route('dashboard') }}"
                    class="block py-2.5 px-4 rounded-lg transition-all duration-150 
                  hover:bg-blue-400 hover:text-white 
                  {{ request()->routeIs('dashboard') ? 'bg-blue-600 text-white' : '' }}">
                    Dashboard
                </a>

                <a href="{{ route('admin-gallery.index') }}"
                    class="block py-2.5 px-4 rounded-lg transition-all duration-150 
                  hover:bg-blue-400 hover:text-white 
                  {{ request()->routeIs('admin-gallery.index') ? 'bg-blue-600 text-white' : '' }}">
                    Gallery
                </a>

                <a href="{{ route('admin-videos.index') }}"
                    class="block py-2.5 px-4 rounded-lg transition-all duration-150 
                  hover:bg-blue-400 hover:text-white 
                  {{ request()->routeIs('admin-videos.index') ? 'bg-blue-600 text-white' : '' }}">
                    Videos
                </a>

                <a href="{{ route('admin.contact') }}"
                    class="block py-2.5 px-4 rounded-lg transition-all duration-150 
                  hover:bg-blue-400 hover:text-white 
                  {{ request()->routeIs('admin.contact') ? 'bg-blue-600 text-white' : '' }}">
                    Contact Submissions
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            <!-- Topbar -->
            <header class="bg-white shadow-sm h-16 flex items-center justify-between px-6 py-4 border-b">
                <div class="text-xl font-semibold text-gray-800">Dashboard</div>

                <div class="relative">
                    <button onclick="toggleDropdown()"
                        class="flex items-center gap-2 text-gray-700 hover:text-blue-600 focus:outline-none transition">
                        @if (Auth::user()->profile_photo)
                            <img src="{{ asset('storage/' . Auth::user()->profile_photo) }}"
                                class="h-9 w-9 rounded-full border-2 border-blue-200" alt="User Avatar">
                        @else
                            <img src="{{ asset('images/default-avatar.jpg') }}"
                                class="h-9 w-9 rounded-full border-2 border-gray-300" alt="Default Avatar">
                        @endif
                        <span class="font-medium">{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown -->
                    <div id="userDropdown"
                        class="absolute right-0 mt-2 w-44 bg-white rounded-md shadow-xl border hidden z-50 overflow-hidden transition-all duration-150">
                        <a href="{{ route('profile.edit') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-150">Profile</a>

                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-blue-600 hover:text-white transition-all duration-150">
                                Log Out</button>
                        </form>
                    </div>
                </div>
            </header>
            @yield('body')
        </div>
    </div>
</body>

</html>
