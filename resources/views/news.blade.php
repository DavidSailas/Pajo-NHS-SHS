@extends('layouts.app')

@section('title', 'News & Updates | Pajo National High School - SHS')

@section('content')

    {{--
        $posts is passed in from PageController@news (currently mock data — see
        PageController::newsPosts()). Swap that method's body for a real
        News/Announcement model query whenever one exists; this view doesn't
        need to change.
    --}}
    @php
        $posts = $posts ?? [];
        $categories = [
            'Announcement' => 'bg-orange-100 text-orange-700',
            'Event'        => 'bg-green-100 text-green-700',
            'Achievement'  => 'bg-blue-100 text-blue-700',
            'Advisory'     => 'bg-red-100 text-red-700',
        ];
    @endphp

    {{-- PAGE HEADER --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <span class="inline-flex items-center gap-2 bg-green-800/80 text-green-200 text-xs font-medium px-3.5 py-1.5 rounded-full uppercase tracking-wider mb-5 border border-green-700/60">
                The Voyager &middot; Official Newsletter
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">News &amp; Updates</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">Announcements, advisories, and stories from Pajo National High School - SHS.</p>
        </div>
    </section>

    {{-- NEWS GRID --}}
    <section class="max-w-6xl mx-auto px-4 py-14">

        <div class="grid gap-6 md:grid-cols-3">
            @foreach ($posts as $post)
                <article class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group flex flex-col">
                    <div class="h-40 bg-gradient-to-br from-green-800 to-green-950 flex items-center justify-center relative">
                        <svg class="w-10 h-10 text-green-300/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $post['icon'] }}"/>
                        </svg>
                        <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full {{ $categories[$post['category']] ?? 'bg-gray-100 text-gray-700' }}">
                            {{ $post['category'] }}
                        </span>
                    </div>
                    <div class="p-5 flex flex-col flex-1">
                        <p class="text-xs text-gray-400 font-medium mb-2">{{ $post['date'] }}</p>
                        <h3 class="font-bold text-gray-900 leading-snug mb-2 group-hover:text-green-800 transition">{{ $post['title'] }}</h3>
                        <p class="text-sm text-gray-600 leading-relaxed flex-1">{{ $post['excerpt'] }}</p>
                        <a href="#" class="text-xs font-semibold text-green-700 mt-4 inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                            Read more &rarr;
                        </a>
                    </div>
                </article>
            @endforeach
        </div>

        <p class="text-xs text-gray-400 text-center mt-12">
            Showing sample announcements. Once connected to a News model, this page and the homepage preview will update automatically.
        </p>
    </section>

    {{-- STAY IN THE LOOP CTA --}}
    <section class="bg-gray-50 py-16 border-t border-gray-200/80">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <h3 class="font-bold text-gray-900 text-xl mb-3">Never Miss an Update</h3>
            <p class="text-sm text-gray-600 mb-6 max-w-md mx-auto">Follow our official Facebook page for real-time announcements, advisories, and event coverage.</p>
            <a href="https://www.facebook.com/profile.php?id=100063774956493" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 bg-green-800 text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-green-900 transition text-sm">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.78-3.89 1.1 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12z"/>
                </svg>
                Follow on Facebook
            </a>
        </div>
    </section>

@endsection
