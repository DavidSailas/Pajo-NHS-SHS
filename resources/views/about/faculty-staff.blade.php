@extends('layouts.app')

@section('title', 'Faculty & Staff | Pajo National High School - SHS')

@section('content')

    @php
        $schoolHead = [
            'name' => 'Dr. Glenny E. Laping',
            'position' => 'School Head',
            'photo' => 'images/teachers/laping-glenny-e.jpg',
            'video' => null,
        ];

        // 3 Non-Teaching Staff
        $nonTeachingStaff = [
            ['name' => 'Rubie C. Cosido',        'position' => 'Administrative Officer II', 'credentials' => '', 'photo' => 'images/teachers/cosido-rubie-c.jpg', 'video' => null],
            ['name' => 'Nastasha Mae D. Baguio', 'position' => 'Registrar',                 'credentials' => '', 'photo' => 'images/teachers/baguio-nastasha-mae-d.jpg', 'video' => null],
            ['name' => 'Alejandro S. Caballes',  'position' => 'Administrative Assistant II','credentials' => '', 'photo' => 'images/teachers/caballes-alejandro-s.jpg', 'video' => null],
        ];

        // Teaching Staff, arranged alphabetically by surname
        $teachers = [
            ['name' => 'Glenny B. Abad',           'position' => 'Teacher II',        'credentials' => '', 'photo' => 'images/teachers/abad-glenny-b.jpg', 'video' => 'videos/teachers/abad-glenny-b.mp4'],
            ['name' => 'Juna S. Babatu-on',        'position' => 'Master Teacher I',  'credentials' => '', 'photo' => 'images/teachers/babatu-on-juna-s.jpg', 'video' => null],
            ['name' => 'Rodetha P. Catadman',      'position' => 'Teacher III',       'credentials' => '', 'photo' => 'images/teachers/catadman-rodetha-p.jpg', 'video' => 'videos/teachers/catadman-rodetha-p.mp4'],
            ['name' => 'Jeaneueb E. Cellan',       'position' => 'Teacher II',        'credentials' => '', 'photo' => 'images/teachers/cellan-jeaneueb-e.jpg', 'video' => null],
            ['name' => 'Diane Syren O. Cuizon',    'position' => 'Teacher II',        'credentials' => '', 'photo' => 'images/teachers/cuizon-diane-syren-o.jpg', 'video' => null],
            ['name' => 'Jariz M. Cuyos',           'position' => 'Teacher II',        'credentials' => '', 'photo' => 'images/teachers/cuyos-jariz-m.jpg', 'video' => null],
            ['name' => 'Cherryl A. Embalzado',     'position' => 'Teacher II',        'credentials' => '', 'photo' => 'images/teachers/embalzado-cherryl-a.jpg', 'video' => null],
            ['name' => 'Julieta L. Embralinag',    'position' => 'Teacher III',       'credentials' => '', 'photo' => 'images/teachers/embralinag-julieta-l.jpg', 'video' => 'videos/teachers/embralinag-julieta-l.mp4'],
            ['name' => 'Cristina B. Esmeña',       'position' => 'Teacher I',         'credentials' => '', 'photo' => 'images/teachers/esmena-cristina.jpg', 'video' => 'videos/teachers/esmena-cristina.mp4'],
            ['name' => 'Abegail B. Glarian',       'position' => 'Master Teacher I',  'credentials' => '', 'photo' => 'images/teachers/glarian-abegail.jpg', 'video' => 'videos/teachers/glarian-abegail.mp4'],
            ['name' => 'Jennifer P. Gonzaga',      'position' => 'Teacher II',        'credentials' => '', 'photo' => 'images/teachers/gonzaga-jennifer-p.jpg', 'video' => 'videos/teachers/gonzaga-jennifer-p.mp4'],
            ['name' => 'Alexis C. Heyrosa',        'position' => 'Master Teacher I',  'credentials' => '', 'photo' => 'images/teachers/heyrosa-alexis-c.jpg', 'video' => 'videos/teachers/heyrosa-alexis-c.mp4'],
            ['name' => 'Aiko B. Josol',            'position' => 'Teacher I',         'credentials' => '', 'photo' => 'images/teachers/epe-aiko-j.jpg', 'video' => 'videos/teachers/epe-aiko-j.mp4'],
            ['name' => 'Julian John N. Limutan',   'position' => 'Master Teacher I',  'credentials' => '', 'photo' => 'images/teachers/limutan-julian-john-n.jpg', 'video' => 'videos/teachers/limutan-julian-john-n.mp4'],
            ['name' => 'Jan Ann P. Montejo',       'position' => 'Teacher II',        'credentials' => '', 'photo' => 'images/teachers/montejo-jan-ann-p.jpg', 'video' => 'videos/teachers/montejo-jan-ann-p.mp4'],
            ['name' => 'Bonifacio R. Pino',        'position' => 'Teacher II',        'credentials' => '', 'photo' => 'images/teachers/pino-bonifacio-r.jpg', 'video' => null],
            ['name' => 'Christine V. Ramirez',     'position' => 'Master Teacher II', 'credentials' => '', 'photo' => 'images/teachers/ramirez-christine-v.jpg', 'video' => 'videos/teachers/ramirez-christine-v.mp4'],
            ['name' => 'Leni C. Rebusit',          'position' => 'Teacher III',       'credentials' => '', 'photo' => 'images/teachers/rebusit-leni.jpg', 'video' => 'videos/teachers/rebusit-leni.mp4'],
            ['name' => 'Jasmin E. Rosaroso',       'position' => 'Teacher III',       'credentials' => '', 'photo' => 'images/teachers/rosaroso-jasmin-e.jpg', 'video' => 'videos/teachers/rosaroso-jasmin-e.mp4'],
            ['name' => 'Mariel H. Ursabia',        'position' => 'Teacher III',       'credentials' => '', 'photo' => 'images/teachers/ursabia-mariel-h.jpg', 'video' => 'videos/teachers/ursabia-mariel-h.mp4'],
            ['name' => 'Celosteo A. Villaceran',   'position' => 'Teacher II',        'credentials' => '', 'photo' => 'images/teachers/villaceran-celosteo-a.jpg', 'video' => 'videos/teachers/villaceran-celosteo-a.mp4'],
            ['name' => 'Ednalyn P. Viloria',       'position' => 'Master Teacher I',  'credentials' => '', 'photo' => 'images/teachers/viloria-ednalyn-p.jpg', 'video' => 'videos/teachers/viloria-ednalyn-p.mp4'],
        ];

        $registrar = collect($nonTeachingStaff)->firstWhere('position', 'Registrar');
        $adminStaff = collect($nonTeachingStaff)->reject(fn($s) => $s['position'] === 'Registrar')->values()->all();
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
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">School Administration & Directory</span>
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-3">Our Faculty & Staff</h2>
            <p class="text-sm text-gray-500 mt-2">Click any profile with a video badge to watch their introduction.</p>
        </div>

        {{-- 1. EXECUTIVE LEADERSHIP (School Head) --}}
        <div class="flex flex-col items-center mb-16">
            <div class="w-full max-w-xs bg-white rounded-2xl shadow-md ring-1 ring-stone-900/5 overflow-hidden transition-all duration-300 hover:shadow-xl">
                <div class="bg-gradient-to-r from-green-900 to-green-950 px-4 py-3 text-center">
                    <span class="text-xs font-bold uppercase tracking-widest text-green-300">School Head</span>
                </div>
                <div class="relative aspect-square overflow-hidden bg-stone-100">
                    <img src="{{ asset($schoolHead['photo']) }}" alt="{{ $schoolHead['name'] }}"
                         onerror="this.onerror=null; this.src='{{ asset('images/teachers/placeholder.jpg') }}';"
                         class="w-full h-full object-cover object-top">
                </div>
                <div class="px-5 py-4 text-center">
                    <h3 class="text-base font-bold text-stone-900 leading-snug">{{ $schoolHead['name'] }}</h3>
                    <p class="text-xs font-semibold text-green-700 uppercase tracking-wider mt-1">{{ $schoolHead['position'] }}</p>
                </div>
            </div>
        </div>

        {{-- 2. REGISTRAR OFFICE (Completely Separate Section) --}}
        @if ($registrar)
            <div class="mb-16">
                <div class="text-center mb-6">
                    <span class="inline-block px-4 py-1.5 rounded-xl bg-green-800 text-white text-xs md:text-sm font-bold uppercase tracking-wide shadow-sm">Registrar Office</span>
                </div>
                <div class="flex justify-center">
                    <div class="w-full max-w-xs">
                        @if(!empty($registrar['video']))
                            <button type="button"
                                    class="teacher-card group relative flex flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-stone-900/5 shadow-sm text-left transition-shadow duration-300 hover:shadow-lg w-full"
                                    data-video="{{ asset($registrar['video']) }}"
                                    data-name="{{ $registrar['name'] }}">
                                <div class="relative aspect-square overflow-hidden bg-stone-100">
                                    <img src="{{ asset($registrar['photo']) }}" alt="{{ $registrar['name'] }}"
                                         onerror="this.onerror=null; this.src='{{ asset('images/teachers/placeholder.jpg') }}';"
                                         class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105">
                                    <div class="absolute bottom-2.5 right-2.5 flex h-9 w-9 items-center justify-center rounded-full bg-white/95 shadow-sm transition-colors duration-300 group-hover:bg-[#12432c]">
                                        <svg class="w-3.5 h-3.5 translate-x-[1px] text-[#12432c] transition-colors duration-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                    </div>
                                </div>
                                <div class="px-4 py-3 text-center">
                                    <p class="font-semibold text-stone-800 leading-snug">{{ $registrar['name'] }}</p>
                                    <p class="text-xs font-semibold text-green-700 uppercase tracking-wide mt-0.5">{{ $registrar['position'] }}</p>
                                </div>
                            </button>
                        @else
                            <div class="relative flex flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-stone-900/5 shadow-sm w-full">
                                <div class="relative aspect-square overflow-hidden bg-stone-100">
                                    <img src="{{ asset($registrar['photo']) }}" alt="{{ $registrar['name'] }}"
                                         onerror="this.onerror=null; this.src='{{ asset('images/teachers/placeholder.jpg') }}';"
                                         class="w-full h-full object-cover object-top">
                                </div>
                                <div class="px-4 py-3 text-center">
                                    <p class="font-semibold text-stone-800 leading-snug">{{ $registrar['name'] }}</p>
                                    <p class="text-xs font-semibold text-green-700 uppercase tracking-wide mt-0.5">{{ $registrar['position'] }}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endif

        {{-- 3. ADMINISTRATIVE STAFF (Completely Separate Section) --}}
        @if (count($adminStaff) > 0)
            <div class="mb-16">
                <div class="text-center mb-6">
                    <span class="inline-block px-4 py-1.5 rounded-xl bg-green-800 text-white text-xs md:text-sm font-bold uppercase tracking-wide shadow-sm">Administrative Staff</span>
                </div>
                <div class="grid gap-6 sm:grid-cols-2 max-w-2xl mx-auto">
                    @foreach ($adminStaff as $staff)
                        @if(!empty($staff['video']))
                            <button type="button"
                                    class="teacher-card group relative flex flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-stone-900/5 shadow-sm text-left transition-shadow duration-300 hover:shadow-lg"
                                    data-video="{{ asset($staff['video']) }}"
                                    data-name="{{ $staff['name'] }}">
                                <div class="relative aspect-square overflow-hidden bg-stone-100">
                                    <img src="{{ asset($staff['photo']) }}" alt="{{ $staff['name'] }}"
                                         onerror="this.onerror=null; this.src='{{ asset('images/teachers/placeholder.jpg') }}';"
                                         class="w-full h-full object-cover object-top transition-transform duration-500 ease-out group-hover:scale-105">
                                    <div class="absolute bottom-2.5 right-2.5 flex h-9 w-9 items-center justify-center rounded-full bg-white/95 shadow-sm transition-colors duration-300 group-hover:bg-[#12432c]">
                                        <svg class="w-3.5 h-3.5 translate-x-[1px] text-[#12432c] transition-colors duration-300 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                    </div>
                                </div>
                                <div class="px-4 py-3 text-center">
                                    <p class="font-semibold text-stone-800 leading-snug">{{ $staff['name'] }}</p>
                                    <p class="text-xs font-semibold text-green-700 uppercase tracking-wide mt-0.5">{{ $staff['position'] }}</p>
                                </div>
                            </button>
                        @else
                            <div class="relative flex flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-stone-900/5 shadow-sm">
                                <div class="relative aspect-square overflow-hidden bg-stone-100">
                                    <img src="{{ asset($staff['photo']) }}" alt="{{ $staff['name'] }}"
                                         onerror="this.onerror=null; this.src='{{ asset('images/teachers/placeholder.jpg') }}';"
                                         class="w-full h-full object-cover object-top">
                                </div>
                                <div class="px-4 py-3 text-center">
                                    <p class="font-semibold text-stone-800 leading-snug">{{ $staff['name'] }}</p>
                                    <p class="text-xs font-semibold text-green-700 uppercase tracking-wide mt-0.5">{{ $staff['position'] }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endif

        {{-- 4. TEACHING STAFF SECTION --}}
        <div>
            <div class="text-center mb-8">
                <span class="inline-block px-4 py-1.5 rounded-xl bg-green-800 text-white text-xs md:text-sm font-bold uppercase tracking-wide shadow-sm">Teaching Staff Directory</span>
                <div class="w-16 h-1 bg-green-700 mx-auto mt-3 rounded-full"></div>
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