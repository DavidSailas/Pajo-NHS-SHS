@extends('layouts.app')

@section('title', 'Enroll Now | Pajo National High School - SHS')

@section('content')
<section class="bg-green-50 py-14 md:py-20">
    <div class="max-w-4xl mx-auto px-4">

        <div class="text-center mb-12">
            <span class="inline-block text-xs font-bold tracking-wide uppercase bg-amber-400 text-green-900 px-3 py-1 rounded-full mb-4">
                Admissions
            </span>
            <h1 class="text-3xl md:text-4xl font-bold text-green-900">Enroll Now</h1>
            <p class="text-stone-500 mt-3 max-w-2xl mx-auto">
                Join Pajo National High School - Senior High. Here's how to get started.
            </p>
        </div>

        {{-- Steps --}}
        <div class="grid gap-6 md:grid-cols-4 mb-12">
            @php
                $steps = [
                    ['n' => '1', 'title' => 'Prepare Requirements', 'desc' => 'Gather your Form 138, Certificate of Good Moral Character, and PSA Birth Certificate.'],
                    ['n' => '2', 'title' => 'Visit or Register Online', 'desc' => 'Submit your requirements at the registrar\'s office or through the online form, if available.'],
                    ['n' => '3', 'title' => 'Choose Your Track', 'desc' => 'Pick between the Academic Track or Tech-Pro Track based on your interests.'],
                    ['n' => '4', 'title' => 'Confirm Enrollment', 'desc' => 'Complete the interview and sectioning process to finalize your slot.'],
                ];
            @endphp
            @foreach ($steps as $step)
                <div class="rounded-2xl bg-white p-6 ring-1 ring-stone-900/5 shadow-sm">
                    <div class="h-9 w-9 flex items-center justify-center rounded-full bg-green-800 text-white font-bold text-sm mb-3">
                        {{ $step['n'] }}
                    </div>
                    <h3 class="font-semibold text-green-900 mb-1">{{ $step['title'] }}</h3>
                    <p class="text-sm text-stone-600">{{ $step['desc'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Requirements + CTA --}}
        <div class="grid gap-6 md:grid-cols-2">
            <div class="rounded-2xl bg-white p-6 ring-1 ring-stone-900/5 shadow-sm">
                <h3 class="font-semibold text-green-900 mb-3">Requirements</h3>
                <ul class="space-y-2 text-sm text-stone-600">
                    <li class="flex gap-2"><span class="text-green-700">&#10003;</span> Form 138 (Report Card)</li>
                    <li class="flex gap-2"><span class="text-green-700">&#10003;</span> PSA Birth Certificate</li>
                    <li class="flex gap-2"><span class="text-green-700">&#10003;</span> Certificate of Good Moral Character</li>
                    <li class="flex gap-2"><span class="text-green-700">&#10003;</span> 2x2 ID Photos</li>
                </ul>
            </div>

            <div class="rounded-2xl bg-green-800 text-white p-6 flex flex-col justify-between">
                <div>
                    <h3 class="font-semibold mb-2">Ready to Enroll?</h3>
                    <p class="text-sm text-green-100 mb-4">Click below to proceed to the online registration and student portal login page.</p>
                </div>
                <a href="https://pnhs.edukonek.com/login" target="_blank" rel="noopener noreferrer"
                   class="inline-block text-center bg-amber-400 text-green-900 font-semibold px-5 py-2.5 rounded-lg hover:bg-amber-300 transition">
                    Register Online
                </a>
            </div>
        </div>
    </div>
</section>
@endsection