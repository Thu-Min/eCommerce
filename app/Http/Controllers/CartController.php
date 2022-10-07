<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // add to cart page
    public function addToCart($id){
        $data = Product::where('product_id', $id)->first();

        return view('customer.addToCart')->with(['data' => $data]);
    }

    // add to cart process
    public function addToCartP(Request $request, $id){

        $data = $this->getAddToCartData($request, $id);
        Cart::insert($data);
        return redirect()->route('user#shopPage')->with(['added' => "Added To Cart"]);
    }

    // cart page
    public function cart($id){
        $userId = auth()->user()->id;

        $userData = Cart::select('carts.*', 'users.id', 'users.address')
                ->join('users', 'carts.user_id', 'users.id')
                ->where('user_id', $id)
                ->first();
        // dd($userData->id);
        $product = Cart::select('carts.*', 'products.product_name', 'products.price', 'products.image')
                ->join('products', 'carts.product_id', 'products.product_id')
                ->where('user_id', $id)
                ->paginate(7);

        $totalPrice = Cart::select('carts.*', 'product.price')
                ->join('products', 'carts.product_id', 'products.product_id')
                ->where('user_id', $id)
                ->sum('products.price');
                // ->get();
        // dd($totalPrice);

        // dd($product->toArray());

        // dd($data->toArray(), $product->toArray());
        return view('customer.cart')->with(['product' => $product, 'userData' => $userData, 'totalPrice' => $totalPrice]);
    }

    // get add to cart data
    private function getAddToCartData($request, $id) {
        return  [
            'user_id' => auth()->user()->id,
            'product_id' => $id,
            'quantity' => $request->quantity,
        ];
    }
}
