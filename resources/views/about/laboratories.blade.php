@extends('layouts.app')

@section('title', 'Laboratories | Pajo National High School - SHS')

@section('content')

    {{-- MOCK DATA: swap the icon/label cards below for real laboratory photos and equipment lists once available --}}
    @php
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
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">Our Laboratories</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">Hands-on spaces where Academic and Tech-Pro learners build real, testable skills.</p>
        </div>
    </section>

    {{-- LAB GRID --}}
    <section class="max-w-6xl mx-auto px-4 py-14">
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
    </section>

@endsection
