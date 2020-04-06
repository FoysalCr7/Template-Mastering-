<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutUs()
    {
        return view('front-end.about.aboutUs');
    }


    public function contactUs()
    {
        return view('front-end.about.contact-us');
    }
}
