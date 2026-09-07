@extends('layouts.app')

@section('title', 'Contact | Pajo National High School - SHS')

@section('content')
    <section class="max-w-4xl mx-auto px-4 py-14 md:py-20 min-h-[55vh] flex flex-col justify-center">
        <h1 class="text-3xl font-bold text-stone-900 mb-2">Get in Touch</h1>
        <p class="text-stone-500 mb-10">We'd love to hear from you — reach out anytime.</p>

        <div class="grid gap-6 md:grid-cols-2 md:items-stretch">
            <div class="rounded-2xl bg-white p-6 ring-1 ring-stone-900/5 shadow-sm">
                <div class="space-y-5">
                    <div class="flex gap-3">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#12432c]/10">
                            <svg class="h-5 w-5 text-[#12432c]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </span>
                        <div>
                            <p class="text-sm font-semibold text-stone-400 uppercase tracking-wide">Address</p>
                            <p class="text-stone-800 mt-0.5">Sangi Road, Pajo, Lapu-Lapu City, Philippines, 6015</p>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#12432c]/10">
                            <svg class="h-5 w-5 text-[#12432c]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <div>
                            <p class="text-sm font-semibold text-stone-400 uppercase tracking-wide">School Head</p>
                            <p class="text-stone-800 mt-0.5">Glenny E. Laping</p>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#12432c]/10">
                            <svg class="h-5 w-5 text-[#12432c]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>
                        <div>
                            <p class="text-sm font-semibold text-stone-400 uppercase tracking-wide">Email</p>
                            <a href="mailto:303184@deped.gov.ph" class="text-stone-800 mt-0.5 hover:text-[#12432c] hover:underline">303184@deped.gov.ph</a>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-[#12432c]/10">
                            <svg class="h-5 w-5 text-[#12432c]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h2.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-1.687.843a11.037 11.037 0 005.516 5.516l.844-1.687a1 1 0 011.21-.502l4.492 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </span>
                        <div>
                            <p class="text-sm font-semibold text-stone-400 uppercase tracking-wide">Tel. No.</p>
                            <a href="tel:266-4123" class="text-stone-800 mt-0.5 hover:text-[#12432c] hover:underline">266-4123</a>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                @php
                    // Google Maps embed needs no API key when using the plain maps.google.com/maps?q= form.
                    $mapAddress = 'Sangi Road, Pajo, Lapu-Lapu City, Philippines, 6015';
                    $mapQuery = urlencode($mapAddress);
                @endphp
                <a href="https://www.google.com/maps/search/?api=1&query={{ $mapQuery }}"
                   target="_blank" rel="noopener noreferrer"
                   class="group relative block h-full min-h-[220px] overflow-hidden rounded-2xl ring-1 ring-stone-900/5 shadow-sm transition-shadow duration-300 hover:shadow-lg">
                    <iframe
                        src="https://maps.google.com/maps?q={{ $mapQuery }}&output=embed"
                        class="pointer-events-none h-full w-full border-0"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Map showing {{ $mapAddress }}"></iframe>
                    {{-- overlay makes the whole map a single click-through link to Google Maps --}}
                    <div class="absolute inset-0 flex items-end justify-end bg-black/0 p-3 transition-colors duration-300 group-hover:bg-black/10">
                        <span class="flex items-center gap-1.5 rounded-full bg-white px-3 py-1.5 text-xs font-semibold text-stone-700 shadow-sm transition-colors duration-300 group-hover:bg-[#12432c] group-hover:text-white">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7" />
                            </svg>
                            Open in Google Maps
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
