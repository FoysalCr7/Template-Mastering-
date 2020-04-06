<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.category.add-category');
    }

    public function manegeCategory()
    {
        return view('admin.category.manege-category');
    }
}
