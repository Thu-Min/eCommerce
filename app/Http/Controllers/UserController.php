<?php

namespace App\Http\Controllers;

use App\Models\User;
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

        return view('admin.user.detailUserAcc')->with(['userData'=>$data]);
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
