@extends('layouts.app')

@section('title', 'Facilities | Pajo National High School - SHS')

@section('content')

    {{-- PAGE HEADER --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">Our Facilities</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">A learning environment that keeps improving, year after year.</p>
        </div>
    </section>

    {{-- FACILITY OVERVIEW --}}
    {{-- MOCK DATA: swap the icon/label cards below for real facility photos once pulled from the Drive folder --}}
    @php
        $facilityCards = [
            ['name' => 'Classrooms', 'blurb' => 'Well-ventilated, furnished classrooms for every grade level and strand.', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
            ['name' => 'School Library', 'blurb' => 'A quiet reading and research space stocked with print and digital references.', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
            ['name' => 'Covered Court', 'blurb' => 'Hosts PE classes, assemblies, and school-wide events rain or shine.', 'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'],
            ['name' => 'Computer Laboratory', 'blurb' => 'Networked workstations supporting ICT and Computer Programming lessons.', 'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
            ['name' => 'TLE / TVL Workshop Area', 'blurb' => 'Dedicated stations for Cookery, Dressmaking, and Housekeeping practicals.', 'icon' => 'M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z'],
            ['name' => 'Canteen', 'blurb' => 'A clean, accessible dining area for learners and staff during break periods.', 'icon' => 'M18.75 12.75h1.5a2.25 2.25 0 000-4.5h-1.5m-13.5 0a2.25 2.25 0 000 4.5h1.5m8.25-4.5v6a3.75 3.75 0 11-7.5 0v-6m7.5 0h-7.5m7.5 0V6a3.75 3.75 0 10-7.5 0v2.25'],
        ];
    @endphp
    <section class="max-w-6xl mx-auto px-4 py-14">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <h2 class="text-2xl font-bold text-gray-900">What's on Campus</h2>
            <p class="text-sm text-gray-500 mt-2">A quick look at the spaces learners use every day. Photos to follow soon.</p>
        </div>
        <div class="grid gap-6 md:grid-cols-3">
            @foreach ($facilityCards as $facility)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-md transition">
                    <div class="h-40 bg-gradient-to-br from-green-800 to-green-950 flex items-center justify-center">
                        <svg class="w-10 h-10 text-green-300/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $facility['icon'] }}"/>
                        </svg>
                    </div>
                    <div class="p-5">
                        <p class="font-semibold text-gray-900">{{ $facility['name'] }}</p>
                        <p class="text-sm text-gray-500 mt-1.5 leading-relaxed">{{ $facility['blurb'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- RECENT IMPROVEMENTS --}}
    <section class="bg-gray-50 py-16 border-t border-gray-200/80">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">Always Improving</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 tracking-tight mt-3">Recent Facility Improvements</h2>
            </div>

            <div class="grid gap-6 md:grid-cols-3">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6">
                    <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">High-Speed Internet</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">A newly installed 300 Mbps PLDT connection supports digital learning and school operations campus-wide.</p>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6">
                    <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a1 1 0 001-1v-4a1 1 0 00-1-1H9a1 1 0 00-1 1v4a1 1 0 001 1zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Office & Teacher Equipment</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">New printers have been distributed to teachers and office staff to support day-to-day instruction and administration.</p>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6">
                    <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Building Maintenance</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Ongoing repair and repainting of school buildings keeps the campus safe, clean, and welcoming.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
