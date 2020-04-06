<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function addDesign()
    {
        return view('admin.design.add-design');
    }

    public function manegeDesign()
    {
        return view('admin.design.manege-design');
    }
}
