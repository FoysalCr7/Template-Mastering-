<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function myAccount()
    {
        return view('front-end.user.my-account');
    }
}
