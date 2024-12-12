<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function welcome(Request $request): View
    {

        $visit = Visit::firstOrCreate([], ['count' => 0]);

        $visit->increment('count');

        $interviews = [
            'https://www.youtube.com/watch?v=28nS80VnxR8',
            'https://www.youtube.com/watch?v=HhDcd4Lp7ZI',
            'https://www.youtube.com/watch?v=a5Mt4r9FMSw',
            'https://www.youtube.com/watch?v=hqs0WU0WNxw',
            'https://www.youtube.com/watch?v=8OwC7VG1kcU',
            'https://www.youtube.com/watch?v=_wRaeMcHQ_Y',
        ];

        return view('welcome', [
            'visit' => $visit->count,
            'interviews' => $interviews,
        ]);
    }
}
