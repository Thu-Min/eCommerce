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
    // home page
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

    // home page
    public function index()
    {
        $userCount = User::count();
        $orderCount = Order::count();
        $productCount = Product::count();

        return view('customer.home')->with(['userCount' => $userCount, 'orderCount' => $orderCount, 'productCount' => $productCount]);
    }

    // shop page
    public function shop(){
        if(Auth::check()){
            $categoryData = Category::get();
            $productData = Product::paginate(8);

            return view('customer.shop')->with(['category'=>$categoryData, 'product'=>$productData]);
        } else {
            return redirect()->route('login');
        }

    }

    // detail page
    public function detail($id){
        $data = Product::select('products.*', 'categories.category_id', 'categories.cateogry_name')
                    ->join('categories', 'products.category_id', 'categories.category_id')
                    ->where('product_id', $id)
                    ->first();

        return view('customer.detail')->with(['data' => $data]);
    }
}
