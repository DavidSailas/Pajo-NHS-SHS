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

    {{-- SPECIAL PROJECTS & INITIATIVES SHOWCASE --}}
    <section class="max-w-6xl mx-auto px-4 pb-16">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">Innovation & Support</span>
            <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 tracking-tight mt-3">School Flagship Projects</h2>
            <p class="text-base text-gray-600 mt-3">Specialized programs and safety initiatives led by our faculty and administration.</p>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            
            {{-- Project G.E.A.R --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition flex flex-col group">
                <div class="h-56 bg-gray-100 overflow-hidden relative cursor-pointer gallery-item" data-index="0">
                    <img src="{{ asset('images/achievements/project-gear.jpg') }}" alt="Project G.E.A.R - Good Equipment Adheres Resiliency" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-red-100 text-red-800 shadow-sm">
                        DRRM Initiative
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-1">Project G.E.A.R</h3>
                    <p class="text-xs font-medium text-green-700 mb-2">Good Equipment Adheres Resiliency</p>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">Ensuring campus safety, disaster preparedness, and resilience through proper emergency equipment and training.</p>
                </div>
            </div>

            {{-- Project Reading --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition flex flex-col group">
                <div class="h-56 bg-gray-100 overflow-hidden relative cursor-pointer gallery-item" data-index="1">
                    <img src="{{ asset('images/achievements/project-reading.jpg') }}" alt="Project READING - Reinforcing English Achievement through Development in Integrated Grammar" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-blue-100 text-blue-800 shadow-sm">
                        Academic
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-1">Project READING</h3>
                    <p class="text-xs font-medium text-green-700 mb-2">Led by Dr. Julian John N. Limutan</p>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">Reinforcing English Achievement through Development in Integrated Grammar to elevate student literacy comprehension.</p>
                </div>
            </div>

            {{-- Project S.A.G.I.P --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition flex flex-col group">
                <div class="h-56 bg-gray-100 overflow-hidden relative cursor-pointer gallery-item" data-index="2">
                    <img src="{{ asset('images/achievements/project-sagip.jpg') }}" alt="Project S.A.G.I.P - Student Assistance Grants for Indigent Pupils" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 shadow-sm">
                        Support Program
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-1">Project S.A.G.I.P</h3>
                    <p class="text-xs font-medium text-green-700 mb-2">Student Assistance Grants</p>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">School-based financial assistance and support program providing educational aid for deserving learners.</p>
                </div>
            </div>

            {{-- Project 3Es --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden hover:shadow-lg transition flex flex-col group">
                <div class="h-56 bg-gray-100 overflow-hidden relative cursor-pointer gallery-item" data-index="3">
                    <img src="{{ asset('images/achievements/project-3es.jpg') }}" alt="Project 3Es - E-Library for Excellent Education" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <span class="absolute top-3 left-3 text-[11px] font-bold uppercase tracking-wide px-2.5 py-1 rounded-full bg-purple-100 text-purple-800 shadow-sm">
                        Digital Learning
                    </span>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="font-bold text-gray-900 text-base leading-snug mb-1">Project 3Es</h3>
                    <p class="text-xs font-medium text-green-700 mb-2">E-Library for Excellent Education</p>
                    <p class="text-xs text-gray-600 leading-relaxed flex-1">Modernizing student research and resource accessibility through digital library integration and tech tools.</p>
                </div>
            </div>

        </div>
    </section>

    {{-- GALLERY GRID --}}
    <section class="max-w-6xl mx-auto px-4 pb-16">
        <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-900 border-l-4 border-green-800 pl-3">Achievement Gallery &amp; Moments</h2>
        </div>

        @if ($images->isEmpty())
            <p class="text-center text-gray-500">Achievement photos will be posted here soon.</p>
        @else
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-5 [column-fill:_balance]">
                {{-- If you have dynamic images array, loop them here. We include the featured project images in the JS array mapping below --}}
                @foreach ($images as $i => $image)
                    <button type="button"
                            class="gallery-item block w-full mb-5 rounded-xl overflow-hidden shadow-sm border border-gray-200/80 hover:shadow-xl transition-all duration-300 group break-inside-avoid focus:outline-none focus:ring-2 focus:ring-green-700"
                            data-index="{{ $i + 4 }}">
                        <img src="{{ asset($image['thumb']) }}"
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
            // Combine flagship project images with any dynamic gallery images
            const flagshipImages = [
                "{{ asset('images/achievements/project-gear.jpg') }}",
                "{{ asset('images/achievements/project-reading.jpg') }}",
                "{{ asset('images/achievements/project-sagip.jpg') }}",
                "{{ asset('images/achievements/project-3es.jpg') }}"
            ];
            const dynamicImages = @json($images->pluck('full'));
            const images = flagshipImages.concat(dynamicImages);

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