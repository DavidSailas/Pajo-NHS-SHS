@extends('layouts.app')

@section('title', 'Facilities | Pajo National High School - SHS')

@section('content')

    @php
        $facilityCards = [
            ['name' => 'Classrooms', 'blurb' => 'Well-ventilated, furnished classrooms for every grade level and strand.', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'],
            ['name' => 'School Library', 'blurb' => 'A quiet reading and research space stocked with print and digital references.', 'icon' => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
            ['name' => 'Covered Court', 'blurb' => 'Hosts PE classes, assemblies, and school-wide events rain or shine.', 'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'],
            ['name' => 'Computer Laboratory', 'blurb' => 'Networked workstations supporting ICT and Computer Programming lessons.', 'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z'],
            ['name' => 'TLE / TVL Workshop Area', 'blurb' => 'Dedicated stations for Cookery, Dressmaking, and Housekeeping practicals.', 'icon' => 'M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z'],
            ['name' => 'Canteen', 'blurb' => 'A clean, accessible dining area for learners and staff during break periods.', 'icon' => 'M18.75 12.75h1.5a2.25 2.25 0 000-4.5h-1.5m-13.5 0a2.25 2.25 0 000 4.5h1.5m8.25-4.5v6a3.75 3.75 0 11-7.5 0v-6m7.5 0h-7.5m7.5 0V6a3.75 3.75 0 10-7.5 0v2.25'],
        ];

        $hotelLabImages = [
            [
                'title' => 'Mini-Hotel Reception Desk',
                'desc' => 'Front office simulation area complete with front desk counter and international time zones.',
                'file' => 'images/facilities/hotel-reception.jpg'
            ],
            [
                'title' => 'Guest Room & Suite Setup',
                'desc' => 'Standard bedroom layout for housekeeping bed-making and room servicing practicals.',
                'file' => 'images/facilities/hotel-bedroom.jpg'
            ],
            [
                'title' => 'Wardrobe & Amenities Area',
                'desc' => 'Equipped with custom cabinetry, vanity mirror, entertainment unit, and mini-fridge.',
                'file' => 'images/facilities/hotel-wardrobe.jpg'
            ]
        ];
    @endphp

    {{-- PAGE HEADER --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">School Facilities</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">A learning environment that keeps improving, year after year.</p>
        </div>
    </section>

    {{-- FACILITIES --}}
    <section id="facilities" class="max-w-6xl mx-auto px-4 py-14 scroll-mt-32">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">On Campus</span>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-3">Our Facilities</h2>
            <p class="text-sm text-gray-500 mt-2">A quick look at the spaces learners use every day.</p>
        </div>
        <div class="grid gap-6 md:grid-cols-3">
            @foreach ($facilityCards as $facility)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-md transition">
                    <div class="h-40 bg-gradient-to-br from-green-800 to-green-950 flex items-center justify-center">
                        <svg class="w-10 h-10 text-green-300/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="{{ $facility['icon'] }}"/>
                        </svg>
                    </div>
                    <div class="p-5">
                        <p class="font-semibold text-gray-900">{{ $facility['name'] }}</p>
                        <p class="text-sm text-gray-500 mt-1.5 leading-relaxed">{{ $facility['blurb'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- MINI-HOTEL LABORATORY SHOWCASE --}}
    <section class="max-w-6xl mx-auto px-4 pb-16">
        <div class="bg-gradient-to-br from-green-50 to-emerald-50/50 rounded-3xl border border-green-200/60 p-8 md:p-12 shadow-sm">
            <div class="max-w-2xl mb-10">
                <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-200/60 px-3 py-1 rounded-full">TVL Specialized Laboratory</span>
                <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 tracking-tight mt-3">Mini-Hotel Laboratory</h2>
                <p class="text-sm text-gray-600 mt-2 leading-relaxed">A state-of-the-art simulation facility designed for Housekeeping, Front Office, and Hospitality Services practical training.</p>
            </div>

            <div class="grid gap-6 md:grid-cols-3">
                @foreach ($hotelLabImages as $index => $item)
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition flex flex-col group">
                        <div class="h-52 bg-gray-100 overflow-hidden relative cursor-pointer hotel-lab-item" data-index="{{ $index }}">
                            <img src="{{ asset($item['file']) }}" 
                                 alt="{{ $item['title'] }}" 
                                 loading="lazy" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                 onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=600&q=80';">
                            
                            <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                                <span class="bg-white/90 text-gray-900 text-xs font-semibold px-3 py-1.5 rounded-lg shadow-md backdrop-blur-sm">Click to view photo</span>
                            </div>
                        </div>
                        <div class="p-5 flex flex-col flex-1 justify-between">
                            <div>
                                <h3 class="font-bold text-gray-900 text-base mb-1">{{ $item['title'] }}</h3>
                                <p class="text-xs text-gray-600 leading-relaxed">{{ $item['desc'] }}</p>
                            </div>
                            <div class="pt-4 mt-4 border-t border-gray-100 flex items-center justify-between">
                                <span class="text-[11px] uppercase tracking-wider font-semibold text-green-700">Practical Training</span>
                                <button type="button" 
                                        class="text-xs font-semibold text-green-700 hover:text-green-800 hotel-lab-item inline-flex items-center gap-1"
                                        data-index="{{ $index }}">
                                    View Photo &rarr;
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- LIGHTBOX MODAL --}}
    <div id="hotel-lightbox" class="hidden fixed inset-0 bg-black/90 z-[100] flex items-center justify-center px-4">
        <button id="hotel-lightbox-close" aria-label="Close" class="absolute top-4 right-5 text-white text-3xl leading-none hover:text-green-300">&times;</button>
        <button id="hotel-lightbox-prev" aria-label="Previous" class="absolute left-2 md:left-6 text-white text-4xl leading-none hover:text-green-300 px-2">&#8249;</button>
        
        <div class="text-center">
            <img id="hotel-lightbox-image" src="" alt="Hotel Laboratory Preview" class="max-h-[80vh] max-w-full rounded-lg shadow-2xl select-none mx-auto">
            <p id="hotel-lightbox-caption" class="text-white/90 text-sm mt-3 font-medium"></p>
        </div>

        <button id="hotel-lightbox-next" aria-label="Next" class="absolute right-2 md:right-6 text-white text-4xl leading-none hover:text-green-300 px-2">&#8250;</button>
    </div>

    <script>
        (function () {
            const images = [
                "{{ asset('images/facilities/hotel-reception.jpg') }}",
                "{{ asset('images/facilities/hotel-bedroom.jpg') }}",
                "{{ asset('images/facilities/hotel-wardrobe.jpg') }}"
            ];
            const titles = [
                "Mini-Hotel Reception Desk",
                "Guest Room & Suite Setup",
                "Wardrobe & Amenities Area"
            ];

            let current = 0;
            const modal   = document.getElementById('hotel-lightbox');
            const img     = document.getElementById('hotel-lightbox-image');
            const caption = document.getElementById('hotel-lightbox-caption');

            function openModal(index) {
                current = index;
                render();
                modal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }

            function closeModal() {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }

            function render() {
                img.src = images[current];
                caption.textContent = titles[current];
            }

            function next() { current = (current + 1) % images.length; render(); }
            function prev() { current = (current - 1 + images.length) % images.length; render(); }

            document.querySelectorAll('.hotel-lab-item').forEach(function (el) {
                el.addEventListener('click', function () {
                    openModal(parseInt(el.dataset.index, 10));
                });
            });

            document.getElementById('hotel-lightbox-close').addEventListener('click', closeModal);
            document.getElementById('hotel-lightbox-next').addEventListener('click', next);
            document.getElementById('hotel-lightbox-prev').addEventListener('click', prev);

            modal.addEventListener('click', function (e) {
                if (e.target === modal) closeModal();
            });

            document.addEventListener('keydown', function (e) {
                if (modal.classList.contains('hidden')) return;
                if (e.key === 'Escape') closeModal();
                if (e.key === 'ArrowRight') next();
                if (e.key === 'ArrowLeft') prev();
            });
        })();
    </script>

    {{-- RECENT IMPROVEMENTS --}}
    <section id="improvements" class="py-16 border-t border-gray-200/80 scroll-mt-32">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">Always Improving</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 tracking-tight mt-3">Recent Facility Improvements</h2>
            </div>

            <div class="grid gap-6 md:grid-cols-3">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6">
                    <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">High-Speed Internet</h3>
                    <p class="text-sm text-gray-500">Upgraded connection speeds across computer labs and administrative offices.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6">
                    <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Laboratory Upgrades</h3>
                    <p class="text-sm text-gray-500">New tools and simulation setups added for TVL practical training strands.</p>
                </div>
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6">
                    <div class="w-11 h-11 rounded-xl bg-green-50 text-green-700 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-2">Facility Cleanliness & Ramps</h3>
                    <p class="text-sm text-gray-500">Improved accessibility ramps and optimized spaces for daily classroom use.</p>
                </div>
            </div>
        </div>
    </section>

@endsection