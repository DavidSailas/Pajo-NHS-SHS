@extends('layouts.app')

@section('title', 'Performance Indicators')

@section('content')
<section class="bg-green-50 py-12">
    <div class="max-w-5xl mx-auto px-4">

        {{-- Header --}}
        <div class="text-center mb-10">
            <img src="{{ asset('images/logo.png') }}" alt="Pajo NHS - SHS Logo" class="h-16 w-16 mx-auto rounded-full mb-4">
            <h1 class="text-2xl md:text-3xl font-bold text-green-900 uppercase tracking-wide">
                Educational Management Information System
            </h1>
            <p class="text-gray-600 mt-2">Performance Indicators, School Years 2021&ndash;2026</p>
        </div>

        {{-- Table --}}
        <div class="overflow-x-auto rounded-xl shadow-lg border border-green-200">
            <table class="w-full text-center border-collapse">
                <thead>
                    <tr class="bg-green-800 text-white text-sm md:text-base">
                        <th class="px-4 py-3 text-left font-semibold sticky left-0 bg-green-800">Performance Indicators</th>
                        <th class="px-4 py-3 font-semibold">2021&ndash;2022</th>
                        <th class="px-4 py-3 font-semibold">2022&ndash;2023</th>
                        <th class="px-4 py-3 font-semibold">2023&ndash;2024</th>
                        <th class="px-4 py-3 font-semibold">2024&ndash;2025</th>
                        <th class="px-4 py-3 font-semibold">2025&ndash;2026</th>
                    </tr>
                </thead>
                <tbody class="text-sm md:text-base">
                    @php
                        $rows = [
                            ['label' => 'Enrolment',            'values' => ['783', '688', '429', '294', '345']],
                            ['label' => 'Graduation Rate',       'values' => ['94.62%', '97.72%', '98.36%', '96.71%', '—']],
                            ['label' => 'Promotion Rate',        'values' => ['94.62%', '97.72%', '98.36%', '96.71%', '—']],
                            ['label' => 'Completion Rate',       'values' => ['40.39%', '53.91%', '41.02%', '21.18%', '—']],
                            ['label' => 'Cohort Survival Rate',  'values' => ['57.35%', '55.17%', '41.70%', '21.90%', '—']],
                            ['label' => 'Dropout Rate',          'values' => ['0.11%', '0.29%', '0.00%', '0.61%', '—']],
                            ['label' => 'Failure Rate',          'values' => ['0', '0', '0', '0', '—']],
                            ['label' => 'Repetition Rate',       'values' => ['0', '0', '0', '0', '—']],
                        ];
                    @endphp

                    @foreach ($rows as $i => $row)
                        <tr class="{{ $i % 2 === 0 ? 'bg-white' : 'bg-green-50' }} hover:bg-green-100 transition">
                            <td class="px-4 py-3 text-left font-medium text-green-900 sticky left-0 {{ $i % 2 === 0 ? 'bg-white' : 'bg-green-50' }}">
                                {{ $row['label'] }}
                            </td>
                            @foreach ($row['values'] as $value)
                                <td class="px-4 py-3 text-gray-700">{{ $value }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <p class="text-xs text-gray-500 mt-4 text-center">
            Source: School EMIS records. Figures for 2025&ndash;2026 are updated as the school year progresses.
        </p>
    </div>
</section>
@endsection
