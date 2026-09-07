@extends('layouts.app')

@section('title', 'Tech-Pro Track | Pajo National High School - SHS')

@section('content')

    {{-- PAGE HEADER --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">Tech-Pro Track (TVL)</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">Hands-on, industry-ready training that lets learners graduate with a real TESDA National Certificate — not just a diploma.</p>
        </div>
    </section>

    {{-- ELECTIVES OFFERED --}}
    <section class="max-w-6xl mx-auto px-4 py-14">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Clusters &amp; Specializations</h2>
        <ul class="grid gap-4 md:grid-cols-3">
            <li class="p-5 border rounded-xl bg-white shadow-sm">
                <p class="font-semibold text-gray-900">ICT Support and Computer Programming Technologies</p>
                <p class="text-sm text-gray-500 mt-2">&gt; Computer Systems Servicing</p>
            </li>
            <li class="p-5 border rounded-xl bg-white shadow-sm">
                <p class="font-semibold text-gray-900">Artisanry and Creative Enterprise</p>
                <p class="text-sm text-gray-500 mt-2">&gt; Garments Artisanry (Dressmaking)</p>
            </li>
            <li class="p-5 border rounded-xl bg-white shadow-sm">
                <p class="font-semibold text-gray-900">Hospitality and Tourism</p>
                <p class="text-sm text-gray-500 mt-2 space-y-1">
                    <span class="block">&gt; Food and Beverage Operation (FBS)</span>
                    <span class="block">&gt; Kitchen Operations (Cookery)</span>
                    <span class="block">&gt; Hotel Operation (Housekeeping Services)</span>
                </p>
            </li>
        </ul>
    </section>

    {{-- NC II PASSERS --}}
    <section class="bg-gray-50 py-16 border-t border-gray-200/80">
        <div class="max-w-6xl mx-auto px-4">

            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">Proven Results</span>
                <h2 class="text-2xl md:text-4xl font-extrabold text-gray-900 tracking-tight mt-3">NC II (National Certification) Passers</h2>
                <p class="text-base text-gray-600 mt-3">Congratulations to our Tech-Pro learners who earned their TESDA National Certificate Level II.</p>
            </div>

            <div class="grid gap-6 md:grid-cols-3">

                {{-- Computer Systems Servicing --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden">
                    <div class="bg-green-800 text-white text-center text-sm font-bold uppercase tracking-wide py-3 px-4">
                        NC II in Computer Systems Servicing
                    </div>
                    <ul class="p-6 space-y-2 text-sm text-gray-700">
                        <li>Johaire S. Ampaso</li>
                        <li>Jon Jacob M. Cadiz</li>
                        <li>Jefferson Y. Casul Jr.</li>
                        <li>Jaymart B. Labasano</li>
                        <li>Jerald G. Rivera</li>
                        <li>Tristan Lee J. Yamson</li>
                        <li>Angel Mae J. Caralde</li>
                        <li>Julia D. Dignos</li>
                        <li>Jackelyn Marie B. Gabutin</li>
                    </ul>
                </div>

                {{-- Cookery --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden">
                    <div class="bg-green-800 text-white text-center text-sm font-bold uppercase tracking-wide py-3 px-4">
                        NC II in Cookery
                    </div>
                    <ul class="p-6 space-y-2 text-sm text-gray-700">
                        <li>Jerbie O. Abendan</li>
                        <li>Neprolan Boy D. Cabrera</li>
                        <li>Mohammad Ryan M. H. Salman</li>
                        <li>Johnril R. Librinca</li>
                        <li>Michenlee A. Lucero</li>
                        <li>Melow Vic V. Monte</li>
                        <li>Reyvie Reyel E. Ngoho</li>
                        <li>Junryl S. Pontejo</li>
                        <li>Jhon-Jhon L. Ugsang</li>
                        <li>Marie Chris D. Bonite</li>
                        <li>Rose Ann Caballes</li>
                        <li>Carla Mae Daniot</li>
                        <li>Jonalyn Garciano</li>
                    </ul>
                </div>

                {{-- Housekeeping --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 overflow-hidden">
                    <div class="bg-green-800 text-white text-center text-sm font-bold uppercase tracking-wide py-3 px-4">
                        NC II in Housekeeping
                    </div>
                    <ul class="p-6 space-y-2 text-sm text-gray-700">
                        <li>Ritchie T. Cosep</li>
                        <li>Angelo Encargis</li>
                        <li>John Vincent C. Monzon</li>
                        <li>Junvie Paul J. Novela</li>
                        <li>Jashtene L. Inso</li>
                        <li>Chinlie S. Laurea</li>
                        <li>Venus A. Llanto</li>
                        <li>Rochelle P. Mangubat</li>
                        <li>Necamel M. Nocete</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    {{-- ENROLLMENT CTA --}}
    <section class="py-16">
        <div class="max-w-3xl mx-auto px-4">
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200/80 p-8 flex flex-col md:flex-row gap-8 items-center">
                <div class="bg-orange-500 text-white font-extrabold text-lg rounded-full w-28 h-28 flex flex-col items-center justify-center leading-tight shrink-0 shadow-md">
                    ENROLL<br>NOW
                </div>
                <div>
                    <h3 class="font-bold text-gray-900 text-lg mb-3">Enrollment Requirements</h3>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-start gap-2">
                            <span class="text-green-700 font-bold">&#10003;</span>
                            SF9 (Report Card)
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-700 font-bold">&#10003;</span>
                            PSA/NSO Birth Certificate (photocopy)
                        </li>
                    </ul>
                    <a href="https://pnhs.edukonek.com/login" target="_blank" rel="noopener noreferrer"
                        class="inline-block mt-5 bg-green-800 text-white font-semibold px-5 py-2.5 rounded-lg hover:bg-green-900 transition text-sm">
                        Get in Touch to Enroll
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
