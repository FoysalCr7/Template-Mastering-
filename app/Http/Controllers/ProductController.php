<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function productDetails()
    {
        return view('front-end.product.product-details');
    }

    public function prioductList()
    {
        return view('front-end.product.product-list');
    }

    public function allProducts()
    {
        return view('front-end.product.all-products');
    }

    public function addProduct()
    {
        return view('admin.product.add-product');
    }

    public function manegeProduct()
    {
        return view('admin.product.manege-product');
    }
}
