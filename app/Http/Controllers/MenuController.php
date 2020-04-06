<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function addMenu()
    {
        return view('admin.menu.add-menu');
    }

    public function manegeMenu()
    {
        return view('admin.menu.manege-menu');
    }
}
