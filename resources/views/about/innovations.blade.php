@extends('layouts.app')

@section('title', 'School Innovations | Pajo National High School - SHS')

@section('content')

    {{--
        MOCK DATA: descriptions below are placeholder copy standing in for the real project write-ups.
        Confirm each acronym and its actual goals with the school, then replace the 'desc' fields.
    --}}
    @php
        $innovations = [
            [
                'name' => 'Project SNS',
                'lead' => 'Christine Ramirez',
                'desc' => 'A homegrown initiative focused on strengthening student support systems inside and outside the classroom.',
                'icon' => 'M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z',
            ],
            [
                'name' => 'Project 3Es',
                'lead' => 'Allegail Berame Glarian',
                'desc' => 'Promotes a shared approach among teachers and learners built around three core values that guide daily classroom practice.',
                'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
            ],
            [
                'name' => 'Project REPAIR',
                'lead' => 'Alexis Heyrosa',
                'desc' => 'A campus improvement effort centered on fixing, maintaining, and upgrading shared school facilities.',
                'icon' => 'M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z',
            ],
            [
                'name' => 'Project Discipline',
                'lead' => 'Rubina Aton Villaceran',
                'desc' => 'Reinforces school-wide values formation and positive discipline practices among senior high learners.',
                'icon' => 'M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
            ],
            [
                'name' => 'Project SEE',
                'lead' => 'Juna Silawan Babatu-on',
                'desc' => 'Encourages learners to observe, reflect, and engage more actively with real-world issues in and beyond the classroom.',
                'icon' => 'M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
            ],
            [
                'name' => 'IPickMATH',
                'lead' => 'Carla',
                'desc' => 'A learner-driven approach to make mathematics more approachable through guided, interest-based practice.',
                'icon' => 'M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M14.25 3.104v5.714c0 .597.237 1.169.659 1.591L19 14.5M5 14.5h14M5 14.5l-1.35 3.246a1.5 1.5 0 001.386 2.078h13.928a1.5 1.5 0 001.386-2.078L19 14.5',
            ],
        ];
    @endphp

    {{-- PAGE HEADER --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">School Innovations</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">Homegrown initiatives designed and led by our own teachers and staff to improve learning, safety, and school life.</p>
        </div>
    </section>

    {{-- INNOVATIONS GRID --}}
    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="grid gap-6 md:grid-cols-3">
            @foreach ($innovations as $item)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6 hover:shadow-md transition">
                    <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $item['icon'] }}"/>
                        </svg>
                    </div>
                    <span class="inline-block text-xs font-bold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md mb-3">{{ $item['name'] }}</span>
                    <p class="text-sm text-gray-600 leading-relaxed mb-3">{{ $item['desc'] }}</p>
                    <p class="text-xs text-gray-400 font-medium">Led by {{ $item['lead'] }}</p>
                </div>
            @endforeach
        </div>

        <p class="text-xs text-gray-400 text-center mt-10">
            Project descriptions above are draft summaries and will be finalized with the school.
        </p>
    </section>

    {{-- PUBLICATIONS --}}
    <section class="bg-gray-50 py-16 border-t border-gray-200/80">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Publications & Media</h2>
            <p class="text-gray-600 leading-relaxed">
                Pajo SHS stays connected with its community through active Facebook pages, the official school newsletter
                <span class="font-semibold text-gray-800">"The Voyager,"</span>
                and SPTA-led initiatives such as mini-billboards around the community.
            </p>
            <a href="{{ route('news') }}" class="inline-flex items-center gap-2 mt-6 text-sm font-semibold text-green-800 hover:text-green-900 transition">
                Read the Latest News &amp; Updates &rarr;
            </a>
        </div>
    </section>

@endsection
