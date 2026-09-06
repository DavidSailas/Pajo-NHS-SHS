<footer class="bg-gray-900 text-gray-300">
    <div class="max-w-6xl mx-auto px-4 py-14 grid gap-10 md:grid-cols-4">

        {{-- SCHOOL IDENTITY --}}
        <div class="md:col-span-2">
            <div class="flex items-center gap-3 mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Pajo National High School - SHS Logo" class="h-12 w-12 rounded-full bg-white p-0.5">
                <div>
                    <p class="text-white font-bold leading-tight">Pajo National High School</p>
                    <p class="text-xs text-green-400 tracking-wide">Senior High School</p>
                </div>
            </div>
            <p class="text-sm text-gray-400 italic mb-4">"Soaring High, Touching Lives, Achieving Excellence"</p>
            <p class="text-sm">Sangi Road, Pajo, Lapu-Lapu City</p>
            <p class="text-sm">School ID: 303184</p>
            <p class="text-sm">
                <a href="mailto:303184@deped.gov.ph" class="hover:text-white transition">303184@deped.gov.ph</a>
            </p>
        </div>

        {{-- QUICK LINKS --}}
        <div>
            <h3 class="text-white font-semibold mb-3 text-sm uppercase tracking-wide">Quick Links</h3>
            <ul class="text-sm space-y-2">
                <li><a href="{{ route('home') }}" class="hover:text-white transition">Home</a></li>
                <li><a href="{{ route('about.facilities') }}" class="hover:text-white transition">Facilities</a></li>
                <li><a href="{{ route('about.laboratories') }}" class="hover:text-white transition">Laboratories</a></li>
                <li><a href="{{ route('news') }}" class="hover:text-white transition">News & Updates</a></li>
                <li><a href="{{ route('programs.academic') }}" class="hover:text-white transition">Academic Track</a></li>
                <li><a href="{{ route('programs.techpro') }}" class="hover:text-white transition">Tech-Pro Track</a></li>
                <li><a href="{{ route('faculty') }}" class="hover:text-white transition">Faculty & Staff</a></li>
                <li><a href="{{ route('achievements') }}" class="hover:text-white transition">Achievements</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact</a></li>
            </ul>
        </div>

        {{-- CONNECT --}}
        <div>
            <h3 class="text-white font-semibold mb-3 text-sm uppercase tracking-wide">Connect With Us</h3>
            <p class="text-sm mb-4">Have questions? Reach out to our office anytime.</p>

            <a href="https://www.facebook.com/profile.php?id=100063774956493" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 text-sm bg-gray-800 hover:bg-green-800 text-white px-4 py-2 rounded-lg transition">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.78-3.89 1.1 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12z"/>
                </svg>
                Follow us on Facebook
            </a>
        </div>
    </div>

    <div class="border-t border-gray-800">
        <div class="max-w-6xl mx-auto px-4 py-5 flex flex-col md:flex-row items-center justify-between gap-2 text-center md:text-left">
            <p class="text-xs text-gray-500">&copy; {{ date('Y') }} Pajo National High School - SHS. All rights reserved.</p>
            <p class="text-xs text-gray-500">An official Department of Education (DepEd) public school website.</p>
        </div>
    </div>
</footer>
