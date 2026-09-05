<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class AchievementController extends Controller
{
    public function index()
    {
        $thumbDir = public_path('images/achievements/thumb');
        $fullDir  = public_path('images/achievements/full');

        $images = collect(File::exists($thumbDir) ? File::files($thumbDir) : [])
            ->map(function ($file) {
                return (int) pathinfo($file, PATHINFO_FILENAME);
            })
            ->sort()
            ->values()
            ->map(function ($n) {
                return [
                    'thumb' => asset("images/achievements/thumb/{$n}.jpg"),
                    'full'  => asset("images/achievements/full/{$n}.jpg"),
                    'alt'   => "Pajo National High School - SHS achievement highlight {$n}",
                ];
            });

        return view('achievements', ['images' => $images]);
    }
}
