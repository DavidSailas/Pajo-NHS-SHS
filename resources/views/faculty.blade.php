@extends('layouts.app')

@section('title', 'Faculty & Staff | Pajo National High School - SHS')

@section('content')
    <section class="max-w-6xl mx-auto px-4 py-14">
        <h1 class="text-3xl font-bold mb-2">Faculty & Staff</h1>
        <p class="text-gray-600 mb-8">Click a teacher's photo to watch their introduction video.</p>

        {{--
            TEMP: hard-coded sample data.
            Once the `teachers` table + controller are built, loop over $teachers instead.
        --}}
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-4">
            @php
                // TODO: once the `teachers` table + controller exist, replace this with
                // Teacher::orderBy('sort_order')->get() and drop this hard-coded array.
                // Each photo path below just needs the matching file dropped into
                // images/teachers/ — no code changes needed once the client sends photos.
                $teachers = [
                    // Photo now provided by the client — matches the video slug naming convention.
                    ['name' => 'Jennifer P. Gonzaga',      'credentials' => '', 'photo' => 'images/teachers/gonzaga-jennifer-p.jpg', 'video' => 'videos/teachers/gonzaga-jennifer-p.mp4'],
                    ['name' => 'Alexis C. Heyrosa',        'credentials' => '', 'photo' => 'images/teachers/heyrosa-alexis-c.jpg', 'video' => 'videos/teachers/heyrosa-alexis-c.mp4'],
                    ['name' => 'Julian John N. Limutan',   'credentials' => '', 'photo' => 'images/teachers/limutan-julian-john-n.jpg', 'video' => 'videos/teachers/limutan-julian-john-n.mp4'],
                    ['name' => 'Jan Ann P. Montejo',       'credentials' => '', 'photo' => 'images/teachers/montejo-jan-ann-p.jpg', 'video' => 'videos/teachers/montejo-jan-ann-p.mp4'],
                    ['name' => 'Glenny B. Abad',           'credentials' => '', 'photo' => 'images/teachers/abad-glenny-b.jpg', 'video' => 'videos/teachers/abad-glenny-b.mp4'],
                    ['name' => 'Rodetha P. Catadman',      'credentials' => '', 'photo' => 'images/teachers/catadman-rodetha-p.jpg', 'video' => 'videos/teachers/catadman-rodetha-p.mp4'],
                    ['name' => 'Julieta L. Embralinag',    'credentials' => '', 'photo' => 'images/teachers/embralinag-julieta-l.jpg', 'video' => 'videos/teachers/embralinag-julieta-l.mp4'],
                    ['name' => 'Aiko J. Epe',              'credentials' => '', 'photo' => 'images/teachers/epe-aiko-j.jpg', 'video' => 'videos/teachers/epe-aiko-j.mp4'],
                    ['name' => 'Cristina Esmeña',          'credentials' => '', 'photo' => 'images/teachers/esmena-cristina.jpg', 'video' => 'videos/teachers/esmena-cristina.mp4'],
                    ['name' => 'Abegail Glarian',          'credentials' => '', 'photo' => 'images/teachers/glarian-abegail.jpg', 'video' => 'videos/teachers/glarian-abegail.mp4'],
                    ['name' => 'Mariel H. Ursabia',        'credentials' => '', 'photo' => 'images/teachers/ursabia-mariel-h.jpg', 'video' => 'videos/teachers/ursabia-mariel-h.mp4'],
                    ['name' => 'Celosteo A. Villaceran',   'credentials' => '', 'photo' => 'images/teachers/villaceran-celosteo-a.jpg', 'video' => 'videos/teachers/villaceran-celosteo-a.mp4'],
                    ['name' => 'Ednalyn P. Viloria',       'credentials' => '', 'photo' => 'images/teachers/viloria-ednalyn-p.jpg', 'video' => 'videos/teachers/viloria-ednalyn-p.mp4'],
                    ['name' => 'Christine V. Ramirez',     'credentials' => '', 'photo' => 'images/teachers/ramirez-christine-v.jpg', 'video' => 'videos/teachers/ramirez-christine-v.mp4'],
                    ['name' => 'Leni Rebusit',             'credentials' => '', 'photo' => 'images/teachers/rebusit-leni.jpg', 'video' => 'videos/teachers/rebusit-leni.mp4'],
                    ['name' => 'Jasmin E. Rosaroso',       'credentials' => '', 'photo' => 'images/teachers/rosaroso-jasmin-e.jpg', 'video' => 'videos/teachers/rosaroso-jasmin-e.mp4'],

                    // Photos received, but name/credentials/video not yet confirmed by the client.
                    // Once known, just fill in 'name'/'credentials' and add a 'video' path.
                    ['name' => 'Faculty Member', 'credentials' => '', 'photo' => 'images/teachers/teacher-01.jpg', 'video' => null],
                    ['name' => 'Faculty Member', 'credentials' => '', 'photo' => 'images/teachers/teacher-02.jpg', 'video' => null],
                    ['name' => 'Faculty Member', 'credentials' => '', 'photo' => 'images/teachers/teacher-03.jpg', 'video' => null],
                    ['name' => 'Faculty Member', 'credentials' => '', 'photo' => 'images/teachers/teacher-04.jpg', 'video' => null],
                    ['name' => 'Faculty Member', 'credentials' => '', 'photo' => 'images/teachers/teacher-05.jpg', 'video' => null],
                    ['name' => 'Faculty Member', 'credentials' => '', 'photo' => 'images/teachers/teacher-06.jpg', 'video' => null],
                    ['name' => 'Faculty Member', 'credentials' => '', 'photo' => 'images/teachers/teacher-07.jpg', 'video' => null],
                    ['name' => 'Faculty Member', 'credentials' => '', 'photo' => 'images/teachers/teacher-08.jpg', 'video' => null],
                ];
            @endphp

            @foreach ($teachers as $teacher)
                @if(!empty($teacher['video']))
                    <button type="button"
                            class="teacher-card group relative flex flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-stone-900/5 shadow-sm text-left transition-shadow duration-300 hover:shadow-lg"
                            data-video="{{ asset($teacher['video']) }}"
                            data-name="{{ $teacher['name'] }}">
                        <div class="relative aspect-square overflow-hidden bg-stone-100">
                            <img src="{{ asset($teacher['photo']) }}" alt="{{ $teacher['name'] }}"
                                 onerror="this.onerror=null; this.src='{{ asset('images/teachers/placeholder.jpg') }}';"
                                 class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105">
                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/35 via-transparent to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                            {{-- play badge so the card reads as clickable even before real photos arrive --}}
                            <div class="absolute bottom-2.5 right-2.5 flex h-9 w-9 items-center justify-center rounded-full bg-white/95 shadow-sm transition-colors duration-300 group-hover:bg-[#12432c]">
                                <svg class="w-3.5 h-3.5 translate-x-[1px] text-[#12432c] transition-colors duration-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                        <div class="px-4 py-3">
                            <p class="font-semibold text-stone-800 leading-snug">{{ $teacher['name'] }}</p>
                            @if(!empty($teacher['credentials']))
                                <p class="text-sm text-stone-500 mt-0.5">{{ $teacher['credentials'] }}</p>
                            @endif
                        </div>
                    </button>
                @else
                    {{-- No video yet — plain, non-clickable card so it doesn't look broken --}}
                    <div class="relative flex flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-stone-900/5 shadow-sm">
                        <div class="relative aspect-square overflow-hidden bg-stone-100">
                            <img src="{{ asset($teacher['photo']) }}" alt="{{ $teacher['name'] }}"
                                 onerror="this.onerror=null; this.src='{{ asset('images/teachers/placeholder.jpg') }}';"
                                 class="w-full h-full object-cover object-top">
                        </div>
                        <div class="px-4 py-3">
                            <p class="font-semibold text-stone-800 leading-snug">{{ $teacher['name'] }}</p>
                            <p class="text-xs text-stone-400 mt-0.5">Video coming soon</p>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>

    {{-- Video Modal --}}
    <div id="teacher-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-stone-900/80 px-4 backdrop-blur-sm">
        <div class="relative w-full max-w-2xl rounded-2xl bg-white p-5 shadow-2xl">
            <div class="mb-4 flex items-center justify-between">
                <h3 id="teacher-modal-name" class="text-lg font-semibold text-stone-800"></h3>
                <button id="teacher-modal-close"
                        class="flex h-8 w-8 items-center justify-center rounded-full text-stone-400 transition-colors hover:bg-stone-100 hover:text-stone-700">
                    <span class="text-2xl leading-none">&times;</span>
                </button>
            </div>
            <video id="teacher-modal-video" class="w-full rounded-lg bg-black" controls></video>
        </div>
    </div>

    <script>
        document.querySelectorAll('.teacher-card').forEach(function (card) {
            card.addEventListener('click', function () {
                const modal = document.getElementById('teacher-modal');
                const video = document.getElementById('teacher-modal-video');
                document.getElementById('teacher-modal-name').textContent = card.dataset.name;
                video.src = card.dataset.video;
                modal.classList.remove('hidden');
                video.play();
            });
        });

        document.getElementById('teacher-modal-close').addEventListener('click', function () {
            const modal = document.getElementById('teacher-modal');
            const video = document.getElementById('teacher-modal-video');
            video.pause();
            video.src = '';
            modal.classList.add('hidden');
        });
    </script>
@endsection
