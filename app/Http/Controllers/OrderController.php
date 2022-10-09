<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    // payment page (user)
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

    // payment process (user)
    public function paymentPorcess(Request $request, $id) {
        $price = Cart::select('carts.*', 'product.price')
                ->join('products', 'carts.product_id', 'products.product_id')
                ->where('user_id', $id)
                ->sum(DB::raw('products.price * carts.quantity'));

        $data = $this->paymentData($request, $price);

        Order::insert($data);

        return redirect()->route('user#shopPage')->with(['confirmed' => 'Payment Confirmed!']);
    }

    // transaction page (user)
    public function transactionPage($id) {
        $data = Order::where('user_id', $id)->get();

        return view('customer.transaction')->with(['data' => $data]);
    }

    // order page (admin)
    public function order() {
        $data = Order::select('orders.*', 'users.name', 'users.email')
                    ->join('users', 'orders.user_id', 'users.id')
                    ->get();

        return view('admin.order.order')->with(['data' => $data]);
    }

    // payment data get (user)
    private function paymentData($request, $price) {
        return [
            'user_id' => auth()->user()->id,
            'amount' => $price,
            'method' => $request->method,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
