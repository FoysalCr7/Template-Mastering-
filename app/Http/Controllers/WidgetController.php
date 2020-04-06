<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WidgetController extends Controller
{
    public function widgetTop()
    {
        return view('admin.widget.top');
    }

    public function widgetLeftside()
    {
        return view('admin.widget.left-side');
    }
    public function widgetRightside()
    {
        return view('admin.widget.right-side');
    }
    public function widgetContent()
    {
        return view('admin.widget.content');
    }
    public function widgetFooter()
    {
        return view('admin.widget.footer');
    }
    public function widgetStatics()
    {
        return view('admin.widget.statics');
    }
    public function widgetHomecontrol()
    {
        return view('admin.widget.home-control');
    }
}
