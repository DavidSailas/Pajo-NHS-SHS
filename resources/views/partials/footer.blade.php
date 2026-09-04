<footer class="bg-gray-900 text-gray-300 mt-16">
    <div class="max-w-6xl mx-auto px-4 py-10 grid gap-8 md:grid-cols-3">

        <div>
            <h3 class="text-white font-semibold mb-2">Pajo National High School - SHS</h3>
            <p class="text-sm">Sangi Road, Pajo, Lapu-Lapu City</p>
            <p class="text-sm">School ID: 303184</p>
            <p class="text-sm">303184@deped.gov.ph</p>
        </div>

        <div>
            <h3 class="text-white font-semibold mb-2">Quick Links</h3>
            <ul class="text-sm space-y-1">
                <li><a href="{{ route('about.facilities') }}" class="hover:text-white">Facilities</a></li>
                <li><a href="{{ route('faculty') }}" class="hover:text-white">Faculty & Staff</a></li>
                <li><a href="{{ route('achievements') }}" class="hover:text-white">Achievements</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
            </ul>
        </div>

        <div>
            <h3 class="text-white font-semibold mb-2">Connect</h3>
            <p class="text-sm">School Head: Glenny E. Laping</p>
            <!-- Add Facebook page link here once confirmed -->
        </div>
    </div>

    <div class="text-center text-xs py-4 border-t border-gray-800">
        &copy; {{ date('Y') }} Pajo National High School - SHS. All rights reserved.
    </div>
</footer>
