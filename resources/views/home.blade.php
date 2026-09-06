@extends('layouts.app')

@section('title', 'Home | Pajo National High School - SHS')

@section('content')

    {{-- HERO SECTION --}}
    <section class="relative bg-gradient-to-br from-green-950 via-green-900 to-emerald-950 text-white py-20 md:py-28 overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px] pointer-events-none"></div>
        <div class="max-w-5xl mx-auto px-4 text-center relative z-10">
            <span class="inline-flex items-center gap-2 bg-green-800/80 text-green-200 text-xs font-medium px-3.5 py-1.5 rounded-full uppercase tracking-wider mb-6 border border-green-700/60 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                Official Senior High School Portal
            </span>
            <h1 class="text-3xl md:text-6xl font-extrabold tracking-tight mb-6 leading-tight">Welcome to Pajo National High School <span class="text-emerald-400">- SHS</span></h1>
            <p class="text-base md:text-xl text-green-100 max-w-2xl mx-auto mb-12 font-light leading-relaxed">Empowering minds, shaping characters, and building pathways to success. Your future starts here with quality public education in Lapu-Lapu City.</p>

            {{-- Promotional Video Container --}}
            {{-- TODO: replace images/video-poster.jpg with a real thumbnail frame from the promo video --}}
            <div id="promo-video-wrapper" class="aspect-video w-full rounded-2xl overflow-hidden shadow-2xl border-4 border-green-800/60 bg-gradient-to-br from-green-800 to-green-950 group relative cursor-pointer">
                <video id="promo-video" class="w-full h-full object-cover" poster="{{ asset('images/video-poster.jpg') }}" preload="metadata">
                    <source src="{{ asset('videos/promo.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>

                {{-- Play overlay — click to reveal controls and start playback --}}
                <div id="promo-video-overlay" class="absolute inset-0 flex flex-col items-center justify-center bg-black/30 group-hover:bg-black/40 transition">
                    <button type="button" id="promo-video-play"
                            class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-white/95 text-green-900 flex items-center justify-center shadow-xl transform group-hover:scale-110 transition">
                        <svg class="w-8 h-8 md:w-10 md:h-10 ml-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </button>
                    <p class="mt-5 text-white font-semibold text-sm md:text-base tracking-wide">Watch Our School Story</p>
                    <p class="text-green-200 text-xs mt-1">9:32</p>
                </div>
            </div>

            <script>
                (function () {
                    const wrapper = document.getElementById('promo-video-wrapper');
                    const video   = document.getElementById('promo-video');
                    const overlay = document.getElementById('promo-video-overlay');

                    function playVideo() {
                        overlay.classList.add('hidden');
                        video.setAttribute('controls', 'true');
                        video.play();
                    }

                    wrapper.addEventListener('click', playVideo);
                    video.addEventListener('pause', function () {
                        if (video.currentTime === 0) overlay.classList.remove('hidden');
                    });
                    video.addEventListener('ended', function () {
                        overlay.classList.remove('hidden');
                    });
                })();
            </script>
        </div>
    </section>

    {{-- STATS STRIP (floating card, overlaps hero bottom edge) --}}
    {{-- TODO: replace these placeholder figures with the school's real numbers --}}
    <div class="max-w-5xl mx-auto px-4 -mt-10 md:-mt-12 relative z-20">
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 grid grid-cols-2 md:grid-cols-4 divide-y divide-gray-100 md:divide-y-0 md:divide-x">
            <div class="flex items-center gap-3 p-6 justify-center md:justify-start">
                <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
                <div>
                    <p class="text-2xl md:text-3xl font-extrabold text-gray-900 leading-none">1,200+</p>
                    <p class="text-xs text-gray-500 uppercase tracking-wide mt-1">Enrolled Learners</p>
                </div>
            </div>
            <div class="flex items-center gap-3 p-6 justify-center md:justify-start">
                <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                </div>
                <div>
                    <p class="text-2xl md:text-3xl font-extrabold text-gray-900 leading-none">60+</p>
                    <p class="text-xs text-gray-500 uppercase tracking-wide mt-1">Dedicated Teachers</p>
                </div>
            </div>
            <div class="flex items-center gap-3 p-6 justify-center md:justify-start">
                <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </div>
                <div>
                    <p class="text-2xl md:text-3xl font-extrabold text-gray-900 leading-none">6</p>
                    <p class="text-xs text-gray-500 uppercase tracking-wide mt-1">Tracks &amp; Strands</p>
                </div>
            </div>
            <div class="flex items-center gap-3 p-6 justify-center md:justify-start">
                <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center shrink-0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                </div>
                <div>
                    <p class="text-2xl md:text-3xl font-extrabold text-gray-900 leading-none">10+</p>
                    <p class="text-xs text-gray-500 uppercase tracking-wide mt-1">Years Serving Pajo</p>
                </div>
            </div>
        </div>
    </div>

    {{-- QUICK ACCESS CARDS (WHY CHOOSE US) --}}
    <section class="max-w-6xl mx-auto px-4 pt-14 relative z-10 mb-20">
        <div class="grid gap-6 md:grid-cols-4">

            <a href="{{ route('about.facilities') }}" class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl border border-gray-100 hover:border-green-600 transition-all duration-300 group flex flex-col justify-between transform hover:-translate-y-1">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-green-50 text-green-700 flex items-center justify-center font-bold mb-5 group-hover:bg-green-700 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2 group-hover:text-green-800 transition">Facilities & Labs</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">See our campus classrooms, computer laboratories, and specialized workshop spaces.</p>
                </div>
                <span class="text-xs font-semibold text-green-700 mt-6 flex items-center gap-1 group-hover:translate-x-1 transition-transform">Explore facilities &rarr;</span>
            </a>

            <a href="{{ route('programs.academic') }}" class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl border border-gray-100 hover:border-green-600 transition-all duration-300 group flex flex-col justify-between transform hover:-translate-y-1">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-green-50 text-green-700 flex items-center justify-center font-bold mb-5 group-hover:bg-green-700 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2 group-hover:text-green-800 transition">Programs & Tracks</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Explore our Academic strands (HUMSS, ABM, GAS) and Tech-Voc tracks.</p>
                </div>
                <span class="text-xs font-semibold text-green-700 mt-6 flex items-center gap-1 group-hover:translate-x-1 transition-transform">View tracks &rarr;</span>
            </a>

            <a href="{{ route('faculty') }}" class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl border border-gray-100 hover:border-green-600 transition-all duration-300 group flex flex-col justify-between transform hover:-translate-y-1">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-green-50 text-green-700 flex items-center justify-center font-bold mb-5 group-hover:bg-green-700 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2 group-hover:text-green-800 transition">Faculty & Staff</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Meet our dedicated SHS teachers and strand coordinators guiding our learners.</p>
                </div>
                <span class="text-xs font-semibold text-green-700 mt-6 flex items-center gap-1 group-hover:translate-x-1 transition-transform">Meet faculty &rarr;</span>
            </a>

            <a href="{{ route('achievements') }}" class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-xl border border-gray-100 hover:border-green-600 transition-all duration-300 group flex flex-col justify-between transform hover:-translate-y-1">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-green-50 text-green-700 flex items-center justify-center font-bold mb-5 group-hover:bg-green-700 group-hover:text-white transition-colors duration-300 shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2 group-hover:text-green-800 transition">Achievements</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Discover our student recognitions across Lapu-Lapu City and Central Visayas.</p>
                </div>
                <span class="text-xs font-semibold text-green-700 mt-6 flex items-center gap-1 group-hover:translate-x-1 transition-transform">View achievements &rarr;</span>
            </a>

        </div>
    </section>

    {{-- SCHOOL HEAD WELCOME MESSAGE --}}
    {{-- TODO: swap in a real photo of Glenny E. Laping and her actual welcome message/quote --}}
    <section class="max-w-5xl mx-auto px-4 pb-20">
        <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden grid md:grid-cols-3">
            <div class="bg-green-50 flex items-center justify-center p-8 md:p-0">
                <img src="{{ asset('images/school-head.jpg') }}" alt="Glenny E. Laping, School Head"
                     class="w-40 h-40 md:w-full md:h-full rounded-full md:rounded-none object-cover">
            </div>
            <div class="md:col-span-2 p-8 md:p-10 flex flex-col justify-center">
                <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full w-fit mb-4">A Message From Our School Head</span>
                <p class="text-gray-700 text-base md:text-lg leading-relaxed italic mb-4">
                    "Welcome to Pajo National High School - SHS. Every learner who walks through our gates is given the guidance, resources, and opportunities to grow into a confident, values-driven graduate ready for college, work, or entrepreneurship."
                </p>
                <p class="font-bold text-gray-900">Glenny E. Laping</p>
                <p class="text-sm text-gray-500">School Head, Pajo National High School - SHS</p>
            </div>
        </div>
    </section>

    {{-- LATEST NEWS & UPDATES --}}
    {{--
        $homeNews is passed in from PageController@home (currently mock data —
        see PageController::newsPosts()). Swap that method's body for a real
        News/Announcement model query whenever one exists; this view doesn't
        need to change.
    --}}
    @php
        $homeNews = $homeNews ?? [];
        $homeNewsBadge = [
            'Announcement' => 'bg-orange-100 text-orange-700',
            'Event'        => 'bg-green-100 text-green-700',
            'Achievement'  => 'bg-blue-100 text-blue-700',
            'Advisory'     => 'bg-red-100 text-red-700',
        ];
    @endphp
    <section class="max-w-6xl mx-auto px-4 pb-20">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">The Voyager</span>
            <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 tracking-tight mt-3">Latest News & Updates</h2>
            <p class="text-base text-gray-600 mt-3">Stories and announcements from the official newsletter of Pajo Senior High School.</p>
        </div>

        <div class="grid gap-6 md:grid-cols-3">
            @foreach ($homeNews as $post)
                <article class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group">
                    <div class="h-40 bg-gradient-to-br from-green-800 to-green-950 flex items-center justify-center relative">
                        <svg class="w-9 h-9 text-green-300/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $post['icon'] }}"/>
                        </svg>
                        <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full {{ $homeNewsBadge[$post['category']] ?? 'bg-gray-100 text-gray-700' }}">
                            {{ $post['category'] }}
                        </span>
                    </div>
                    <div class="p-5">
                        <p class="text-xs text-gray-400 font-medium mb-1.5">{{ $post['date'] }}</p>
                        <p class="font-semibold text-gray-900 leading-snug group-hover:text-green-800 transition">{{ $post['title'] }}</p>
                        <p class="text-sm text-gray-500 mt-1.5 leading-relaxed">{{ $post['excerpt'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('news') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-green-800 hover:text-green-900 transition">
                View All News &amp; Updates &rarr;
            </a>
        </div>
    </section>

    {{-- FEATURED ACHIEVEMENTS SECTION (DISPLAYING 3 CARDS) --}}
    <section class="bg-gray-50 py-20 border-t border-gray-200/80">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">Pajo SHS Pride</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 tracking-tight mt-3">Featured Achievements</h2>
                <p class="text-base text-gray-600 mt-3">Highlighting milestones, academic honors, and community triumphs of Pajo National High School Senior High students.</p>
            </div>

            <div class="grid gap-8 md:grid-cols-3">

                {{-- Achievement Card 1 --}}
                <button type="button" class="home-achievement-link text-left bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group" data-image="{{ asset('images/achievements/full/2.jpg') }}">
                    <div class="h-52 bg-gray-100 overflow-hidden relative">
                        <img src="{{ asset('images/achievements/thumb/2.jpg') }}" alt="Pajo Athletics Avanti Team wins 14 gold medals in district meet" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md">Athletics</span>
                        <h4 class="font-bold text-gray-900 text-lg mt-3 mb-2 group-hover:text-green-800 transition">Pajo Athletics Avanti Team Soars High</h4>
                        <p class="text-sm text-gray-600 leading-relaxed">Pajo SHS student-athletes bring home 14 gold medals in the district meet.</p>
                    </div>
                </button>

                {{-- Achievement Card 2 --}}
                <button type="button" class="home-achievement-link text-left bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group" data-image="{{ asset('images/achievements/full/5.jpg') }}">
                    <div class="h-52 bg-gray-100 overflow-hidden relative">
                        <img src="{{ asset('images/achievements/thumb/5.jpg') }}" alt="Pajo SHS champions Clean Seas Against the Climate Crisis coastal cleanup" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md">Community Service</span>
                        <h4 class="font-bold text-gray-900 text-lg mt-3 mb-2 group-hover:text-green-800 transition">Champions 'Clean Seas Against the Climate Crisis'</h4>
                        <p class="text-sm text-gray-600 leading-relaxed">Pajo SHS joined the International Coastal Cleanup at Bridge Park, Pajo, Lapu-Lapu City, standing "One with the World."</p>
                    </div>
                </button>

                {{-- Achievement Card 3 --}}
                <button type="button" class="home-achievement-link text-left bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group" data-image="{{ asset('images/achievements/full/6.jpg') }}">
                    <div class="h-52 bg-gray-100 overflow-hidden relative">
                        <img src="{{ asset('images/achievements/thumb/6.jpg') }}" alt="Pajo SHS undertakes major renovation and facility improvement projects" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md">Facilities</span>
                        <h4 class="font-bold text-gray-900 text-lg mt-3 mb-2 group-hover:text-green-800 transition">Safe, Orderly, Child-Friendly Campus</h4>
                        <p class="text-sm text-gray-600 leading-relaxed">Ongoing renovation and facility improvement projects keep the campus safe and learner-friendly.</p>
                    </div>
                </button>

            </div>

            {{-- Quick-view lightbox for the 3 featured photos above --}}
            <div id="home-lightbox" class="hidden fixed inset-0 bg-black/90 z-[100] flex items-center justify-center px-4">
                <button id="home-lightbox-close" aria-label="Close" class="absolute top-4 right-5 text-white text-3xl leading-none hover:text-green-300">&times;</button>
                <img id="home-lightbox-image" src="" alt="" class="max-h-[85vh] max-w-full rounded-lg shadow-2xl select-none">
            </div>

            <script>
                (function () {
                    const modal = document.getElementById('home-lightbox');
                    const img   = document.getElementById('home-lightbox-image');

                    document.querySelectorAll('.home-achievement-link').forEach(function (btn) {
                        btn.addEventListener('click', function () {
                            img.src = btn.dataset.image;
                            modal.classList.remove('hidden');
                            document.body.classList.add('overflow-hidden');
                        });
                    });

                    function close() {
                        modal.classList.add('hidden');
                        document.body.classList.remove('overflow-hidden');
                    }

                    document.getElementById('home-lightbox-close').addEventListener('click', close);
                    modal.addEventListener('click', function (e) { if (e.target === modal) close(); });
                    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') close(); });
                })();
            </script>

            <div class="text-center mt-12">
                <a href="{{ route('achievements') }}" class="inline-flex items-center gap-2 bg-white border-2 border-green-800 text-green-800 font-bold px-7 py-3 rounded-xl hover:bg-green-800 hover:text-white transition-all shadow-sm">
                    View All Achievements &rarr;
                </a>
            </div>
        </div>
    </section>

    {{-- CAMPUS LIFE PHOTO STRIP --}}
    {{--
        MOCK DATA: these are stand-in cards (gradient + icon + caption) until real
        day-to-day campus/student-life photos are available. Once photos exist,
        swap each card's inner <svg> block for an <img src="{{ asset('images/campus-life/N.jpg') }}">.
    --}}
    @php
        $campusLife = [
            [
                'caption' => 'Morning Flag Ceremony',
                'icon' => 'M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9',
            ],
            [
                'caption' => 'Classroom Activities',
                'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
            ],
            [
                'caption' => 'TVL Workshop Time',
                'icon' => 'M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z',
            ],
            [
                'caption' => 'Recess & Campus Grounds',
                'icon' => 'M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0',
            ],
        ];
    @endphp
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">Life at Pajo SHS</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 tracking-tight mt-3">A Glimpse of Everyday Pajo Life</h2>
                <p class="text-base text-gray-600 mt-3">Beyond the awards — this is what a day at Pajo National High School - SHS looks like.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach ($campusLife as $moment)
                    <div class="h-40 md:h-56 rounded-xl overflow-hidden bg-gradient-to-br from-green-800 to-green-950 flex flex-col items-center justify-center text-center p-4 relative group">
                        <svg class="w-8 h-8 md:w-10 md:h-10 text-green-300/70 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $moment['icon'] }}"/>
                        </svg>
                        <p class="text-white text-xs md:text-sm font-semibold leading-snug">{{ $moment['caption'] }}</p>
                    </div>
                @endforeach
            </div>

            <p class="text-xs text-gray-400 text-center mt-6">
                Placeholder cards shown above — real campus-life photos will replace these once available.
            </p>
        </div>
    </section>

    {{-- FOLLOW US ON FACEBOOK --}}
    <section class="relative bg-gradient-to-br from-green-950 via-green-900 to-emerald-950 text-white py-20 overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px] pointer-events-none"></div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="grid gap-10 md:grid-cols-2 items-center">

                {{-- LEFT: context / value prop --}}
                <div class="text-center md:text-left">
                    <span class="inline-flex items-center gap-2 bg-green-800/80 text-green-200 text-xs font-medium px-3.5 py-1.5 rounded-full uppercase tracking-wider mb-6 border border-green-700/60">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        Stay Updated
                    </span>
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight mb-4">Follow Us on Facebook</h2>
                    <p class="text-green-100 font-light leading-relaxed mb-8 max-w-md mx-auto md:mx-0">
                        Announcements, event photos, and important advisories are posted first on our official Facebook page — don't miss an update.
                    </p>

                    <ul class="space-y-3 mb-8 max-w-md mx-auto md:mx-0">
                        <li class="flex items-center gap-3 text-sm text-green-100">
                            <span class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                            </span>
                            School announcements and advisories
                        </li>
                        <li class="flex items-center gap-3 text-sm text-green-100">
                            <span class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M14 8h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </span>
                            Event photos and highlights
                        </li>
                        <li class="flex items-center gap-3 text-sm text-green-100">
                            <span class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </span>
                            Enrollment updates and reminders
                        </li>
                    </ul>

                    <a href="https://www.facebook.com/profile.php?id=100063774956493" target="_blank" rel="noopener"
                       class="inline-flex items-center gap-2 bg-white text-green-950 font-bold px-6 py-3 rounded-xl hover:bg-green-50 transition shadow-lg transform hover:-translate-y-0.5">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.78-3.89 1.1 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12z"/>
                        </svg>
                        Visit our Facebook Page
                    </a>
                </div>

                {{-- RIGHT: live feed --}}
                <div class="flex justify-center">
                    <div class="bg-white rounded-2xl shadow-2xl p-3 md:p-4 w-full max-w-[500px]">
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100063774956493&tabs=timeline&width=500&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true"
                            width="500" height="600" style="border:none;overflow:hidden;width:100%;" class="rounded-lg"
                            scrolling="no" frameborder="0" allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- INVITATION / CTA BANNER --}}
    <section class="bg-gradient-to-br from-gray-50 to-green-50 py-20 relative overflow-hidden border-t border-gray-100">
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <span class="inline-flex items-center gap-2 bg-green-100 text-green-800 text-xs font-bold px-3.5 py-1.5 rounded-full uppercase tracking-wider mb-6">
                Admissions Open
            </span>
            <h2 class="text-2xl md:text-4xl font-extrabold mb-4 text-gray-900">Ready to Enroll at Pajo National High School - SHS?</h2>
            <p class="text-gray-600 text-base md:text-lg mb-8 max-w-xl mx-auto leading-relaxed">Take the next big step in your senior high school journey. Connect with our registrar's office or send us an inquiry.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-green-800 text-white font-bold px-8 py-3.5 rounded-xl shadow-lg hover:bg-green-900 transition transform hover:-translate-y-0.5">
                Get in Touch With Us
            </a>
        </div>
    </section>

@endsection