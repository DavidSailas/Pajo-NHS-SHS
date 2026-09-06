<header class="bg-green-800 text-white sticky top-0 z-50 shadow">
    <div class="max-w-6xl mx-auto px-4 flex items-center justify-between h-16">

        <a href="{{ route('home') }}" class="flex items-center gap-2 font-bold text-lg">
            <img src="{{ asset('images/logo.png') }}" alt="Pajo NHS - SHS Logo" class="h-10 w-10 rounded-full">
            <span class="hidden sm:inline">Pajo NHS - SHS</span>
        </a>

        <button id="nav-toggle" class="md:hidden text-2xl" aria-label="Toggle menu">&#9776;</button>

        <nav id="nav-menu"
             class="hidden md:flex md:items-center md:gap-6 absolute md:static top-16 left-0 w-full md:w-auto bg-green-800 md:bg-transparent px-4 md:px-0 pb-4 md:pb-0">

            <a href="{{ route('home') }}" class="block py-2 md:py-0 hover:text-green-300 {{ request()->routeIs('home') ? 'font-semibold underline' : '' }}">Home</a>

            {{-- About Us dropdown --}}
            <div class="relative py-2 md:py-0">
                <button type="button" data-dropdown-toggle="about-dropdown" aria-expanded="false"
                        class="dropdown-toggle hover:text-green-300 flex items-center gap-1 w-full">
                    About Us <span class="text-xs dropdown-arrow transition-transform">&#9662;</span>
                </button>
                <div id="about-dropdown"
                     class="dropdown-menu hidden md:absolute bg-green-900 md:bg-white md:text-gray-800 md:shadow-lg rounded md:mt-2 md:w-48 py-2 z-30">
                    <a href="{{ route('about.facilities') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">Facilities</a>
                    <a href="{{ route('about.laboratories') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">Laboratories</a>
                    <a href="{{ route('about.innovations') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">School Innovations</a>
                </div>
            </div>

            {{-- Programs dropdown --}}
            <div class="relative py-2 md:py-0">
                <button type="button" data-dropdown-toggle="programs-dropdown" aria-expanded="false"
                        class="dropdown-toggle hover:text-green-300 flex items-center gap-1 w-full">
                    Programs <span class="text-xs dropdown-arrow transition-transform">&#9662;</span>
                </button>
                <div id="programs-dropdown"
                     class="dropdown-menu hidden md:absolute bg-green-900 md:bg-white md:text-gray-800 md:shadow-lg rounded md:mt-2 md:w-48 py-2 z-30">
                    <a href="{{ route('programs.academic') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">Academic Track</a>
                    <a href="{{ route('programs.techpro') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">Tech-Pro Track</a>
                </div>
            </div>

            <a href="{{ route('faculty') }}" class="block py-2 md:py-0 hover:text-green-300 {{ request()->routeIs('faculty') ? 'font-semibold underline' : '' }}">Faculty & Staff</a>
            <a href="{{ route('achievements') }}" class="block py-2 md:py-0 hover:text-green-300 {{ request()->routeIs('achievements') ? 'font-semibold underline' : '' }}">Achievements</a>
            <a href="{{ route('news') }}" class="relative block py-2 md:py-0 hover:text-green-300 {{ request()->routeIs('news') ? 'font-semibold underline' : '' }}">
                News
                <span class="ml-1 align-top inline-block text-[10px] font-bold bg-orange-500 text-white px-1.5 py-0.5 rounded-full leading-none">NEW</span>
            </a>
            <a href="{{ route('contact') }}" class="block py-2 md:py-0 hover:text-green-300 {{ request()->routeIs('contact') ? 'font-semibold underline' : '' }}">Contact</a>

            {{-- Portal Login dropdown (front-end only for now — no accounts/database yet) --}}
            <div class="relative py-2 md:py-0">
                <button type="button" data-dropdown-toggle="portal-dropdown" aria-expanded="false"
                        class="dropdown-toggle bg-green-700 hover:bg-green-600 md:bg-white md:text-green-900 px-3 py-1.5 rounded font-medium flex items-center gap-1 w-full transition">
                    Portal Login <span class="text-xs dropdown-arrow transition-transform">&#9662;</span>
                </button>
                <div id="portal-dropdown"
                     class="dropdown-menu hidden md:absolute md:right-0 bg-green-900 md:bg-white md:text-gray-800 md:shadow-lg rounded md:mt-2 md:w-48 py-2 z-30">
                    <a href="{{ route('login', ['role' => 'parent']) }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">Parent Portal</a>
                    <a href="{{ route('login', ['role' => 'staff']) }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">Staff Portal</a>
                    <a href="{{ route('login', ['role' => 'student']) }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">Student Portal</a>
                    <a href="{{ route('login', ['role' => 'alumni']) }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">Alumni Portal</a>
                </div>
            </div>
        </nav>
    </div>
</header>

<script>
    document.getElementById('nav-toggle').addEventListener('click', function () {
        document.getElementById('nav-menu').classList.toggle('hidden');
    });

    // Click-based dropdowns (fixes the hover-gap bug and makes them work on touch devices)
    document.querySelectorAll('.dropdown-toggle').forEach(function (toggle) {
        toggle.addEventListener('click', function (e) {
            e.stopPropagation();
            const menu = document.getElementById(toggle.dataset.dropdownToggle);
            const isOpen = !menu.classList.contains('hidden');

            document.querySelectorAll('.dropdown-menu').forEach(function (m) {
                m.classList.add('hidden');
            });
            document.querySelectorAll('.dropdown-toggle').forEach(function (t) {
                t.setAttribute('aria-expanded', 'false');
                t.querySelector('.dropdown-arrow').style.transform = '';
            });

            if (!isOpen) {
                menu.classList.remove('hidden');
                toggle.setAttribute('aria-expanded', 'true');
                toggle.querySelector('.dropdown-arrow').style.transform = 'rotate(180deg)';
            }
        });
    });

    document.addEventListener('click', function () {
        document.querySelectorAll('.dropdown-menu').forEach(function (m) {
            m.classList.add('hidden');
        });
        document.querySelectorAll('.dropdown-toggle').forEach(function (t) {
            t.setAttribute('aria-expanded', 'false');
            const arrow = t.querySelector('.dropdown-arrow');
            if (arrow) arrow.style.transform = '';
        });
    });
</script>
