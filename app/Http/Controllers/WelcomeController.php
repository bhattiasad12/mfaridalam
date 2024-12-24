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

        return view('welcome');
    }

    public function getAboutMe()
    {
        $pageName = 'ABOUT';

        return view('about_me', compact('pageName'));
    }

    public function getContactMe()
    {
        $pageName = 'CONTACT';

        return view('contact_me', compact('pageName'));
    }
}
