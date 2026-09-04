@extends('layouts.app')

@section('title', 'Tech-Pro Track | Pajo National High School - SHS')

@section('content')
    <section class="max-w-6xl mx-auto px-4 py-14">
        <h1 class="text-3xl font-bold mb-6">Tech-Pro Track</h1>
        <p class="text-gray-600 mb-8">List of TVL/Tech-Pro electives offered goes here.</p>

        <ul class="grid gap-4 md:grid-cols-2">
            <li class="p-4 border rounded-lg">Elective name — short description</li>
            <li class="p-4 border rounded-lg">Elective name — short description</li>
        </ul>
    </section>
@endsection
