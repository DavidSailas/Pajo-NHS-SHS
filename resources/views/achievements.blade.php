@extends('layouts.app')

@section('title', 'Achievements | Pajo National High School - SHS')

@section('content')

    {{-- PAGE HEADER --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">School & Student Achievements</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">Celebrating milestones, honors, and proud competitive moments achieved by Pajo National High School Senior High learners.</p>
        </div>
    </section>

    {{-- STUDENT & FACULTY ACHIEVERS (S.Y. 2024-2025) --}}
    <section class="max-w-6xl mx-auto px-4 py-16 border-t border-gray-100">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">S.Y. 2024–2025</span>
            <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 tracking-tight mt-3">Student & Faculty Achievers</h2>
        </div>

        <div class="grid gap-6 md:grid-cols-3">

            <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6">
                <span class="inline-block text-xs font-semibold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md mb-3">HUMSS</span>
                <ul class="text-sm text-gray-700 space-y-2">
                    <li>1st Place, District Values Month Poster Making Contest</li>
                    <li>2nd Place, District Values Month Collage Making Contest</li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6">
                <span class="inline-block text-xs font-semibold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md mb-3">Journalism</span>
                <ul class="text-sm text-gray-700 space-y-2">
                    <li><span class="font-medium text-gray-900">Aerica Allysa Seballos</span> — 2nd Place (District), Science and Technology Writing (English); Participant, Division Schools Press Conference</li>
                    <li><span class="font-medium text-gray-900">Sharwee Eviota</span> — 3rd Place (District), Sports Writing (Filipino); 2nd Place (Division), Schools Press Conference; Delegate, Regional Schools Press Conference (Siquijor)</li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-6">
                <span class="inline-block text-xs font-semibold text-green-700 uppercase tracking-wider bg-green-50 px-2.5 py-1 rounded-md mb-3">Sports & Extracurriculars</span>
                <ul class="text-sm text-gray-700 space-y-2">
                    <li><span class="font-medium text-gray-900">Ferdinand Vivien Corbo Grafia</span> — Champion, District Basketball Meet</li>
                    <li><span class="font-medium text-gray-900">Nicole Ann Joy Sequillo</span> — 3rd Placer, Miss City Palaro</li>
                    <li>Active school participation in Dancesports and Billiards</li>
                </ul>
            </div>

        </div>
    </section>

    {{-- GALLERY GRID --}}
    <section class="max-w-6xl mx-auto px-4 pb-16">

        @if ($images->isEmpty())
            <p class="text-center text-gray-500">Achievement photos will be posted here soon.</p>
        @else
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-5 [column-fill:_balance]">
                @foreach ($images as $i => $image)
                    <button type="button"
                            class="gallery-item block w-full mb-5 rounded-xl overflow-hidden shadow-sm border border-gray-200/80 hover:shadow-xl transition-all duration-300 group break-inside-avoid focus:outline-none focus:ring-2 focus:ring-green-700"
                            data-index="{{ $i }}">
                        <img src="{{ $image['thumb'] }}"
                             alt="{{ $image['alt'] }}"
                             loading="lazy"
                             class="w-full h-auto object-cover group-hover:scale-105 transition duration-500">
                    </button>
                @endforeach
            </div>
        @endif
    </section>

    {{-- LIGHTBOX --}}
    <div id="lightbox" class="hidden fixed inset-0 bg-black/90 z-[100] flex items-center justify-center px-4">
        <button id="lightbox-close" aria-label="Close" class="absolute top-4 right-5 text-white text-3xl leading-none hover:text-green-300">&times;</button>

        <button id="lightbox-prev" aria-label="Previous" class="absolute left-2 md:left-6 text-white text-4xl leading-none hover:text-green-300 px-2">&#8249;</button>

        <img id="lightbox-image" src="" alt="" class="max-h-[85vh] max-w-full rounded-lg shadow-2xl select-none">

        <button id="lightbox-next" aria-label="Next" class="absolute right-2 md:right-6 text-white text-4xl leading-none hover:text-green-300 px-2">&#8250;</button>

        <div id="lightbox-counter" class="absolute bottom-5 left-1/2 -translate-x-1/2 text-white/80 text-sm"></div>
    </div>

    <script>
        (function () {
            const images = @json($images->pluck('full'));
            if (!images.length) return;

            let current = 0;
            const lightbox    = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-image');
            const counter     = document.getElementById('lightbox-counter');

            function open(index) {
                current = index;
                render();
                lightbox.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            }

            function close() {
                lightbox.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }

            function render() {
                lightboxImg.src = images[current];
                counter.textContent = (current + 1) + ' / ' + images.length;
            }

            function next() { current = (current + 1) % images.length; render(); }
            function prev() { current = (current - 1 + images.length) % images.length; render(); }

            document.querySelectorAll('.gallery-item').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    open(parseInt(btn.dataset.index, 10));
                });
            });

            document.getElementById('lightbox-close').addEventListener('click', close);
            document.getElementById('lightbox-next').addEventListener('click', next);
            document.getElementById('lightbox-prev').addEventListener('click', prev);

            lightbox.addEventListener('click', function (e) {
                if (e.target === lightbox) close();
            });

            document.addEventListener('keydown', function (e) {
                if (lightbox.classList.contains('hidden')) return;
                if (e.key === 'Escape') close();
                if (e.key === 'ArrowRight') next();
                if (e.key === 'ArrowLeft') prev();
            });
        })();
    </script>

@endsection
