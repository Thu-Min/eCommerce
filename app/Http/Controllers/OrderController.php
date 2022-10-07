<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    // payment page
    public function payment($id) {
        $userData = Cart::select('carts.*', 'users.id', 'users.email')
                ->join('users', 'carts.user_id', 'users.id')
                ->where('user_id', $id)
                ->first();

        $price = Cart::select('carts.*', 'product.price')
                ->join('products', 'carts.product_id', 'products.product_id')
                ->where('user_id', $id)
                ->sum(DB::raw('products.price * carts.quantity'));

        return view('customer.payment')->with(['userData' => $userData, 'price' => $price]);
    }

    // payment process
    public function paymentPorcess(Request $request, $id) {
        dd($request->all());
    }
}
