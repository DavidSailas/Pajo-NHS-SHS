@extends('layouts.app')

@section('title', 'Academic Track | Pajo National High School - SHS')

@section('content')

    {{-- MOCK DATA: swap for real strand details once confirmed with the school --}}
    @php
        $strands = [
            [
                'name' => 'Science, Technology, Engineering and Mathematics',
                'abbr' => 'STEM',
                'blurb' => 'For learners drawn to the sciences, mathematics, and engineering-oriented problem solving.',
                'subjects' => ['General Biology', 'General Physics', 'Pre-Calculus', 'Basic Calculus'],
                'icon' => 'M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M14.25 3.104v5.714c0 .597.237 1.169.659 1.591L19 14.5M5 14.5h14M5 14.5l-1.35 3.246a1.5 1.5 0 001.386 2.078h13.928a1.5 1.5 0 001.386-2.078L19 14.5',
            ],
            [
                'name' => 'Accountancy, Business and Management',
                'abbr' => 'ABM',
                'blurb' => 'For learners interested in business, finance, entrepreneurship, and management pathways.',
                'subjects' => ['Business Finance', 'Applied Economics', 'Fundamentals of ABM', 'Organization & Management'],
                'icon' => 'M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0z',
            ],
            [
                'name' => 'Humanities and Social Sciences',
                'abbr' => 'HUMSS',
                'blurb' => 'For learners inclined toward communication, the social sciences, and public service.',
                'subjects' => ['Creative Writing', 'Creative Nonfiction', 'Philippine Politics & Governance', 'Community Engagement'],
                'icon' => 'M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 01-2.555-.337A5.972 5.972 0 015.41 20.97a5.969 5.969 0 01-.474-.065 4.48 4.48 0 00.978-2.025c.09-.457-.133-.901-.5-1.185A8.959 8.959 0 013 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25z',
            ],
        ];
    @endphp

    {{-- PAGE HEADER --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">Academic Track</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">College-preparatory strands for learners planning to pursue higher education.</p>
        </div>
    </section>

    {{-- STRANDS --}}
    <section class="max-w-6xl mx-auto px-4 py-14">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">Clusters / Strands</span>
            <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 tracking-tight mt-3">Choose the Strand That Fits Your Goals</h2>
        </div>

        <div class="grid gap-6 md:grid-cols-3">
            @foreach ($strands as $strand)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6 hover:shadow-md transition flex flex-col">
                    <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $strand['icon'] }}"/>
                        </svg>
                    </div>
                    <span class="text-xs font-bold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md w-fit mb-3">{{ $strand['abbr'] }}</span>
                    <p class="font-semibold text-gray-900 mb-2">{{ $strand['name'] }}</p>
                    <p class="text-sm text-gray-600 leading-relaxed mb-4">{{ $strand['blurb'] }}</p>
                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wide mb-2">Sample Subjects</p>
                        <ul class="text-sm text-gray-600 space-y-1">
                            @foreach ($strand['subjects'] as $subject)
                                <li class="flex items-start gap-2">
                                    <span class="text-green-700 font-bold">&#8226;</span>{{ $subject }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

        <p class="text-xs text-gray-400 text-center mt-8">
            Sample subjects shown are illustrative and follow the DepEd SHS curriculum guide; confirm the current offering with the registrar.
        </p>
    </section>

    {{-- WHY CHOOSE ACADEMIC TRACK --}}
    <section class="bg-gray-50 py-16 border-t border-gray-200/80">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">Why This Track</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 tracking-tight mt-3">Built for College Readiness</h2>
            </div>

            <div class="grid gap-6 md:grid-cols-3">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6">
                    <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422A12.083 12.083 0 0118 20.417 12.083 12.083 0 016.16 10.578L12 14zm0 0l-9-5m9 5v6"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">College-Aligned Curriculum</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Core and specialized subjects build the foundation expected of incoming college freshmen.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6">
                    <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Strand Advisers</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Dedicated teachers guide learners through subject choices and college application prep.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6">
                    <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Research & Culminating Projects</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">Learners complete strand-based research or capstone work before graduation.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ENROLLMENT CTA --}}
    <section class="py-16">
        <div class="max-w-3xl mx-auto px-4">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-8 flex flex-col md:flex-row gap-8 items-center">
                <div class="bg-orange-500 text-white font-extrabold text-lg rounded-full w-28 h-28 flex flex-col items-center justify-center leading-tight shrink-0 shadow-md">
                    ENROLL<br>NOW
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3">Enrollment Requirements</h3>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-green-700 font-bold">&#10003;</span>
                            SF9 (Report Card)
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-700 font-bold">&#10003;</span>
                            PSA/NSO Birth Certificate (photocopy)
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="inline-block mt-5 bg-green-800 text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-green-900 transition text-sm">
                        Get in Touch to Enroll
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
