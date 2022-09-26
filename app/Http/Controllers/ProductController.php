<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // product page
    public function productPage(){
        return view('admin.product.productPage');
    }

    // add product page
    public function addProductPage() {
        return view('admin.product.addProduct');
    }

    // add product process
    public function addProduct(Request $request){
        dd($request->all());
    }
}
