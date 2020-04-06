<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function addOrder(){
return view('admin.order.add-order');
   }

   public function newOrder(){
       return view('admin.order.new-order');
   }
    public function completeOrder(){
        return view('admin.order.complete-order');
    }
    public function ongoingOrder(){
        return view('admin.order.ongoing-order');
    }
}
