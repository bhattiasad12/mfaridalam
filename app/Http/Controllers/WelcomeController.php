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
        $visit = Visit::where('id', 1)->value('count');

        $interviews = [
            'https://www.youtube.com/watch?v=28nS80VnxR8',
            'https://www.youtube.com/watch?v=HhDcd4Lp7ZI',
            'https://www.youtube.com/watch?v=a5Mt4r9FMSw',
            'https://www.youtube.com/watch?v=hqs0WU0WNxw',
            'https://www.youtube.com/watch?v=8OwC7VG1kcU',
            'https://www.youtube.com/watch?v=_wRaeMcHQ_Y',
        ];

        return view('welcome', compact('visit', 'interviews'));
    }

    public function getAboutMe()
    {
        $visit = Visit::where('id', 1)->value('count');

        $pageName = 'About Me';

        return view('about_me', compact('pageName', 'visit'));
    }

    public function getContactMe()
    {
        $visit = Visit::where('id', 1)->value('count');

        $pageName = 'Contact Me';

        return view('contact_me', compact('pageName', 'visit'));
    }
}
