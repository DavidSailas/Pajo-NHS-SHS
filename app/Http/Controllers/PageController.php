<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function facilities()
    {
        return view('about.facilities');
    }

    public function laboratories()
    {
        return view('about.laboratories');
    }

    public function academicTrack()
    {
        return view('programs.academic');
    }

    public function techProTrack()
    {
        return view('programs.techpro');
    }

    public function faculty()
    {
        return view('faculty');
    }

    public function achievements()
    {
        return view('achievements');
    }

    public function contact()
    {
        return view('contact');
    }
}
