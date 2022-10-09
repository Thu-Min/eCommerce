<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // account page (user)
    public function userAccount(){

        $data = User::where('role', '')->get();

        return view('admin.user.userAccount')->with(['userData'=>$data]);
    }

    // detail user account
    public function detailUserAcc($id){

        $data = User::where('id', $id)->first();

        $transaction = Order::where('user_id', $id)->get();

        return view('admin.user.detailUserAcc')->with(['userData'=>$data, 'transaction' => $transaction]);
    }

    // account page (admin)
    public function adminAccount(){

        $data = User::where('role', 'admin')->get();

        return view('admin.user.adminAccount')->with(['userData'=>$data]);
    }

    // detail admin account
    public function detailAdminAcc($id){

        $data = User::where('id', $id)->first();

        return view('admin.user.detailAdminAcc')->with(['userData'=>$data]);
    }
}
