@extends('layouts.app')

@section('title', 'ALS SHS | Pajo National High School - SHS')

@section('content')
<section class="bg-green-50 py-14 md:py-20">
    <div class="max-w-4xl mx-auto px-4">

        <div class="text-center mb-10">
            <span class="inline-block text-xs font-bold tracking-wide uppercase bg-green-800 text-white px-3 py-1 rounded-full mb-4">
                Alternative Learning System
            </span>
            <h1 class="text-3xl md:text-4xl font-bold text-green-900">ALS Senior High School</h1>
            <p class="text-stone-500 mt-3 max-w-2xl mx-auto">
                A flexible, learner-friendly track for out-of-school youth and adults who want to
                finish Senior High School outside the traditional classroom setting.
            </p>
        </div>

        <div class="grid gap-6 md:grid-cols-3 mb-12">
            <div class="rounded-2xl bg-white p-6 ring-1 ring-stone-900/5 shadow-sm">
                <h3 class="font-semibold text-green-900 mb-2">Who It's For</h3>
                <p class="text-sm text-stone-600">Out-of-school youth, working adults, and anyone who wants a flexible path to a Senior High School diploma.</p>
            </div>
            <div class="rounded-2xl bg-white p-6 ring-1 ring-stone-900/5 shadow-sm">
                <h3 class="font-semibold text-green-900 mb-2">Flexible Schedule</h3>
                <p class="text-sm text-stone-600">Modular and blended learning options designed to fit around work and family responsibilities.</p>
            </div>
            <div class="rounded-2xl bg-white p-6 ring-1 ring-stone-900/5 shadow-sm">
                <h3 class="font-semibold text-green-900 mb-2">DepEd Recognized</h3>
                <p class="text-sm text-stone-600">Graduates receive a diploma equivalent to the formal Senior High School program.</p>
            </div>
        </div>

        <div class="rounded-2xl bg-white p-8 ring-1 ring-stone-900/5 shadow-sm text-center">
            <h2 class="text-xl font-semibold text-green-900 mb-2">Interested in ALS SHS?</h2>
            <p class="text-stone-500 mb-6">Visit us or get in touch to learn about requirements and the next enrollment schedule.</p>
            <a href="{{ route('contact') }}"
               class="inline-block bg-green-800 text-white font-semibold px-6 py-3 rounded-lg hover:bg-green-700 transition">
                Contact the ALS Office
            </a>
        </div>
    </div>
</section>
@endsection
