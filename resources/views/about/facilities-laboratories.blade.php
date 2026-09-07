@extends('layouts.app')

@section('title', 'Facilities & Laboratories | Pajo National High School - SHS')

@section('content')

    {{-- MOCK DATA: swap the icon/label cards below for real photos once pulled from the Drive folder --}}
    @php
        // TODO: once the `teachers` table + controller exist, replace this with
        // Teacher::orderBy('sort_order')->get() and drop this hard-coded array.
        // Each photo path below just needs the matching file dropped into
        // images/teachers/ — no code changes needed once the client sends photos.
        $schoolHead = [
            'name' => 'Glenny E. Laping',
            'position' => 'Principal II / School Head',
            'photo' => 'images/teachers/laping-glenny-e.jpg',
            'video' => null,
        ];

        $teachers = [
            ['name' => 'Jennifer P. Gonzaga',      'position' => '', 'credentials' => '', 'photo' => 'images/teachers/gonzaga-jennifer-p.jpg', 'video' => 'videos/teachers/gonzaga-jennifer-p.mp4'],
            ['name' => 'Alexis C. Heyrosa',        'position' => '', 'credentials' => '', 'photo' => 'images/teachers/heyrosa-alexis-c.jpg', 'video' => 'videos/teachers/heyrosa-alexis-c.mp4'],
            ['name' => 'Julian John N. Limutan',   'position' => '', 'credentials' => '', 'photo' => 'images/teachers/limutan-julian-john-n.jpg', 'video' => 'videos/teachers/limutan-julian-john-n.mp4'],
            ['name' => 'Jan Ann P. Montejo',       'position' => '', 'credentials' => '', 'photo' => 'images/teachers/montejo-jan-ann-p.jpg', 'video' => 'videos/teachers/montejo-jan-ann-p.mp4'],
            ['name' => 'Glenny B. Abad',           'position' => '', 'credentials' => '', 'photo' => 'images/teachers/abad-glenny-b.jpg', 'video' => 'videos/teachers/abad-glenny-b.mp4'],
            ['name' => 'Rodetha P. Catadman',      'position' => '', 'credentials' => '', 'photo' => 'images/teachers/catadman-rodetha-p.jpg', 'video' => 'videos/teachers/catadman-rodetha-p.mp4'],
            ['name' => 'Julieta L. Embralinag',    'position' => '', 'credentials' => '', 'photo' => 'images/teachers/embralinag-julieta-l.jpg', 'video' => 'videos/teachers/embralinag-julieta-l.mp4'],
            ['name' => 'Aiko J. Epe',              'position' => '', 'credentials' => '', 'photo' => 'images/teachers/epe-aiko-j.jpg', 'video' => 'videos/teachers/epe-aiko-j.mp4'],
            ['name' => 'Cristina Esmeña',          'position' => '', 'credentials' => '', 'photo' => 'images/teachers/esmena-cristina.jpg', 'video' => 'videos/teachers/esmena-cristina.mp4'],
            ['name' => 'Abegail Glarian',          'position' => '', 'credentials' => '', 'photo' => 'images/teachers/glarian-abegail.jpg', 'video' => 'videos/teachers/glarian-abegail.mp4'],
            ['name' => 'Mariel H. Ursabia',        'position' => '', 'credentials' => '', 'photo' => 'images/teachers/ursabia-mariel-h.jpg', 'video' => 'videos/teachers/ursabia-mariel-h.mp4'],
            ['name' => 'Celosteo A. Villaceran',   'position' => '', 'credentials' => '', 'photo' => 'images/teachers/villaceran-celosteo-a.jpg', 'video' => 'videos/teachers/villaceran-celosteo-a.mp4'],
            ['name' => 'Ednalyn P. Viloria',       'position' => '', 'credentials' => '', 'photo' => 'images/teachers/viloria-ednalyn-p.jpg', 'video' => 'videos/teachers/viloria-ednalyn-p.mp4'],
            ['name' => 'Christine V. Ramirez',     'position' => '', 'credentials' => '', 'photo' => 'images/teachers/ramirez-christine-v.jpg', 'video' => 'videos/teachers/ramirez-christine-v.mp4'],
            ['name' => 'Leni Rebusit',             'position' => '', 'credentials' => '', 'photo' => 'images/teachers/rebusit-leni.jpg', 'video' => 'videos/teachers/rebusit-leni.mp4'],
            ['name' => 'Jasmin E. Rosaroso',       'position' => '', 'credentials' => '', 'photo' => 'images/teachers/rosaroso-jasmin-e.jpg', 'video' => 'videos/teachers/rosaroso-jasmin-e.mp4'],

            // Photos received, but name/position/credentials/video not yet confirmed by the client.
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/teacher-01.jpg', 'video' => null],
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/teacher-03.jpg', 'video' => null],
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/teacher-04.jpg', 'video' => null],
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/teacher-05.jpg', 'video' => null],
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/teacher-06.jpg', 'video' => null],
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/teacher-07.jpg', 'video' => null],
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/teacher-08.jpg', 'video' => null],
        ];

        $facilityCards = [
            ['name' => 'Classrooms', 'blurb' => 'Well-ventilated, furnished classrooms for every grade level and strand.', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
            ['name' => 'School Library', 'blurb' => 'A quiet reading and research space stocked with print and digital references.', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
            ['name' => 'Covered Court', 'blurb' => 'Hosts PE classes, assemblies, and school-wide events rain or shine.', 'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'],
            ['name' => 'Computer Laboratory', 'blurb' => 'Networked workstations supporting ICT and Computer Programming lessons.', 'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
            ['name' => 'TLE / TVL Workshop Area', 'blurb' => 'Dedicated stations for Cookery, Dressmaking, and Housekeeping practicals.', 'icon' => 'M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z'],
            ['name' => 'Canteen', 'blurb' => 'A clean, accessible dining area for learners and staff during break periods.', 'icon' => 'M18.75 12.75h1.5a2.25 2.25 0 000-4.5h-1.5m-13.5 0a2.25 2.25 0 000 4.5h1.5m8.25-4.5v6a3.75 3.75 0 11-7.5 0v-6m7.5 0h-7.5m7.5 0V6a3.75 3.75 0 10-7.5 0v2.25'],
        ];

        $labs = [
            [
                'name' => 'Computer Laboratory',
                'blurb' => 'Networked desktop stations used for ICT Support, Computer Programming, and Computer Systems Servicing (NC II) lessons.',
                'tags' => ['ICT', 'TVL'],
                'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
            ],
            [
                'name' => 'Science Laboratory',
                'blurb' => 'Equipped for basic chemistry, biology, and physics activities across the STEM strand and general science subjects.',
                'tags' => ['STEM', 'Science'],
                'icon' => 'M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M14.25 3.104v5.714c0 .597.237 1.169.659 1.591L19 14.5M5 14.5h14M5 14.5l-1.35 3.246a1.5 1.5 0 001.386 2.078h13.928a1.5 1.5 0 001.386-2.078L19 14.5',
            ],
            [
                'name' => 'Cookery / Food Lab',
                'blurb' => 'A working kitchen where Hospitality and Tourism learners train for the Cookery NC II assessment.',
                'tags' => ['TVL', 'Hospitality'],
                'icon' => 'M18.75 12.75h1.5a2.25 2.25 0 000-4.5h-1.5m-13.5 0a2.25 2.25 0 000 4.5h1.5m8.25-4.5v6a3.75 3.75 0 11-7.5 0v-6m7.5 0h-7.5m7.5 0V6a3.75 3.75 0 10-7.5 0v2.25',
            ],
            [
                'name' => 'Dressmaking / Garments Workshop',
                'blurb' => 'Sewing stations for Garments Artisanry learners working toward Dressmaking competencies.',
                'tags' => ['TVL', 'Artisanry'],
                'icon' => 'M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z',
            ],
            [
                'name' => 'Housekeeping Simulation Room',
                'blurb' => 'A mock hotel room setup used to train and assess Hotel Operations (Housekeeping Services) learners.',
                'tags' => ['TVL', 'Hospitality'],
                'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
            ],
            [
                'name' => 'Reading / Media Room',
                'blurb' => 'A shared multimedia space for research, presentations, and small-group learning sessions.',
                'tags' => ['General'],
                'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
            ],
        ];
    @endphp

    {{-- PAGE HEADER --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">Facilities & Laboratories</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">A learning environment that keeps improving, year after year.</p>
        </div>
    </section>

    {{-- IN-PAGE SECTION NAV --}}
    <div class="sticky top-16 z-40 bg-white/95 backdrop-blur border-b border-gray-200/80">
        <nav class="max-w-6xl mx-auto px-4 flex gap-6 overflow-x-auto text-sm font-semibold text-gray-500">
            <a href="#facilities" class="py-3 whitespace-nowrap border-b-2 border-transparent hover:text-green-800 hover:border-green-800 transition">Facilities</a>
            <a href="#laboratories" class="py-3 whitespace-nowrap border-b-2 border-transparent hover:text-green-800 hover:border-green-800 transition">Laboratories</a>
            <a href="#faculty" class="py-3 whitespace-nowrap border-b-2 border-transparent hover:text-green-800 hover:border-green-800 transition">Faculty & Staff</a>
            <a href="#improvements" class="py-3 whitespace-nowrap border-b-2 border-transparent hover:text-green-800 hover:border-green-800 transition">Recent Improvements</a>
        </nav>
    </div>

    {{-- FACILITIES --}}
    <section id="facilities" class="max-w-6xl mx-auto px-4 py-14 scroll-mt-32">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">On Campus</span>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-3">Our Facilities</h2>
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

    {{-- LABORATORIES --}}
    <section id="laboratories" class="bg-gray-50 border-t border-gray-200/80 py-16 scroll-mt-32">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-10">
                <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">Hands-On Learning</span>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-3">Our Laboratories</h2>
                <p class="text-sm text-gray-500 mt-2">Hands-on spaces where Academic and Tech-Pro learners build real, testable skills.</p>
            </div>
            <div class="grid gap-6 md:grid-cols-3">
                @foreach ($labs as $lab)
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-md transition">
                        <div class="h-40 bg-gradient-to-br from-green-800 to-green-950 flex items-center justify-center">
                            <svg class="w-10 h-10 text-green-300/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $lab['icon'] }}"/>
                            </svg>
                        </div>
                        <div class="p-5">
                            <div class="flex flex-wrap gap-1.5 mb-2">
                                @foreach ($lab['tags'] as $tag)
                                    <span class="text-[11px] font-bold uppercase tracking-wide text-green-700 bg-green-50 px-2 py-0.5 rounded-md">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <p class="font-semibold text-gray-900">{{ $lab['name'] }}</p>
                            <p class="text-sm text-gray-500 mt-1.5 leading-relaxed">{{ $lab['blurb'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <p class="text-xs text-gray-400 text-center mt-10">
                Layout shown with placeholder photos. Real laboratory photos will replace these once available.
            </p>
        </div>
    </section>

    {{-- FACULTY & STAFF --}}
    <section id="faculty" class="max-w-6xl mx-auto px-4 py-16 border-t border-gray-200/80 scroll-mt-32">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">Meet the Team</span>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-3">Faculty & Staff</h2>
            <p class="text-sm text-gray-500 mt-2">Click a teacher's photo to watch their introduction video.</p>
        </div>

        {{-- SCHOOL HEAD FEATURED PROFILE (REVISED: Clean, attractive, and non-redundant) --}}
        <div class="max-w-3xl mx-auto mb-14 bg-white rounded-3xl shadow-md border border-gray-200/80 overflow-hidden">
            <div class="bg-gradient-to-r from-green-900 to-green-950 px-6 py-4 flex items-center justify-between text-white">
                <span class="text-xs font-bold uppercase tracking-widest text-green-300">Executive Leadership</span>
                <span class="text-xs text-green-200/80">Pajo NHS &mdash; Senior High School</span>
            </div>
            <div class="p-6 md:p-8 flex flex-col sm:flex-row items-center gap-6 sm:gap-8 text-center sm:text-left">
                <div class="relative shrink-0">
                    <div class="w-36 h-36 md:w-40 md:h-40 rounded-2xl overflow-hidden border border-green-900/10 shadow-md bg-gray-50">
                        <img src="{{ asset($schoolHead['photo']) }}" alt="{{ $schoolHead['name'] }}"
                            onerror="this.onerror=null; this.src='{{ asset('images/teachers/placeholder.jpg') }}';"
                            class="w-full h-full object-cover object-top">
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl md:text-3xl font-extrabold text-gray-900 tracking-tight">{{ $schoolHead['name'] }}</h3>
                    <p class="text-green-700 font-semibold text-base mt-1">{{ $schoolHead['position'] }}</p>
                    <p class="text-sm text-gray-500 mt-2 leading-relaxed">
                        Leading administrative initiatives, instructional excellence, and community partnerships to ensure every Senior High School learner thrives.
                    </p>
                </div>
            </div>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-4">
            @foreach ($teachers as $teacher)
                @if(!empty($teacher['video']))
                    <button type="button"
                            class="teacher-card group relative flex flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-stone-900/5 shadow-sm text-left transition-shadow duration-300 hover:shadow-lg"
                            data-video="{{ asset($teacher['video']) }}"
                            data-name="{{ $teacher['name'] }}">
                        <div class="relative aspect-square overflow-hidden bg-stone-100">
                            <img src="{{ asset($teacher['photo']) }}" alt="{{ $teacher['name'] }}"
                                 onerror="this.onerror=null; this.src='{{ asset('images/teachers/placeholder.jpg') }}';"
                                 class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105">
                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/35 via-transparent to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                            <div class="absolute bottom-2.5 right-2.5 flex h-9 w-9 items-center justify-center rounded-full bg-white/95 shadow-sm transition-colors duration-300 group-hover:bg-[#12432c]">
                                <svg class="w-3.5 h-3.5 translate-x-[1px] text-[#12432c] transition-colors duration-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                        <div class="px-4 py-3">
                            <p class="font-semibold text-stone-800 leading-snug">{{ $teacher['name'] }}</p>
                            @if(!empty($teacher['position']))
                                <p class="text-xs font-semibold text-green-700 uppercase tracking-wide mt-0.5">{{ $teacher['position'] }}</p>
                            @endif
                            @if(!empty($teacher['credentials']))
                                <p class="text-sm text-stone-500 mt-0.5">{{ $teacher['credentials'] }}</p>
                            @endif
                        </div>
                    </button>
                @else
                    <div class="relative flex flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-stone-900/5 shadow-sm">
                        <div class="relative aspect-square overflow-hidden bg-stone-100">
                            <img src="{{ asset($teacher['photo']) }}" alt="{{ $teacher['name'] }}"
                                 onerror="this.onerror=null; this.src='{{ asset('images/teachers/placeholder.jpg') }}';"
                                 class="w-full h-full object-cover object-top">
                        </div>
                        <div class="px-4 py-3">
                            <p class="font-semibold text-stone-800 leading-snug">{{ $teacher['name'] }}</p>
                            @if(!empty($teacher['position']))
                                <p class="text-xs font-semibold text-green-700 uppercase tracking-wide mt-0.5">{{ $teacher['position'] }}</p>
                            @endif
                            <p class="text-xs text-stone-400 mt-0.5">Video coming soon</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>

    {{-- Faculty Video Modal --}}
    <div id="teacher-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-stone-900/80 px-4 backdrop-blur-sm">
        <div class="relative w-full max-w-2xl rounded-2xl bg-white p-5 shadow-2xl">
            <div class="mb-4 flex items-center justify-between">
                <h3 id="teacher-modal-name" class="text-lg font-semibold text-stone-800"></h3>
                <button id="teacher-modal-close"
                        class="flex h-8 w-8 items-center justify-center rounded-full text-stone-400 transition-colors hover:bg-stone-100 hover:text-stone-700">
                    <span class="text-2xl leading-none">&times;</span>
                </button>
            </div>
            <video id="teacher-modal-video" class="w-full rounded-lg bg-black" controls></video>
        </div>
    </div>

    {{-- RECENT IMPROVEMENTS --}}
    <section id="improvements" class="py-16 border-t border-gray-200/80 scroll-mt-32">
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
                    <p class="text-sm text-gray-500">Upgraded connection speeds across computer labs and administrative offices.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6">
                    <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Laboratory Upgrades</h3>
                    <p class="text-sm text-gray-500">New tools and simulation setups added for TVL practical training strands.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6">
                    <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Facility Cleanliness & Ramps</h3>
                    <p class="text-sm text-gray-500">Improved accessibility ramps and optimized spaces for daily classroom use.</p>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('teacher-modal');
        const modalName = document.getElementById('teacher-modal-name');
        const modalVideo = document.getElementById('teacher-modal-video');
        const closeBtn = document.getElementById('teacher-modal-close');

        document.querySelectorAll('.teacher-card').forEach(card => {
            card.addEventListener('click', () => {
                const videoSrc = card.getAttribute('data-video');
                const teacherName = card.getAttribute('data-name');

                if (videoSrc) {
                    modalName.textContent = teacherName + "'s Introduction";
                    modalVideo.src = videoSrc;
                    modal.classList.remove('hidden');
                    modalVideo.play();
                }
            });
        });

        const closeModal = () => {
            modal.classList.add('hidden');
            modalVideo.pause();
            modalVideo.src = '';
        };

        closeBtn.addEventListener('click', closeModal);
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });
    });
</script>
@endpush