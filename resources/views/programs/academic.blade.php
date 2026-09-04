@extends('layouts.app')

@section('title', 'Academic Track | Pajo National High School - SHS')

@section('content')
    <section class="max-w-6xl mx-auto px-4 py-14">
        <h1 class="text-3xl font-bold mb-6">Academic Track</h1>
        <p class="text-gray-600 mb-8">List of academic strands/electives offered goes here (e.g., STEM, ABM, HUMSS, GAS).</p>

        <ul class="grid gap-4 md:grid-cols-2">
            <li class="p-4 border rounded-lg">Strand name — short description</li>
            <li class="p-4 border rounded-lg">Strand name — short description</li>
        </ul>
    </section>
@endsection
