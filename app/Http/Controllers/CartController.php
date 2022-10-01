<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // add to cart page
    public function addToCart($id){
        $data = Product::where('product_id', $id)->first();

        return view('customer.addToCart')->with(['data' => $data]);
    }

    // add to cart process
    public function addToCartP(Request $request, $id){
        dd($id);
        // $data = $this->getAddToCartData($request);

        // dd($data);
    }

    // cart page
    public function cart(){
        return view('customer.cart');
    }

    // get add to cart data
    // private function getAddToCartData ($request, $id) {
    //     return  [
    //         'user_id' -> Auth::user()->id,
    //         'quantity' -> $request->quantity,
    //     ];
    // }
}
