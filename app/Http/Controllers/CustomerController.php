<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function addCustomer(){


       return view("admin.customer.add-customer");
   }

   public function manegeCustomer(){


       return view("admin.customer.manege-customer");
   }

   public function unregisterCustomer(){


       return view("admin.customer.unregister-customer");
   }
    public function addUser(){


        return view("admin.customer.add-user");
    }
    public function manegeUser(){


        return view("admin.customer.manege-user");
    }
}
