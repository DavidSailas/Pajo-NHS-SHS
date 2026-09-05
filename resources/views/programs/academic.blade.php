@extends('layouts.app')

@section('title', 'Academic Track | Pajo National High School - SHS')

@section('content')

    {{-- PAGE HEADER --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">Academic Track</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">College-preparatory strands for learners planning to pursue higher education.</p>
        </div>
    </section>

    {{-- STRANDS --}}
    <section class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Clusters / Strands</h2>
        <ul class="grid gap-4 md:grid-cols-3">
            <li class="p-5 border rounded-xl bg-white shadow-sm">
                <p class="font-semibold text-gray-900">Science, Technology, Engineering and Mathematics (STEM)</p>
            </li>
            <li class="p-5 border rounded-xl bg-white shadow-sm">
                <p class="font-semibold text-gray-900">Business and Entrepreneurship (ABM)</p>
            </li>
            <li class="p-5 border rounded-xl bg-white shadow-sm">
                <p class="font-semibold text-gray-900">Arts, Social Science and Humanities (HUMSS)</p>
            </li>
        </ul>
    </section>

    {{-- ENROLLMENT CTA --}}
    <section class="bg-gray-50 py-16 border-t border-gray-200/80">
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
