@extends('layouts.app')

@section('title', 'Portal Login | Pajo National High School - SHS')

@section('content')

    <section class="min-h-[80vh] flex items-center justify-center px-4 py-12 bg-gray-50">
        <div class="w-full max-w-4xl bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden grid md:grid-cols-2">

            {{-- LEFT: branding panel --}}
            <div class="relative bg-gradient-to-br from-green-950 via-green-900 to-emerald-950 text-white p-10 flex flex-col justify-between overflow-hidden">
                <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#fff_1px,transparent_1px)] [background-size:16px_16px] pointer-events-none"></div>

                <div class="relative z-10">
                    <img src="{{ asset('images/logo.png') }}" alt="Pajo NHS - SHS Logo" class="h-14 w-14 rounded-full bg-white p-1 mb-6">
                    <h1 class="text-2xl font-extrabold tracking-tight mb-3">Pajo National High School</h1>
                    <p class="text-green-200 text-sm mb-8">Senior High School Portal</p>

                    <p class="text-green-100 text-sm leading-relaxed font-light">
                        One portal for our whole school community — parents tracking their child's progress, staff handling day-to-day tasks, students accessing learning resources, and alumni staying connected.
                    </p>
                </div>

                <div class="relative z-10 mt-10 space-y-3">
                    <div class="flex items-center gap-3 text-sm text-green-100">
                        <span class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </span>
                        Secure, role-based access
                    </div>
                    <div class="flex items-center gap-3 text-sm text-green-100">
                        <span class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </span>
                        Fast access to school updates
                    </div>
                </div>
            </div>

            {{-- RIGHT: login form --}}
            <div class="p-8 md:p-10 flex flex-col justify-center">
                <h2 class="text-xl font-bold text-gray-900 mb-1">Portal Login</h2>
                <p class="text-sm text-gray-500 mb-6">Select your account type to continue.</p>

                {{-- Role tabs --}}
                <div class="grid grid-cols-4 gap-2 mb-8">
                    @php
                        $roles = [
                            'parent'  => ['label' => 'Parent',  'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'],
                            'staff'   => ['label' => 'Staff',   'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'],
                            'student' => ['label' => 'Student', 'icon' => 'M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z'],
                            'alumni'  => ['label' => 'Alumni',  'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'],
                        ];
                    @endphp

                    @foreach ($roles as $key => $r)
                        <a href="{{ route('login', ['role' => $key]) }}"
                           class="flex flex-col items-center gap-1.5 py-3 rounded-xl text-xs font-medium transition border {{ $role === $key ? 'bg-green-800 text-white border-green-800 shadow-sm' : 'bg-white text-gray-500 border-gray-200 hover:border-green-300 hover:text-green-800' }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $r['icon'] }}"/></svg>
                            {{ $r['label'] }}
                        </a>
                    @endforeach
                </div>

                {{-- TODO: front-end only for now — no accounts/database exist yet.
                     Submitting shows a "coming soon" message via JS. Wire up real
                     authentication once user accounts are ready. --}}
                <form id="portal-login-form" class="space-y-4">
                    <input type="hidden" name="role" value="{{ $role }}">

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Email Address</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </span>
                            <input type="email" name="email" required placeholder="you@example.com"
                                   class="w-full border border-gray-200 rounded-lg pl-10 pr-3 py-2.5 text-sm focus:ring-2 focus:ring-green-700 focus:border-green-700 focus:outline-none transition">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1.5">Password</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                            </span>
                            <input type="password" name="password" required placeholder="••••••••"
                                   class="w-full border border-gray-200 rounded-lg pl-10 pr-3 py-2.5 text-sm focus:ring-2 focus:ring-green-700 focus:border-green-700 focus:outline-none transition">
                        </div>
                    </div>

                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center gap-2 text-gray-600">
                            <input type="checkbox" name="remember" class="rounded border-gray-300 text-green-700 focus:ring-green-700"> Remember me
                        </label>
                        <a href="#" class="text-green-800 hover:underline font-medium">Forgot password?</a>
                    </div>

                    <div id="portal-login-notice" class="hidden text-sm text-amber-700 bg-amber-50 border border-amber-200 rounded-lg px-3 py-2.5">
                        Portal accounts aren't set up yet — check back soon.
                    </div>

                    <button type="submit" class="w-full bg-green-800 text-white py-3 rounded-lg font-semibold hover:bg-green-900 transition shadow-sm">
                        Log in as {{ ucfirst($role) }}
                    </button>
                </form>

                <p class="text-xs text-gray-400 text-center mt-8">
                    Having trouble signing in? <a href="{{ route('contact') }}" class="text-green-800 hover:underline">Contact the school office</a>.
                </p>
            </div>

        </div>
    </section>

    <script>
        document.getElementById('portal-login-form').addEventListener('submit', function (e) {
            e.preventDefault();
            document.getElementById('portal-login-notice').classList.remove('hidden');
        });
    </script>

@endsection
