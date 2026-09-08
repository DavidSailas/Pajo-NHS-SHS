@extends('layouts.app')

@section('title', 'Citizen\'s Charter | Pajo National High School - SHS')

@section('content')

    {{-- PAGE HEADER --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mb-4">Citizen's Charter</h1>
            <p class="text-green-100 max-w-xl mx-auto text-base font-light">
                Our commitment to transparent, efficient, and accessible public service in compliance with Republic Act No. 11032.
            </p>
        </div>
    </section>

    {{-- MAIN CONTENT CONTAINER --}}
    <section class="max-w-6xl mx-auto px-4 py-16">
        
        {{-- MANDATE & OVERVIEW --}}
        <div class="bg-white rounded-3xl shadow-sm border border-gray-200/80 p-8 md:p-10 mb-12">
            <div class="max-w-3xl">
                <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">Transparency Seal</span>
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-3">Pajo National High School Citizen's Charter</h2>
                <p class="text-gray-600 mt-4 leading-relaxed">
                    The Citizen’s Charter is an official document that outlines the frontline services offered by Pajo National High School - Senior High School. It details step-by-step procedures, documentary requirements, processing times, and fees (if any) to ensure prompt and reliable delivery of educational administrative services to students, parents, and stakeholders.
                </p>
            </div>
        </div>

        {{-- CORE EXTERNAL & INTERNAL SERVICES SECTION --}}
        <div class="mb-12">
            <div class="text-center mb-8">
                <h3 class="text-xl md:text-2xl font-bold text-gray-800 uppercase tracking-wide">Frontline Services</h3>
                <div class="w-16 h-1 bg-green-700 mx-auto mt-2 rounded-full"></div>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                
                {{-- Service 1: Enrollment --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-green-50 text-green-800 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">External Service</span>
                            <span class="text-xs text-gray-400 font-medium">Processing: 1&ndash;2 Days</span>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Senior High School Enrollment Process</h4>
                        <p class="text-sm text-gray-600 mb-4">
                            Registration procedure for incoming Grade 11 and continuing Grade 12 students for the upcoming school year.
                        </p>
                        <ul class="text-xs text-gray-500 space-y-1.5 list-disc list-inside mb-4">
                            <li>Form 138 (Report Card) / ALS Certificate</li>
                            <li>PSA Birth Certificate</li>
                            <li>Completed Enrolment Form</li>
                        </ul>
                    </div>
                    <div class="border-t border-gray-100 pt-4 flex items-center justify-between text-xs font-semibold text-green-800">
                        <span>Classification: Simple Transaction</span>
                        <span>No Fee</span>
                    </div>
                </div>

                {{-- Service 2: Request for Academic Records --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-green-50 text-green-800 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">External / Internal</span>
                            <span class="text-xs text-gray-400 font-medium">Processing: 3 Working Days</span>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Issuance of Form 137 / SF10 & Good Moral</h4>
                        <p class="text-sm text-gray-600 mb-4">
                            Request and releasing of official permanent academic records, transcripts, and certificates of good moral character.
                        </p>
                        <ul class="text-xs text-gray-500 space-y-1.5 list-disc list-inside mb-4">
                            <li>Clearance from School Property Custodian</li>
                            <li>Request Form filled out via Registrar</li>
                            <li>Valid School ID / Government ID</li>
                        </ul>
                    </div>
                    <div class="border-t border-gray-100 pt-4 flex items-center justify-between text-xs font-semibold text-green-800">
                        <span>Classification: Complex Transaction</span>
                        <span>Free of Charge</span>
                    </div>
                </div>

                {{-- Service 3: Certificate of Graduation/Enrollment --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-green-50 text-green-800 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">External Service</span>
                            <span class="text-xs text-gray-400 font-medium">Processing: 1 Working Day</span>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Issuance of Certifications (Enrolment / Graduation)</h4>
                        <p class="text-sm text-gray-600 mb-4">
                            Official certification documents requested by alumni or active students for employment, scholarships, or transfer purposes.
                        </p>
                        <ul class="text-xs text-gray-500 space-y-1.5 list-disc list-inside mb-4">
                            <li>Duly accomplished request slip</li>
                            <li>School clearance (if applicable)</li>
                        </ul>
                    </div>
                    <div class="border-t border-gray-100 pt-4 flex items-center justify-between text-xs font-semibold text-green-800">
                        <span>Classification: Simple Transaction</span>
                        <span>Free of Charge</span>
                    </div>
                </div>

                {{-- Service 4: Teacher & Parent Consultation --}}
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-green-50 text-green-800 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Internal / External</span>
                            <span class="text-xs text-gray-400 font-medium">Processing: Scheduled Basis</span>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Parent-Teacher Conference & Academic Consultation</h4>
                        <p class="text-sm text-gray-600 mb-4">
                            Systematic dialogue sessions between advisers, subject teachers, and parents regarding learner progress and behavioral development.
                        </p>
                        <ul class="text-xs text-gray-500 space-y-1.5 list-disc list-inside mb-4">
                            <li>Scheduled appointment or advisory notice</li>
                            <li>Parent/Guardian valid identification</li>
                        </ul>
                    </div>
                    <div class="border-t border-gray-100 pt-4 flex items-center justify-between text-xs font-semibold text-green-800">
                        <span>Classification: Simple Transaction</span>
                        <span>Free of Charge</span>
                    </div>
                </div>

            </div>
        </div>

        {{-- FEEDBACK AND COMPLAINTS MECHANISM --}}
        <div class="bg-gradient-to-r from-green-900 to-green-950 text-white rounded-3xl p-8 md:p-10 shadow-lg">
            <div class="max-w-3xl">
                <span class="text-xs font-bold uppercase tracking-widest text-green-300">Feedback & Redress Mechanism</span>
                <h3 class="text-2xl font-bold mt-2 mb-4">How to Send Feedback & File Complaints</h3>
                <p class="text-green-100 text-sm leading-relaxed mb-6">
                    We value your feedback. If you have comments, suggestions, or complaints regarding our frontline administrative services, please reach out through our official channels:
                </p>
                <div class="grid sm:grid-cols-3 gap-4 text-sm">
                    <div class="bg-white/10 backdrop-blur-sm p-4 rounded-xl border border-white/10">
                        <p class="font-bold text-green-300 mb-1">Email Support</p>
                        <p class="text-gray-200 text-xs">303184@deped.gov.ph</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-4 rounded-xl border border-white/10">
                        <p class="font-bold text-green-300 mb-1">Office Hotline</p>
                        <p class="text-gray-200 text-xs">Tel. No.: 266-4123</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm p-4 rounded-xl border border-white/10">
                        <p class="font-bold text-green-300 mb-1">Office Address</p>
                        <p class="text-gray-200 text-xs">Sangi Road, Pajo, Lapu-Lapu City</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection