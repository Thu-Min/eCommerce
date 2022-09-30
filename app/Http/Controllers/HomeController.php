<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function auth(){
        if(Auth::check()) {
            if(Auth::user()->role == 'admin') {
                return redirect()->route('admin#profile');
               } else if (Auth::user()->role == ''){
                $userCount = User::count();
                $orderCount = Order::count();
                $productCount = Product::count();
                        return view('customer.home')->with(['userCount' => $userCount, 'orderCount' => $orderCount, 'productCount' => $productCount]);
                    }
        }
    }
    // User Controller
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userCount = User::count();
        $orderCount = Order::count();
        $productCount = Product::count();

        return view('customer.home')->with(['userCount' => $userCount, 'orderCount' => $orderCount, 'productCount' => $productCount]);
    }

    // shop page
    public function shop(){
        $categoryData = Category::get();
        $productData = Product::get();

        return view('customer.shop')->with(['category'=>$categoryData, 'product'=>$productData]);
    }
}
