@extends('layouts.app')

@section('title', 'Laboratories | Pajo National High School - SHS')

@section('content')
    <section class="max-w-6xl mx-auto px-4 py-14">
        <h1 class="text-3xl font-bold mb-6">Our Laboratories</h1>
        <p class="text-gray-600 mb-8">Laboratory photos and descriptions go here.</p>

        <div class="grid gap-6 md:grid-cols-3">
            <div class="h-48 bg-gray-200 rounded-lg"></div>
            <div class="h-48 bg-gray-200 rounded-lg"></div>
            <div class="h-48 bg-gray-200 rounded-lg"></div>
        </div>
    </section>
@endsection
