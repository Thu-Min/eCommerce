<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // direct profile page
    public function profile(){
        $id = auth()->user()->id;

        $data = User::where('id', $id)->first();

        return view('admin.profile.profile')->with(['userData' => $data]);
    }

    // update profile page
    public function updateProfilePage($id) {
        $id = auth()->user()->id;

        $data = User::where('id', $id)->first();

        return view('admin.profile.updateProfile')->with(['userData' => $data]);
    }

    // update profile process
    public function updateProfile(Request $request, $id){

        $this->updateDataRequest($request);
        $updateData = $this->updateDataRequest($request);

        User::where('id', $id)->update($updateData);
        return redirect()->route('admin#profile')->with(['success' => "Account Updated!"]);
    }

    // change password page
    public function changePasswordPage($id){
        return view('admin.profile.changePassword');
    }

    // change password
    public function changePassword(Request $request, $id){
        $oldPass = $request->oldPassword;
        $newPass = $request->newPassword;
        $confirmPass = $request->password_confirmation;

        $db = User::where('id', $id)->first();
        $dbHashPass = $db['password'];

        if(Hash::check($oldPass, $dbHashPass)){
            if($newPass == $confirmPass){
                if(strlen($newPass) > 6 && strlen($confirmPass) > 6){

                    $hash = Hash::make($newPass);

                    User::where('id', $id)->update(['password'=>$hash]);

                    return redirect()->route('admin#profile')->with(['passSuccess'=> 'Password Updated!']);
                }
            }
        }
    }

    // update profile data request
    private function updateDataRequest(Request $request) {
        return [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ];
    }
}
