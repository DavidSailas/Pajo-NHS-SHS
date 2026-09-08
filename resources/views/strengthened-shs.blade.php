@extends('layouts.app')

@section('title', 'Strengthened Senior High School Curriculum | Pajo National High School - SHS')

@section('content')

    {{-- HERO SECTION --}}
    <section class="bg-gradient-to-br from-green-950 to-green-900 text-white py-20">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <span class="bg-green-800/80 text-green-200 text-xs font-bold uppercase tracking-widest px-3 py-1.5 rounded-full border border-green-700/50">
                DepEd Compliant &bull; SY 2026-2027 Ready
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight mt-4 mb-4">
                The Strengthened Senior High School Experience
            </h1>
            <p class="text-green-100 max-w-2xl mx-auto text-base md:text-lg font-light leading-relaxed">
                Empowering our students with greater flexibility, targeted career paths, and future-ready skills through the new Cluster of Electives model.
            </p>
        </div>
    </section>

    {{-- MAIN OVERVIEW SECTION --}}
    <section class="max-w-6xl mx-auto px-4 py-16">
        
        <div class="bg-white rounded-3xl shadow-sm border border-gray-200/80 p-8 md:p-12 mb-16">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <span class="text-xs font-bold text-green-700 uppercase tracking-widest bg-green-100/70 px-3 py-1 rounded-full">Forward-Looking Education</span>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mt-3 mb-4">
                        Moving Beyond Rigid Strands to Tailored Success
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        In compliance with Department of Education guidelines (DepEd Order No. 017, s. 2026), Pajo National High School - SHS is proud to implement the **Strengthened Senior High School Curriculum**. 
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        We have streamlined core subjects to focus deeply on foundational competencies, allowing students to personalize their learning journey through specialized **Clusters of Electives** geared directly toward their chosen career goals.
                    </p>
                </div>
                <div class="bg-green-50 rounded-2xl p-6 md:p-8 border border-green-100">
                    <h3 class="text-lg font-bold text-green-900 mb-4">Why This Benefits Your Child:</h3>
                    <ul class="space-y-3 text-sm text-gray-700">
                        <li class="flex items-start">
                            <span class="bg-green-700 text-white rounded-full h-5 w-5 flex items-center justify-center text-xs font-bold mr-3 mt-0.5 flex-shrink-0">&check;</span>
                            <span><strong>Targeted Focus:</strong> Less academic congestion with streamlined core courses.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-green-700 text-white rounded-full h-5 w-5 flex items-center justify-center text-xs font-bold mr-3 mt-0.5 flex-shrink-0">&check;</span>
                            <span><strong>Personalized Tracks:</strong> Freedom to choose elective clusters aligned with real-world industries.</span>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-green-700 text-white rounded-full h-5 w-5 flex items-center justify-center text-xs font-bold mr-3 mt-0.5 flex-shrink-0">&check;</span>
                            <span><strong>Global Readiness:</strong> Comprehensive preparation whether heading to university, entrepreneurship, or employment.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- THE TWO MAIN PATHS --}}
        <div class="mb-16">
            <div class="text-center max-w-xl mx-auto mb-12">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900">Choose Your Pathway</h3>
                <p class="text-gray-600 text-sm mt-2">Our curriculum is built around two primary paths designed to match every student's unique strengths and ambitions.</p>
                <div class="w-16 h-1 bg-green-700 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                
                {{-- Academic Track --}}
                <div class="bg-white rounded-3xl shadow-sm border border-gray-200 p-8 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="w-12 h-12 bg-green-100 text-green-800 rounded-2xl flex items-center justify-center font-bold text-xl mb-6">
                            🎓
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Academic Track & Elective Clusters</h4>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Tailored for students aiming for higher education and rigorous academic disciplines. Students select specialized academic electives grouped into coherent clusters to build deep domain expertise.
                        </p>
                        <ul class="text-xs text-gray-500 space-y-2 mb-6 border-t border-gray-100 pt-4">
                            <li class="flex items-center"><span class="w-1.5 h-1.5 bg-green-700 rounded-full mr-2"></span> Designed for university and college preparation</li>
                            <li class="flex items-center"><span class="w-1.5 h-1.5 bg-green-700 rounded-full mr-2"></span> Focus on critical thinking, research, and advanced concepts</li>
                            <li class="flex items-center"><span class="w-1.5 h-1.5 bg-green-700 rounded-full mr-2"></span> Flexible elective combinations across disciplines</li>
                        </ul>
                    </div>
                    <div class="bg-green-50/60 rounded-xl p-4 text-xs font-semibold text-green-900 text-center">
                        Primary Exit: Higher Education & Specialized Professions
                    </div>
                </div>

                {{-- Tech-Pro Track --}}
                <div class="bg-white rounded-3xl shadow-sm border border-gray-200 p-8 flex flex-col justify-between hover:shadow-md transition">
                    <div>
                        <div class="w-12 h-12 bg-green-100 text-green-800 rounded-2xl flex items-center justify-center font-bold text-xl mb-6">
                            🛠️
                        </div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Technical-Professional (Tech-Pro) Track</h4>
                        <p class="text-gray-600 text-sm leading-relaxed mb-6">
                            Designed for hands-on learners aiming for immediate employment, entrepreneurship, or middle-level technical skills development. Features industry-standard training clusters.
                        </p>
                        <ul class="text-xs text-gray-500 space-y-2 mb-6 border-t border-gray-100 pt-4">
                            <li class="flex items-center"><span class="w-1.5 h-1.5 bg-green-700 rounded-full mr-2"></span> Industry-standard technical certifications alignment</li>
                            <li class="flex items-center"><span class="w-1.5 h-1.5 bg-green-700 rounded-full mr-2"></span> Practical work immersion and competency-based training</li>
                            <li class="flex items-center"><span class="w-1.5 h-1.5 bg-green-700 rounded-full mr-2"></span> Direct pipeline to corporate jobs or business startups</li>
                        </ul>
                    </div>
                    <div class="bg-green-50/60 rounded-xl p-4 text-xs font-semibold text-green-900 text-center">
                        Primary Exit: Employment, Entrepreneurship & Skills Development
                    </div>
                </div>

            </div>
        </div>

        {{-- CALL TO ACTION BANNER --}}
        <div class="bg-gradient-to-r from-green-900 to-green-950 text-white rounded-3xl p-8 md:p-12 text-center shadow-lg">
            <h3 class="text-2xl md:text-3xl font-bold mb-3">Ready to enroll for the new school year?</h3>
            <p class="text-green-100 max-w-xl mx-auto text-sm mb-8">
                Discover how our upgraded curriculum can set your child up for a bright and successful future. Get in touch with our admissions or guidance office today.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('about.charter') }}" class="bg-white text-green-950 font-bold px-6 py-3 rounded-full text-sm hover:bg-green-50 transition shadow">
                    View Citizen's Charter
                </a>
                <a href="mailto:303184@deped.gov.ph" class="bg-green-800 text-white font-bold px-6 py-3 rounded-full text-sm hover:bg-green-700 transition border border-green-700">
                    Inquire via Email
                </a>
            </div>
        </div>

    </section>

@endsection