<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddonsController extends Controller
{

    public function addAddons()
    {
        return view('admin.add.add-addons');
    }

    public function manegeAddons()
    {
        return view('admin.add.manege-addons');
    }
}
