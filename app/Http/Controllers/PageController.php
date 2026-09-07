<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home', [
            'homeNews' => $this->newsPosts(3),
        ]);
    }

    public function facilitiesLaboratories()
    {
        return view('about.facilities-laboratories');
    }

    public function innovations()
    {
        return view('about.innovations');
    }

    public function academicTrack()
    {
        return view('programs.academic');
    }

    public function techProTrack()
    {
        return view('programs.techpro');
    }

    public function achievements()
    {
        return view('achievements');
    }

    public function news()
    {
        return view('news', [
            'posts' => $this->newsPosts(),
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    /**
     * MOCK DATA ONLY.
     * Replace this with a real News/Announcement model, e.g.:
     *   return News::latest()->take($limit)->get();
     * Keeping it here (instead of inside the Blade views) means both
     * the homepage preview and the full News page always show the
     * same posts, and it's a single place to wire up a real model later.
     */
    private function newsPosts(?int $limit = null): array
    {
        $posts = [
            [
                'category' => 'Announcement',
                'date' => 'Sep 2, 2026',
                'title' => 'Enrollment for School Year 2026–2027 Now Open',
                'excerpt' => 'Walk-in and online enrollment slots are now available for incoming Grade 11 and 12 learners. Bring your SF9 and PSA birth certificate.',
                'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z',
            ],
            [
                'category' => 'Event',
                'date' => 'Aug 28, 2026',
                'title' => 'SHS Foundation Week Set for October',
                'excerpt' => 'A week of sports, cultural showcases, and academic exhibits from all tracks is being planned by the SPTA and Student Council.',
                'icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z',
            ],
            [
                'category' => 'Achievement',
                'date' => 'Aug 20, 2026',
                'title' => 'TVL Learners Sweep Regional Skills Competition',
                'excerpt' => 'Cookery and Computer Systems Servicing students placed in the top ranks of the Central Visayas TVL skills showcase.',
                'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z',
            ],
            [
                'category' => 'Advisory',
                'date' => 'Aug 15, 2026',
                'title' => 'Class Suspension Advisory: Heavy Rainfall',
                'excerpt' => 'In coordination with the LGU, in-person classes were suspended for one day. Distance learning modules were provided.',
                'icon' => 'M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
            ],
            [
                'category' => 'Announcement',
                'date' => 'Aug 10, 2026',
                'title' => 'Parent-Teacher Conference Schedule Released',
                'excerpt' => "Quarterly conferences will be held per grade level and strand. Check with your child's adviser for the exact time slot.",
                'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
            ],
            [
                'category' => 'Event',
                'date' => 'Aug 3, 2026',
                'title' => 'Coastal Cleanup Drive with SPTA and Barangay Pajo',
                'excerpt' => "Learners and volunteers joined a shoreline cleanup at Bridge Park as part of the school's ongoing environmental program.",
                'icon' => 'M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0',
            ],
        ];

        return $limit ? array_slice($posts, 0, $limit) : $posts;
    }
}
