<header class="bg-green-800 text-white sticky top-0 z-50 shadow">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between h-16">

        <a href="{{ route('home') }}" class="flex items-center gap-2 font-bold text-base md:text-lg shrink-0">
            <img src="{{ asset('images/logo.png') }}" alt="Pajo NHS - SHS Logo" class="h-9 w-9 rounded-full">
            <span class="hidden sm:inline">Pajo NHS - SHS</span>
        </a>

        <button id="nav-toggle" class="md:hidden text-2xl" aria-label="Toggle menu">&#9776;</button>

        <nav id="nav-menu"
             class="hidden md:flex md:items-center md:gap-4 lg:gap-5 absolute md:static top-16 left-0 w-full md:w-auto bg-green-800 md:bg-transparent px-4 md:px-0 pb-4 md:pb-0 text-sm font-medium">

            <a href="{{ route('home') }}" class="block py-2 md:py-0 hover:text-green-300 transition {{ request()->routeIs('home') ? 'font-semibold underline' : '' }}">Home</a>

            {{-- About Us dropdown --}}
            <div class="relative py-2 md:py-0">
                <button type="button" data-dropdown-toggle="about-dropdown" aria-expanded="false"
                        class="dropdown-toggle hover:text-green-300 flex items-center gap-1 w-full transition {{ request()->routeIs('about.*') ? 'font-semibold underline' : '' }}">
                    About Us <span class="text-[10px] dropdown-arrow transition-transform">&#9662;</span>
                </button>
                <div id="about-dropdown"
                    class="dropdown-menu hidden md:absolute bg-green-900 md:bg-white md:text-gray-800 md:shadow-lg rounded md:mt-2 md:w-56 py-2 z-30">
                    <a href="{{ route('about.facilities') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">Facilities</a>
                    <a href="{{ route('about.laboratories') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">Laboratories</a>
                    <a href="{{ route('about.faculty-staff') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">Faculty & Staff</a>
                    <a href="{{ route('about.innovations') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">School Innovations</a>
                    <a href="{{ route('about.performance') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">Performance Indicators</a>
                    <a href="{{ route('about.charter') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">Citizen's Charter</a>
                    <a href="{{ route('about.strengthened-shs') }}" class="block px-4 py-2 hover:bg-green-700 md:hover:bg-gray-100">Strengthened SHS</a>
                </div>
            </div>

            {{-- Standalone Track & Program Links --}}
            <a href="{{ route('programs.academic') }}" class="block py-2 md:py-0 hover:text-green-300 transition {{ request()->routeIs('programs.academic') ? 'font-semibold underline' : '' }}">Academic</a>
            <a href="{{ route('programs.techpro') }}" class="block py-2 md:py-0 hover:text-green-300 transition {{ request()->routeIs('programs.techpro') ? 'font-semibold underline' : '' }}">Tech-Pro</a>
            <a href="{{ route('als') }}" class="block py-2 md:py-0 hover:text-green-300 transition {{ request()->routeIs('als') ? 'font-semibold underline' : '' }}">ALS SHS</a>

            <a href="{{ route('achievements') }}" class="block py-2 md:py-0 hover:text-green-300 transition {{ request()->routeIs('achievements') ? 'font-semibold underline' : '' }}">Achievements</a>
            
            <a href="{{ route('news') }}" class="relative block py-2 md:py-0 hover:text-green-300 transition {{ request()->routeIs('news') ? 'font-semibold underline' : '' }}">
                News
                <span class="ml-0.5 align-top inline-block text-[9px] font-bold bg-orange-500 text-white px-1.5 py-0.5 rounded-full leading-none">NEW</span>
            </a>
            
            <a href="{{ route('contact') }}" class="block py-2 md:py-0 hover:text-green-300 transition {{ request()->routeIs('contact') ? 'font-semibold underline' : '' }}">Contact</a>

            <a href="https://forms.cloud.microsoft/pages/responsepage.aspx?id=gKvjQCQgo0W_dnoHYaJNKU0uGeaaF3ZHsreFwDBfVN1UMFlVMFVZS0hJUU1PVzgxUlVUNTc1TUNPWC4u&route=shorturl"
               target="_blank" rel="noopener"
               class="block text-center py-2 md:py-1.5 px-3.5 rounded font-semibold bg-amber-400 text-green-950 hover:bg-amber-300 transition shrink-0">
                Enroll Now
            </a>

            {{-- Portal Login dropdown --}}
            <div class="relative py-2 md:py-0 shrink-0">
                <button type="button" data-dropdown-toggle="portal-dropdown" aria-expanded="false"
                        class="dropdown-toggle border border-white/60 hover:bg-white/10 md:border-white/70 text-white px-3 py-1.5 rounded font-medium flex items-center gap-1 w-full transition">
                    Portal <span class="text-[10px] dropdown-arrow transition-transform">&#9662;</span>
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