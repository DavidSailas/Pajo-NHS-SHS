@extends('layouts.app')

@section('title', 'School Flagship Projects | Pajo National High School - SHS')

@section('content')

    {{--
        FLAGSHIP PROJECTS & INNOVATIONS
        Reuses achievement assets where applicable, with unique placeholders for the rest.
    --}}
    @php
        $innovations = [
            [
                'name' => 'Project SNS',
                'lead' => 'Christine Ramirez',
                'desc' => 'A homegrown initiative focused on strengthening student support systems inside and outside the classroom.',
                'image' => asset('images/achievements/project-sagip.jpg'), // Reusing an achievement image asset
                'badge' => 'Support System',
                'badge_color' => 'bg-green-100 text-green-800',
            ],
            [
                'name' => 'Project 3Es',
                'lead' => 'Allegail Berame Glarian',
                'desc' => 'Promotes a shared approach among teachers and learners built around three core values that guide daily classroom practice.',
                'image' => asset('images/achievements/project-3es.jpg'), // Reusing the achievements 3Es image asset
                'badge' => 'Values & Practice',
                'badge_color' => 'bg-blue-100 text-blue-800',
            ],
            [
                'name' => 'Project REPAIR',
                'lead' => 'Alexis Heyrosa',
                'desc' => 'A campus improvement effort centered on fixing, maintaining, and upgrading shared school facilities.',
                'image' => asset('images/achievements/project-gear.jpg'), // Reusing gear/facilities image asset
                'badge' => 'Facilities',
                'badge_color' => 'bg-amber-100 text-amber-800',
            ],
            [
                'name' => 'Project Discipline',
                'lead' => 'Rubina Aton Villaceran',
                'desc' => 'Reinforces school-wide values formation and positive discipline practices among senior high learners.',
                'image' => 'https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&w=800&q=80', // Unique distinct thumbnail
                'badge' => 'Values Formation',
                'badge_color' => 'bg-purple-100 text-purple-800',
            ],
            [
                'name' => 'Project SEE',
                'lead' => 'Juna Silawan Babatu-on',
                'desc' => 'Encourages learners to observe, reflect, and engage more actively with real-world issues in and beyond the classroom.',
                'image' => asset('images/achievements/project-reading.jpg'), // Reusing reading/engagement image asset
                'badge' => 'Engagement',
                'badge_color' => 'bg-emerald-100 text-emerald-800',
            ],
            [
                'name' => 'IPickMATH',
                'lead' => 'Carla',
                'desc' => 'A learner-driven approach to make mathematics more approachable through guided, interest-based practice.',
                'image' => 'https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80', // Unique distinct thumbnail
                'badge' => 'Academics',
                'badge_color' => 'bg-indigo-100 text-indigo-800',
            ],
        ];
    @endphp

    {{-- PAGE HEADER --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <span class="inline-flex items-center gap-2 bg-green-800/80 text-green-200 text-xs font-medium px-3.5 py-1.5 rounded-full uppercase tracking-wider mb-4 border border-green-700/60 shadow-sm">
                School Innovations &amp; Strategies
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">School Flagship Projects</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">Homegrown initiatives designed and led by our own teachers and staff to improve learning, safety, and school life.</p>
        </div>
    </section>

    {{-- FLAGSHIP PROJECTS / INNOVATIONS GRID --}}
    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($innovations as $item)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition flex flex-col group">
                    {{-- Thumbnail Header with Lightbox Trigger --}}
                    <div class="h-52 bg-gray-100 overflow-hidden relative cursor-pointer innovation-card-link" 
                         data-image="{{ $item['image'] }}"
                         data-title="{{ $item['name'] }}">
                        <img src="{{ $item['image'] }}" 
                             alt="{{ $item['name'] }}" 
                             loading="lazy" 
                             class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                             onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80';">
                        
                        <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full {{ $item['badge_color'] }} shadow-sm">
                            {{ $item['badge'] }}
                        </span>

                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <span class="bg-white/90 text-gray-900 text-xs font-semibold px-3 py-1.5 rounded-lg shadow-md backdrop-blur-sm">Click to view photo</span>
                        </div>
                    </div>

                    {{-- Content Body --}}
                    <div class="p-6 flex flex-col flex-1 justify-between">
                        <div>
                            <h3 class="font-bold text-gray-900 text-lg leading-snug mb-1">{{ $item['name'] }}</h3>
                            <p class="text-xs font-medium text-green-700 mb-3">Led by {{ $item['lead'] }}</p>
                            <p class="text-xs text-gray-600 leading-relaxed">{{ $item['desc'] }}</p>
                        </div>
                        <div class="pt-4 mt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-[11px] uppercase tracking-wider font-semibold text-gray-400">Pajo SHS Initiative</span>
                            <button type="button" 
                                    class="text-xs font-semibold text-green-700 hover:text-green-800 innovation-card-link inline-flex items-center gap-1"
                                    data-image="{{ $item['image'] }}"
                                    data-title="{{ $item['name'] }}">
                                View Photo &rarr;
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- LIGHTBOX MODAL --}}
    <div id="innovation-lightbox" class="hidden fixed inset-0 bg-black/90 z-[100] flex items-center justify-center px-4">
        <button id="innovation-lightbox-close" aria-label="Close" class="absolute top-4 right-5 text-white text-3xl leading-none hover:text-green-300">&times;</button>
        <div class="text-center">
            <img id="innovation-lightbox-image" src="" alt="Flagship Project Preview" class="max-h-[80vh] max-w-full rounded-lg shadow-2xl select-none mx-auto">
            <p id="innovation-lightbox-caption" class="text-white/90 text-sm mt-3 font-medium"></p>
        </div>
    </div>

    <script>
        (function () {
            const modal = document.getElementById('innovation-lightbox');
            const img   = document.getElementById('innovation-lightbox-image');
            const caption = document.getElementById('innovation-lightbox-caption');

            document.querySelectorAll('.innovation-card-link').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    img.src = btn.dataset.image;
                    caption.textContent = btn.dataset.title || '';
                    modal.classList.remove('hidden');
                    document.body.classList.add('overflow-hidden');
                });
            });

            function closeLightbox() {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }

            document.getElementById('innovation-lightbox-close').addEventListener('click', closeLightbox);
            modal.addEventListener('click', function (e) { if (e.target === modal) closeLightbox(); });
            document.addEventListener('keydown', function (e) { if (e.key === 'Escape') closeLightbox(); });
        })();
    </script>

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