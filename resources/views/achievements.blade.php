@extends('layouts.app')

@section('title', 'Achievements | Pajo National High School - SHS')

@section('content')
    {{-- PAGE HEADER --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">School & Student Achievements</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">Celebrating milestones, honors, and proud competitive moments achieved by Pajo National High School Senior High learners.</p>
        </div>
    </section>

    {{-- ACHIEVEMENTS GRID (ALL SCHOOL ACHIEVEMENTS) --}}
    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="grid gap-8 md:grid-cols-3">
            
            {{-- Item 1 --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group">
                <div class="h-52 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/achievements/academic-excellence.jpg') }}" alt="Lapu-Lapu City Division Research Honoree" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md">Academic Track</span>
                    <h3 class="font-bold text-gray-900 text-lg mt-3 mb-2 group-hover:text-green-800 transition">Lapu-Lapu City Division Research Honoree</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Pajo SHS Grade 12 research teams recognized for exceptional qualitative and scientific papers during the division-wide evaluation.</p>
                </div>
            </div>

            {{-- Item 2 --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group">
                <div class="h-52 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/achievements/science-fair.jpg') }}" alt="Regional Tech-Voc Skills Exhibition" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md">TVL Track</span>
                    <h3 class="font-bold text-gray-900 text-lg mt-3 mb-2 group-hover:text-green-800 transition">Regional Tech-Voc Skills Exhibition</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Senior high TVL students securing podium finishes in practical craftsmanship, computer systems, and industrial technology tasks.</p>
                </div>
            </div>

            {{-- Item 3 --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group">
                <div class="h-52 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/achievements/sports-champions.jpg') }}" alt="CVIRAA Athletic Meet Contenders" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md">Extracurricular</span>
                    <h3 class="font-bold text-gray-900 text-lg mt-3 mb-2 group-hover:text-green-800 transition">CVIRAA Athletic Meet Contenders</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Pajo student-athletes displaying immense discipline, teamwork, and sportsmanship representing the school in regional sports leagues.</p>
                </div>
            </div>

            {{-- Item 4 --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group">
                <div class="h-52 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/achievements/sports-champions-2.jpg') }}" alt="Regional Sports & Martial Arts Excellence" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md">Athletics</span>
                    <h3 class="font-bold text-gray-900 text-lg mt-3 mb-2 group-hover:text-green-800 transition">Regional Sports & Martial Arts Champions</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Pajo SHS delegates showcasing exceptional prowess, discipline, and winning medals in multi-sport competitions and martial arts tournaments.</p>
                </div>
            </div>

            {{-- Item 5 --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group">
                <div class="h-52 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/achievements/science-math-press.jpg') }}" alt="Division Schools Press Conference & Science Fair" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                </div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md">Academic & Journalism</span>
                    <h3 class="font-bold text-gray-900 text-lg mt-3 mb-2 group-hover:text-green-800 transition">Division Schools Press Conference & Science Fair</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Participating delegates and student writers showcasing excellence in journalism, mathematical problem-solving, and scientific innovations.</p>
                </div>
            </div>

        </div>
    </section>
@endsection