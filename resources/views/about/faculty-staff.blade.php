@extends('layouts.app')

@section('title', 'Faculty & Staff | Pajo National High School - SHS')

@section('content')

    @php
        $schoolHead = [
            'name' => 'Dr. Glenny E. Laping',
            'position' => 'Principal II / School Head',
            'photo' => 'images/teachers/laping-glenny-e.jpg',
            'video' => null,
        ];

        // 4 Non-Teaching Staff (1 with photo, 3 placeholders)
        $nonTeachingStaff = [
            ['name' => 'Staff Member', 'position' => 'Non-Teaching Staff', 'credentials' => '', 'photo' => 'images/teachers/teacher-03.jpg', 'video' => null],
            ['name' => 'Staff Member', 'position' => 'Non-Teaching Staff', 'credentials' => '', 'photo' => 'images/teachers/placeholder.jpg', 'video' => null],
            ['name' => 'Staff Member', 'position' => 'Non-Teaching Staff', 'credentials' => '', 'photo' => 'images/teachers/placeholder.jpg', 'video' => null],
            ['name' => 'Staff Member', 'position' => 'Non-Teaching Staff', 'credentials' => '', 'photo' => 'images/teachers/placeholder.jpg', 'video' => null],
        ];

        // Teaching Staff with exact positions matching the records
        $teachers = [
            ['name' => 'Jennifer P. Gonzaga',    'position' => 'Teacher II',       'credentials' => '', 'photo' => 'images/teachers/gonzaga-jennifer-p.jpg', 'video' => 'videos/teachers/gonzaga-jennifer-p.mp4'],
            ['name' => 'Jan Ann P. Montejo',     'position' => 'Teacher II',       'credentials' => '', 'photo' => 'images/teachers/montejo-jan-ann-p.jpg', 'video' => 'videos/teachers/montejo-jan-ann-p.mp4'],
            ['name' => 'Alexis C. Heyrosa',      'position' => 'Master Teacher I', 'credentials' => '', 'photo' => 'images/teachers/heyrosa-alexis-c.jpg', 'video' => 'videos/teachers/heyrosa-alexis-c.mp4'],
            ['name' => 'Julian John N. Limutan', 'position' => 'Master Teacher I', 'credentials' => '', 'photo' => 'images/teachers/limutan-julian-john-n.jpg', 'video' => 'videos/teachers/limutan-julian-john-n.mp4'],
            ['name' => 'Glenny B. Abad',           'position' => 'Teacher II',       'credentials' => '', 'photo' => 'images/teachers/abad-glenny-b.jpg', 'video' => 'videos/teachers/abad-glenny-b.mp4'],
            ['name' => 'Rodetha P. Catadman',      'position' => 'Teacher III',      'credentials' => '', 'photo' => 'images/teachers/catadman-rodetha-p.jpg', 'video' => 'videos/teachers/catadman-rodetha-p.mp4'],
            ['name' => 'Julieta L. Embralinag',    'position' => 'Teacher III',      'credentials' => '', 'photo' => 'images/teachers/embralinag-julieta-l.jpg', 'video' => 'videos/teachers/embralinag-julieta-l.mp4'],
            ['name' => 'Aiko J. Epe',              'position' => 'Teacher I',        'credentials' => '', 'photo' => 'images/teachers/epe-aiko-j.jpg', 'video' => 'videos/teachers/epe-aiko-j.mp4'],
            ['name' => 'Cristina Esmeña',          'position' => 'Teacher I',        'credentials' => '', 'photo' => 'images/teachers/esmena-cristina.jpg', 'video' => 'videos/teachers/esmena-cristina.mp4'],
            ['name' => 'Abegail Glarian',          'position' => 'Master Teacher I', 'credentials' => '', 'photo' => 'images/teachers/glarian-abegail.jpg', 'video' => 'videos/teachers/glarian-abegail.mp4'],
            ['name' => 'Mariel H. Ursabia',        'position' => 'Teacher III',      'credentials' => '', 'photo' => 'images/teachers/ursabia-mariel-h.jpg', 'video' => 'videos/teachers/ursabia-mariel-h.mp4'],
            ['name' => 'Celosteo A. Villaceran',   'position' => 'Teacher II',       'credentials' => '', 'photo' => 'images/teachers/villaceran-celosteo-a.jpg', 'video' => 'videos/teachers/villaceran-celosteo-a.mp4'],
            ['name' => 'Ednalyn P. Viloria',       'position' => 'Master Teacher I', 'credentials' => '', 'photo' => 'images/teachers/viloria-ednalyn-p.jpg', 'video' => 'videos/teachers/viloria-ednalyn-p.mp4'],
            ['name' => 'Christine V. Ramirez',     'position' => 'Master Teacher II','credentials' => '', 'photo' => 'images/teachers/ramirez-christine-v.jpg', 'video' => 'videos/teachers/ramirez-christine-v.mp4'],
            ['name' => 'Leni Rebusit',             'position' => 'Teacher III',      'credentials' => '', 'photo' => 'images/teachers/rebusit-leni.jpg', 'video' => 'videos/teachers/rebusit-leni.mp4'],
            ['name' => 'Jasmin E. Rosaroso',       'position' => 'Teacher III',      'credentials' => '', 'photo' => 'images/teachers/rosaroso-jasmin-e.jpg', 'video' => 'videos/teachers/rosaroso-jasmin-e.mp4'],

            // Additional Teaching Staff placeholders
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/teacher-01.jpg', 'video' => null],
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/teacher-04.jpg', 'video' => null],
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/teacher-05.jpg', 'video' => null],
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/teacher-06.jpg', 'video' => null],
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/teacher-07.jpg', 'video' => null],
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/teacher-08.jpg', 'video' => null],
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/placeholder.jpg', 'video' => null],
            ['name' => 'Faculty Member', 'position' => '', 'credentials' => '', 'photo' => 'images/teachers/placeholder.jpg', 'video' => null],
        ];
    @endphp

    {{-- PAGE HEADER --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">Faculty & Staff</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">Meet the educators and personnel guiding every learner's Senior High School journey.</p>
        </div>
    </section>

    {{-- FACULTY & STAFF --}}
    <section id="faculty" class="max-w-6xl mx-auto px-4 py-16 scroll-mt-32">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">Meet the Team</span>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-3">Our Faculty & Staff</h2>
            <p class="text-sm text-gray-500 mt-2">Click a profile's photo to watch their introduction video.</p>
        </div>

        {{-- 1. SCHOOL HEAD FEATURED PROFILE --}}
        <div class="mb-16">
            <div class="text-center mb-6">
                <h3 class="text-xl font-bold text-gray-800 uppercase tracking-wide">School Head</h3>
            </div>
            <div class="max-w-3xl mx-auto bg-white rounded-3xl shadow-md border border-gray-200/80 overflow-hidden">
                <div class="bg-gradient-to-r from-green-900 to-green-950 px-6 py-4 flex items-center justify-between text-white">
                    <span class="text-xs font-bold uppercase tracking-widest text-green-300">Executive Leadership</span>
                    <span class="text-xs text-green-200/80">Pajo NHS &mdash; Senior High School</span>
                </div>
                <div class="p-6 md:p-8 flex flex-col sm:flex-row items-center gap-6 sm:gap-8 text-center sm:text-left">
                    <div class="relative shrink-0">
                        <div class="w-36 h-36 md:w-40 md:h-40 rounded-2xl overflow-hidden border border-green-900/10 shadow-md bg-gray-50">
                            <img src="{{ asset($schoolHead['photo']) }}" alt="{{ $schoolHead['name'] }}"
                                 onerror="this.onerror=null; this.src='{{ asset('images/teachers/placeholder.jpg') }}';"
                                 class="w-full h-full object-cover object-top">
                        </div>
                    </div>
                    <div>
                        <h4 class="text-2xl md:text-3xl font-extrabold text-gray-900 tracking-tight">{{ $schoolHead['name'] }}</h4>
                        <p class="text-green-700 font-semibold text-base mt-1">{{ $schoolHead['position'] }}</p>
                        <p class="text-sm text-gray-500 mt-2 leading-relaxed">
                            Leading administrative initiatives, instructional excellence, and community partnerships to ensure every Senior High School learner thrives.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- 2. NON-TEACHING STAFF SECTION (4 Staff) --}}
        <div class="mb-16">
            <div class="text-center mb-8">
                <h3 class="text-xl font-bold text-gray-800 uppercase tracking-wide">Non-Teaching Staff</h3>
                <div class="w-16 h-1 bg-green-700 mx-auto mt-2 rounded-full"></div>
            </div>
            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-4">
                @foreach ($nonTeachingStaff as $staff)
                    @if(!empty($staff['video']))
                        <button type="button"
                                class="teacher-card group relative flex flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-stone-900/5 shadow-sm text-left transition-shadow duration-300 hover:shadow-lg"
                                data-video="{{ asset($staff['video']) }}"
                                data-name="{{ $staff['name'] }}">
                            <div class="relative aspect-square overflow-hidden bg-stone-100">
                                <img src="{{ asset($staff['photo']) }}" alt="{{ $staff['name'] }}"
                                     onerror="this.onerror=null; this.src='{{ asset('images/teachers/placeholder.jpg') }}';"
                                     class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105">
                                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/35 via-transparent to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                                <div class="absolute bottom-2.5 right-2.5 flex h-9 w-9 items-center justify-center rounded-full bg-white/95 shadow-sm transition-colors duration-300 group-hover:bg-[#12432c]">
                                    <svg class="w-3.5 h-3.5 translate-x-[1px] text-[#12432c] transition-colors duration-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                </div>
                            </div>
                            <div class="px-4 py-3">
                                <p class="font-semibold text-stone-800 leading-snug">{{ $staff['name'] }}</p>
                                <p class="text-xs font-semibold text-green-700 uppercase tracking-wide mt-0.5">Non-Teaching Staff</p>
                            </div>
                        </button>
                    @else
                        <div class="relative flex flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-stone-900/5 shadow-sm">
                            <div class="relative aspect-square overflow-hidden bg-stone-100">
                                <img src="{{ asset($staff['photo']) }}" alt="{{ $staff['name'] }}"
                                     onerror="this.onerror=null; this.src='{{ asset('images/teachers/placeholder.jpg') }}';"
                                     class="w-full h-full object-cover object-top">
                            </div>
                            <div class="px-4 py-3">
                                <p class="font-semibold text-stone-800 leading-snug">{{ $staff['name'] }}</p>
                                <p class="text-xs font-semibold text-green-700 uppercase tracking-wide mt-0.5">Non-Teaching Staff</p>
                                <p class="text-xs text-stone-400 mt-0.5">Video coming soon</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        {{-- 3. TEACHING STAFF SECTION --}}
        <div>
            <div class="text-center mb-8">
                <h3 class="text-xl font-bold text-gray-800 uppercase tracking-wide">Teaching Staff</h3>
                <div class="w-16 h-1 bg-green-700 mx-auto mt-2 rounded-full"></div>
            </div>
            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-4">
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
                                <div class="absolute bottom-2.5 right-2.5 flex h-9 w-9 items-center justify-center rounded-full bg-white/95 shadow-sm transition-colors duration-300 group-hover:bg-[#12432c]">
                                    <svg class="w-3.5 h-3.5 translate-x-[1px] text-[#12432c] transition-colors duration-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                </div>
                            </div>
                            <div class="px-4 py-3">
                                <p class="font-semibold text-stone-800 leading-snug">{{ $teacher['name'] }}</p>
                                @if(!empty($teacher['position']))
                                    <p class="text-xs font-semibold text-green-700 uppercase tracking-wide mt-0.5">{{ $teacher['position'] }}</p>
                                @endif
                            </div>
                        </button>
                    @else
                        <div class="relative flex flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-stone-900/5 shadow-sm">
                            <div class="relative aspect-square overflow-hidden bg-stone-100">
                                <img src="{{ asset($teacher['photo']) }}" alt="{{ $teacher['name'] }}"
                                     onerror="this.onerror=null; this.src='{{ asset('images/teachers/placeholder.jpg') }}';"
                                     class="w-full h-full object-cover object-top">
                            </div>
                            <div class="px-4 py-3">
                                <p class="font-semibold text-stone-800 leading-snug">{{ $teacher['name'] }}</p>
                                @if(!empty($teacher['position']))
                                    <p class="text-xs font-semibold text-green-700 uppercase tracking-wide mt-0.5">{{ $teacher['position'] }}</p>
                                @endif
                                <p class="text-xs text-stone-400 mt-0.5">Video coming soon</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- Faculty Video Modal --}}
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

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('teacher-modal');
        const modalName = document.getElementById('teacher-modal-name');
        const modalVideo = document.getElementById('teacher-modal-video');
        const closeBtn = document.getElementById('teacher-modal-close');

        document.querySelectorAll('.teacher-card').forEach(card => {
            card.addEventListener('click', () => {
                const videoSrc = card.getAttribute('data-video');
                const teacherName = card.getAttribute('data-name');

                if (videoSrc) {
                    modalName.textContent = teacherName + "'s Introduction";
                    modalVideo.src = videoSrc;
                    modal.classList.remove('hidden');
                    modalVideo.play();
                }
            });
        });

        const closeModal = () => {
            modal.classList.add('hidden');
            modalVideo.pause();
            modalVideo.src = '';
        };

        closeBtn.addEventListener('click', closeModal);
        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });
    });
</script>
@endpush