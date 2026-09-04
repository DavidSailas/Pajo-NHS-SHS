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
            <div class="aspect-video w-full rounded-2xl overflow-hidden shadow-2xl border-4 border-green-800/60 bg-black group relative">
                <video class="w-full h-full object-cover" controls poster="{{ asset('images/video-poster.jpg') }}">
                    <source src="{{ asset('videos/promo.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>

    {{-- QUICK ACCESS CARDS (WHY CHOOSE US) --}}
    <section class="max-w-6xl mx-auto px-4 -mt-12 relative z-20 mb-20">
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
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group">
                    <div class="h-52 bg-gray-100 overflow-hidden relative">
                        <img src="{{ asset('images/achievements/academic-excellence.jpg') }}" alt="Lapu-Lapu City Division Research Honoree" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md">Academic Track</span>
                        <h4 class="font-bold text-gray-900 text-lg mt-3 mb-2 group-hover:text-green-800 transition">Lapu-Lapu City Division Research Honoree</h4>
                        <p class="text-sm text-gray-600 leading-relaxed">Pajo SHS Grade 12 research teams recognized for exceptional qualitative and scientific papers during the division-wide evaluation.</p>
                    </div>
                </div>

                {{-- Achievement Card 2 --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group">
                    <div class="h-52 bg-gray-100 overflow-hidden relative">
                        <img src="{{ asset('images/achievements/science-fair.jpg') }}" alt="Regional Tech-Voc Skills Exhibition" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md">TVL Track</span>
                        <h4 class="font-bold text-gray-900 text-lg mt-3 mb-2 group-hover:text-green-800 transition">Regional Tech-Voc Skills Exhibition</h4>
                        <p class="text-sm text-gray-600 leading-relaxed">Senior high TVL students securing podium finishes in practical craftsmanship, computer systems, and industrial technology tasks.</p>
                    </div>
                </div>

                {{-- Achievement Card 3 --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group">
                    <div class="h-52 bg-gray-100 overflow-hidden relative">
                        <img src="{{ asset('images/achievements/sports-champions.jpg') }}" alt="CVIRAA Athletic Meet Contenders" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6">
                        <span class="text-xs font-semibold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md">Extracurricular</span>
                        <h4 class="font-bold text-gray-900 text-lg mt-3 mb-2 group-hover:text-green-800 transition">CVIRAA Athletic Meet Contenders</h4>
                        <p class="text-sm text-gray-600 leading-relaxed">Pajo student-athletes displaying immense discipline, teamwork, and sportsmanship representing the school in regional sports leagues.</p>
                    </div>
                </div>

            </div>

            <div class="text-center mt-12">
                <a href="{{ route('achievements') }}" class="inline-flex items-center gap-2 bg-white border-2 border-green-800 text-green-800 font-bold px-7 py-3 rounded-xl hover:bg-green-800 hover:text-white transition-all shadow-sm">
                    View All Achievements &rarr;
                </a>
            </div>
        </div>
    </section>

    {{-- INVITATION / CTA BANNER --}}
    <section class="bg-gradient-to-r from-green-950 via-green-900 to-emerald-950 text-white py-16 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px] pointer-events-none"></div>
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-2xl md:text-4xl font-extrabold mb-4">Ready to Enroll at Pajo National High School - SHS?</h2>
            <p class="text-green-100 text-base md:text-lg mb-8 max-w-xl mx-auto font-light leading-relaxed">Take the next big step in your senior high school journey. Connect with our registrar's office or send us an inquiry.</p>
            <a href="{{ route('contact') }}" class="inline-block bg-white text-green-950 font-bold px-8 py-3.5 rounded-xl shadow-lg hover:bg-green-50 transition transform hover:-translate-y-0.5">
                Get in Touch With Us
            </a>
        </div>
    </section>

@endsection