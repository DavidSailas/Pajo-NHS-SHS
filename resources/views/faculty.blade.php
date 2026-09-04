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
                $teachers = [
                    ['name' => 'Teacher Name', 'credentials' => 'LPT, MA Ed', 'photo' => 'images/teachers/placeholder.jpg', 'video' => 'videos/teachers/placeholder.mp4'],
                    ['name' => 'Teacher Name', 'credentials' => 'LPT', 'photo' => 'images/teachers/placeholder.jpg', 'video' => 'videos/teachers/placeholder.mp4'],
                ];
            @endphp

            @foreach ($teachers as $teacher)
                <button type="button"
                        class="teacher-card text-left"
                        data-video="{{ asset($teacher['video']) }}"
                        data-name="{{ $teacher['name'] }}">
                    <img src="{{ asset($teacher['photo']) }}" alt="{{ $teacher['name'] }}"
                         class="w-full h-40 object-cover rounded-lg mb-2 hover:opacity-80 transition">
                    <p class="font-semibold">{{ $teacher['name'] }}</p>
                    <p class="text-sm text-gray-500">{{ $teacher['credentials'] }}</p>
                </button>
            @endforeach
        </div>
    </section>

    {{-- Video Modal --}}
    <div id="teacher-modal" class="hidden fixed inset-0 bg-black/80 z-50 flex items-center justify-center px-4">
        <div class="bg-white rounded-lg max-w-2xl w-full p-4 relative">
            <button id="teacher-modal-close" class="absolute top-2 right-3 text-2xl leading-none">&times;</button>
            <h3 id="teacher-modal-name" class="font-semibold mb-3"></h3>
            <video id="teacher-modal-video" class="w-full rounded" controls></video>
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
