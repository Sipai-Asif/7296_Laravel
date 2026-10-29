<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $features = [
            ['title' => '@extends',  'text' => 'Child page master layout ko inherit karta hai.'],
            ['title' => '@section',  'text' => 'Child page apna content section ke andar likhta hai.'],
            ['title' => '@yield',    'text' => 'Master layout me yield ki jagah section ka content aata hai.'],
        ];

        return view('pages.home', compact('features'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    // Dynamic theme: chosen colour session me save hota hai
    public function setTheme(string $name)
    {
        if (array_key_exists($name, config('theme.colors'))) {
            session(['theme' => $name]);
        }

        return back();
    }
}
