<?php

namespace App\Http\Controllers\Back;

use Hash;
use Auth;
use Session;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getProfile()
    {
        $user = Auth::user();
        return view('back.profile', compact('user'));
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        if ($validator->fails()) {
            $error = $validator->messages()->first();
            Session::flash('fail',$error);
            return back()->withErrors($validator)->withInput();
        }

        if(Hash::check($request['old_password'], $user->password)){
            $user->password = Hash::make($request['password']);
            if($user->update()){
                Session::flash('success', 'Password updated successfully');
                return redirect()->back();
            }
        }
        Session::flash('fail', 'Current password is incorrent. Please try again.');
        return redirect()->back();        
    }
}
