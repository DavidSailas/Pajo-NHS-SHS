@extends('layouts.app')

@section('title', 'News & Updates | Pajo National High School - SHS')

@section('content')

    {{-- PAGE HEADER --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <span class="inline-flex items-center gap-2 bg-green-800/80 text-green-200 text-xs font-medium px-3.5 py-1.5 rounded-full uppercase tracking-wider mb-5 border border-green-700/60">
                The Voyager &middot; Official Newsletter
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">News &amp; Updates</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">Announcements, advisories, and official newsletter issues from Pajo National High School - SHS.</p>
        </div>
    </section>

    {{-- NEWS & NEWSLETTER GRID --}}
    <section class="max-w-6xl mx-auto px-4 py-14">

        {{-- AUGUST 2026 ISSUES --}}
        <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-900 border-l-4 border-green-800 pl-3">The Voyager Official Issues (August 2026)</h2>
            <p class="text-sm text-gray-600 mt-1">Browse our latest school publications highlighting student achievements, competitions, and campus events.</p>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4 mb-16">
            
            {{-- ISSUE NO. 70 (AUG 2026) --}}
            <article class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group flex flex-col">
                <div class="h-48 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/news/issue-70.jpg') }}" alt="Issue No. 70" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-blue-100 text-blue-800 shadow-sm">
                        Issue No. 70
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <p class="text-xs text-gray-400 font-medium mb-1">August 4, 2026</p>
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-2 group-hover:text-green-800 transition">Nourishing Excellence: Nutrition Month 2026</h3>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">Pajo SHS recognizes Nutrition Month 2026 winners and promotes healthy, active lifestyles across all strands.</p>
                    <a href="#" class="text-xs font-semibold text-green-700 mt-4 inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Read Issue &rarr;
                    </a>
                </div>
            </article>

            {{-- ISSUE NO. 71 (AUG 2026) --}}
            <article class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group flex flex-col">
                <div class="h-48 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/news/issue-71.jpg') }}" alt="Issue No. 71" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-green-100 text-green-800 shadow-sm">
                        Issue No. 71
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <p class="text-xs text-gray-400 font-medium mb-1">August 17, 2026</p>
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-2 group-hover:text-green-800 transition">Buwan ng Wika Kickoff</h3>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">Pajo SHS opens Buwan ng Wika celebration featuring Likhang Awit, Lakan at Lakambini competitions.</p>
                    <a href="#" class="text-xs font-semibold text-green-700 mt-4 inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Read Issue &rarr;
                    </a>
                </div>
            </article>

            {{-- ISSUE NO. 72 (AUG 2026) --}}
            <article class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group flex flex-col">
                <div class="h-48 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/news/issue-72.jpg') }}" alt="Issue No. 72" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-orange-100 text-orange-800 shadow-sm">
                        Issue No. 72
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <p class="text-xs text-gray-400 font-medium mb-1">August 17, 2026</p>
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-2 group-hover:text-green-800 transition">Journalism Training Workshop</h3>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">Pajo SHS student journalists attend Division Journalism Training at Lo-ok National High School.</p>
                    <a href="#" class="text-xs font-semibold text-green-700 mt-4 inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Read Issue &rarr;
                    </a>
                </div>
            </article>

            {{-- ISSUE NO. 73 (AUG 2026) --}}
            <article class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group flex flex-col">
                <div class="h-48 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/news/issue-73.jpg') }}" alt="Issue No. 73" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-purple-100 text-purple-800 shadow-sm">
                        Issue No. 73
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <p class="text-xs text-gray-400 font-medium mb-1">August 21, 2026</p>
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-2 group-hover:text-green-800 transition">Wraps Up Buwan ng Wika 2026</h3>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">Filipino Language in Motion: Pajo SHS concludes month-long cultural festivities and honors event winners.</p>
                    <a href="#" class="text-xs font-semibold text-green-700 mt-4 inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Read Issue &rarr;
                    </a>
                </div>
            </article>

        </div>

        {{-- ACADEMIC YEAR 2025-2026 ARCHIVE ISSUES --}}
        <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-900 border-l-4 border-green-800 pl-3">Archived Issues (Academic Year 2025–2026)</h2>
            <p class="text-sm text-gray-600 mt-1">Previous editions covering campus upgrades, coastal cleanups, academic competitions, and disaster recovery milestones.</p>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4 mb-16">
            
            {{-- VOL. 1, NO. 1 (AY 2025-2026 - MAIN EDITION) --}}
            <article class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group flex flex-col">
                <div class="h-48 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/news/vol1-no1.jpg') }}" alt="Vol. 1, No. 1 Edition" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 shadow-sm">
                        Vol. 1, No. 1
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <p class="text-xs text-gray-400 font-medium mb-1">Academic Year 2025–2026</p>
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-2 group-hover:text-green-800 transition">The Voyager Official Launch Issue</h3>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">Pajo National High School - Senior High School official publication featuring campus news, features, editorials, and science and technology updates.</p>
                    <a href="#" class="text-xs font-semibold text-green-700 mt-4 inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Read Issue &rarr;
                    </a>
                </div>
            </article>

            {{-- COASTAL CLEANUP & DIVISION WINS --}}
            <article class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group flex flex-col">
                <div class="h-48 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/news/coastal-cleanup.jpg') }}" alt="Coastal Cleanup and Press Conference Wins" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 shadow-sm">
                        Page 2 Highlights
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <p class="text-xs text-gray-400 font-medium mb-1">September 20, 2025</p>
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-2 group-hover:text-green-800 transition">Coastal Cleanup &amp; Press Conference Wins</h3>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">Pajo SHS community joins the International Coastal Cleanup along Mactan Channel, and journos excel in Science, Math, and Press Conferences.</p>
                    <a href="#" class="text-xs font-semibold text-green-700 mt-4 inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Read Issue &rarr;
                    </a>
                </div>
            </article>

            {{-- RECOVERY & WELLNESS INITIATIVES --}}
            <article class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group flex flex-col">
                <div class="h-48 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/news/recovery-wellness.jpg') }}" alt="Recovery and Wellness Initiatives" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 shadow-sm">
                        Page 3 Highlights
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <p class="text-xs text-gray-400 font-medium mb-1">November 2025</p>
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-2 group-hover:text-green-800 transition">Resumes Classes &amp; Recovery Projects</h3>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">Following class suspensions from recent disasters, Pajo SHS launches recovery initiatives including Project HEART, WELL, and SAGIP to support student well-being.</p>
                    <a href="#" class="text-xs font-semibold text-green-700 mt-4 inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Read Issue &rarr;
                    </a>
                </div>
            </article>

            {{-- DRRM INSPECTIONS & INSET 2025 --}}
            <article class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group flex flex-col">
                <div class="h-48 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/news/drrm-inset.jpg') }}" alt="DRRM Inspections and INSET 2025" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 shadow-sm">
                        Page 4 Highlights
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <p class="text-xs text-gray-400 font-medium mb-1">October – November 2025</p>
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-2 group-hover:text-green-800 transition">DRRM Facility Inspections &amp; INSET 2025</h3>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">LGU, Division, and School DRRM coordinators inspect campus facilities following the earthquake, alongside the kickoff of INSET 2025 for educators.</p>
                    <a href="#" class="text-xs font-semibold text-green-700 mt-4 inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Read Issue &rarr;
                    </a>
                </div>
            </article>

        </div>

        {{-- JULY 2025 ARCHIVE ISSUES --}}
        <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-900 border-l-4 border-green-800 pl-3">Early Milestones (July 2025)</h2>
            <p class="text-sm text-gray-600 mt-1">Previous editions from the school archives highlighting early milestones and assemblies.</p>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            
            {{-- ISSUE NO. 16 (JULY 15, 2025 - TURNOVER CEREMONY) --}}
            <article class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group flex flex-col">
                <div class="h-48 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/news/issue-16-turnover.jpg') }}" alt="Issue No. 16 Turnover Ceremony" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 shadow-sm">
                        Issue No. 16
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <p class="text-xs text-gray-400 font-medium mb-1">July 15, 2025</p>
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-2 group-hover:text-green-800 transition">City-Led Turnover Ceremony</h3>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">Pajo SHS learners join city-led turnover ceremony as the SSLG President speaks for District III youth.</p>
                    <a href="#" class="text-xs font-semibold text-green-700 mt-4 inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Read Issue &rarr;
                    </a>
                </div>
            </article>

            {{-- ISSUE NO. 17 (JULY 21, 2025 - HPTA/SPTA ASSEMBLY) --}}
            <article class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group flex flex-col">
                <div class="h-48 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/news/issue-17-assembly.jpg') }}" alt="Issue No. 17 HPTA and SPTA Assembly" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 shadow-sm">
                        Issue No. 17
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <p class="text-xs text-gray-400 font-medium mb-1">July 21, 2025</p>
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-2 group-hover:text-green-800 transition">First HPTA and SPTA General Assembly</h3>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">Pajo National High School holds its first Homeroom Parents-Teachers and Students-Parents General Assembly.</p>
                    <a href="#" class="text-xs font-semibold text-green-700 mt-4 inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Read Issue &rarr;
                    </a>
                </div>
            </article>

            {{-- ISSUE NO. 18 (JULY 16, 2025 - NUTRITION MONTH POSTER/SLOGAN) --}}
            <article class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition group flex flex-col">
                <div class="h-48 bg-gray-100 overflow-hidden relative">
                    <img src="{{ asset('images/news/issue-18-nutrition.jpg') }}" alt="Issue No. 18 Nutrition Month" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 shadow-sm">
                        Issue No. 18
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <p class="text-xs text-gray-400 font-medium mb-1">July 16, 2025</p>
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-2 group-hover:text-green-800 transition">Art for Health: Poster &amp; Slogan Contest</h3>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">Pajo Senior High holds vibrant Poster and Slogan Contest in celebration of Nutrition Month 2025.</p>
                    <a href="#" class="text-xs font-semibold text-green-700 mt-4 inline-flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Read Issue &rarr;
                    </a>
                </div>
            </article>

        </div>

    </section>

    {{-- STAY IN THE LOOP CTA --}}
    <section class="bg-gray-50 py-16 border-t border-gray-200/80">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <h3 class="font-bold text-gray-900 text-xl mb-3">Never Miss an Update</h3>
            <p class="text-sm text-gray-600 mb-6 max-w-md mx-auto">Follow our official Facebook page for real-time announcements, advisories, and full newsletter releases.</p>
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