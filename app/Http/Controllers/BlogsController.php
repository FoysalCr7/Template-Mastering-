<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function blogPage()
    {
        return view('front-end.blog.blog-page');

    }

    public function singleBlog()
    {
        return view('front-end.blog.single-blog-page');
    }
}
