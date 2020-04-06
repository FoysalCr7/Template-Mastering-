<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorolaController extends Controller
{
    public function index()
    {
        return view('front-end.home.home');
    }


    public function secondHome()
    {
        return view('front-end.home.home-2');
    }

    public function thirdHome()
    {
        return view('front-end.home.home-3');
    }

    public function checkOut()
    {
        return view('front-end.checkout.checkout');
    }

    public function faQ()
    {
        return view('front-end.faq.faq');
    }

    public function comingSoon()
    {
        return view('front-end.coming.coming-soon');
    }

    public function notFound()
    {
        return view('front-end.notfound.not-found');
    }

    public function adminHome(){
        return view('admin.home.home');
    }


}
