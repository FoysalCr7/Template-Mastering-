<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function addPage()
    {
        return view('admin.page.add-page');
    }

    public function manegePage()
    {
        return view('admin.page.manege-page');
    }
    public function homepageSetting()
    {
        return view('admin.page.homepage-setting');
    }
    public function socialNetwork()
    {
        return view('admin.page.social-network');
    }
}
