@extends('layouts.app')

@section('title', 'Contact | Pajo National High School - SHS')

@section('content')
    <section class="max-w-4xl mx-auto px-4 py-14">
        <h1 class="text-3xl font-bold mb-6">Get in Touch</h1>

        <div class="grid gap-8 md:grid-cols-2">
            <div>
                <p class="mb-2"><strong>Address:</strong> Sangi Road, Pajo, Lapu-Lapu City</p>
                <p class="mb-2"><strong>School Head:</strong> Glenny E. Laping</p>
                <p class="mb-2"><strong>Email:</strong> 303184@deped.gov.ph</p>
            </div>
            <div>
                {{-- Google Map embed can go here --}}
                <div class="h-48 bg-gray-200 rounded-lg flex items-center justify-center text-gray-500">
                    Map placeholder
                </div>
            </div>
        </div>
    </section>
@endsection
