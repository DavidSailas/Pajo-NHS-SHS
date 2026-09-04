<header class="bg-green-800 text-white sticky top-0 z-50 shadow">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between h-16">

        <!-- Logo & School Name -->
        <a href="{{ route('home') }}" class="flex items-center gap-2 font-bold text-lg">
            <img src="{{ asset('images/logo.png') }}" alt="Pajo NHS - SHS Logo" class="h-10 w-10 rounded-full object-cover bg-white p-0.5">
            <span class="hidden sm:inline tracking-wide">Pajo NHS - SHS</span>
        </a>

        <!-- Mobile Menu Toggle Button -->
        <button id="nav-toggle" class="md:hidden text-2xl focus:outline-none" aria-label="Toggle menu">&#9776;</button>

        <!-- Main Navigation Links -->
        <nav id="nav-menu"
             class="hidden md:flex md:items-center md:gap-5 absolute md:static top-16 left-0 w-full md:w-auto bg-green-800 md:bg-transparent px-4 md:px-0 pb-4 md:pb-0 shadow-md md:shadow-none">

            <a href="{{ route('home') }}" class="block py-2 md:py-0 hover:text-green-300 transition {{ request()->routeIs('home') ? 'font-semibold underline' : '' }}">Home</a>

            <!-- About Us Dropdown -->
            <div class="relative group py-2 md:py-0">
                <button class="hover:text-green-300 flex items-center gap-1 w-full justify-between md:justify-start focus:outline-none py-1">
                    About Us <span class="text-xs">&#9662;</span>
                </button>
                <!-- Added pt-2 bridge so mouse never loses hover connection -->
                <div class="absolute left-0 hidden group-hover:block pt-1 w-48 z-50">
                    <div class="bg-green-900 md:bg-white md:text-gray-800 shadow-xl rounded-md py-2 border border-green-700 md:border-gray-200">
                        <a href="{{ route('about.facilities') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100 transition">Facilities</a>
                        <a href="{{ route('about.laboratories') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100 transition">Laboratories</a>
                    </div>
                </div>
            </div>

            <!-- Programs Dropdown -->
            <div class="relative group py-2 md:py-0">
                <button class="hover:text-green-300 flex items-center gap-1 w-full justify-between md:justify-start focus:outline-none py-1">
                    Programs <span class="text-xs">&#9662;</span>
                </button>
                <div class="absolute left-0 hidden group-hover:block pt-1 w-48 z-50">
                    <div class="bg-green-900 md:bg-white md:text-gray-800 shadow-xl rounded-md py-2 border border-green-700 md:border-gray-200">
                        <a href="{{ route('programs.academic') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100 transition">Academic Track</a>
                        <a href="{{ route('programs.techpro') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100 transition">Tech-Pro Track</a>
                    </div>
                </div>
            </div>

            <a href="{{ route('faculty') }}" class="block py-2 md:py-0 hover:text-green-300 transition {{ request()->routeIs('faculty') ? 'font-semibold underline' : '' }}">Faculty & Staff</a>
            <a href="{{ route('achievements') }}" class="block py-2 md:py-0 hover:text-green-300 transition {{ request()->routeIs('achievements') ? 'font-semibold underline' : '' }}">Achievements</a>
            <a href="{{ route('contact') }}" class="block py-2 md:py-0 hover:text-green-300 transition {{ request()->routeIs('contact') ? 'font-semibold underline' : '' }}">Contact</a>

            <!-- Portal Login Dropdown -->
            <div class="relative group py-2 md:py-0">
                <button class="bg-green-700 hover:bg-green-600 md:bg-white md:text-green-900 px-3 py-1.5 rounded font-medium flex items-center gap-1 w-full justify-between md:justify-start transition shadow-sm focus:outline-none">
                    Portal Login <span class="text-xs">&#9662;</span>
                </button>
                <div class="absolute right-0 hidden group-hover:block pt-1 w-48 z-50">
                    <div class="bg-green-900 md:bg-white md:text-gray-800 shadow-xl rounded-md py-2 border border-green-700 md:border-gray-200">
                        <div class="px-4 py-1 text-xs font-semibold text-green-300 md:text-gray-400 uppercase tracking-wider hidden md:block">Select Portal</div>
                        <a href="#" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100 transition">Parent Portal</a>
                        <a href="#" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100 transition">Staff Portal</a>
                        <a href="#" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100 transition">Student Portal</a>
                        <a href="#" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100 transition">Alumni Portal</a>
                    </div>
                </div>
            </div>

        </nav>
    </div>
</header>

<script>
    document.getElementById('nav-toggle').addEventListener('click', function () {
        document.getElementById('nav-menu').classList.toggle('hidden');
    });
</script>