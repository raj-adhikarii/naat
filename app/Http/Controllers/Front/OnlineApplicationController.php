<?php

namespace App\Http\Controllers\Front;

use Session;
use Validator;
use App\OnlineApplication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OnlineApplicationController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'location' => 'required|min:3',
            'mobile' => 'required|numeric',
            'course' => 'required|string',
            'dob' => 'required|date',
            'height' => 'required',
            'gender' => 'required',
        ]);

        if ($validator->fails()) {
            $error = $validator->messages()->first();
            Session::flash('error',$error);
            return back()->withErrors($validator)->withInput();
        }

        if(OnlineApplication::create($request->all())){
            Session::flash('success', 'Data submitted successfully.');
            return redirect()->back();
        }else{
            Session::flash('error', 'Error while sending data. Please try again later.');
            return redirect()->back();
        }
    }
}
