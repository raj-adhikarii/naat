<?php

namespace App\Http\Controllers\Back;

use Auth;
use Session;
use App\OnlineApplication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OnlineApplicationController extends Controller
{
    public function index()
    {
        $applications = OnlineApplication::with('follower')->get();

        return view('back.online_applications.index', compact('applications'));
    }

    public function destroy(OnlineApplication $application)
    {
        if($application->delete()){
            Session::flash('success', 'Data deleted successfully.');
            return redirect()->back();
        }else{
            Session::flash('fail', 'Error while deleting data. Please try again later.');
            return redirect()->back();
        }
    }

    public function toggleApplicationFollow(Request $request, OnlineApplication $application)
    {
        if( $application->status){
            $application->status = false;
            $application->followed_by = null;
            $application->remark = null;
        }else{
            $application->status = true;
            $application->followed_by = Auth::id();
            $application->remark = $request->remark;
        }
        if($application->update()){
            Session::flash('success', 'Data updated successfully.');
            return redirect()->back();
        }else{
            Session::flash('fail', 'Error while updating data. Please try again later.');
            return redirect()->back();
        }
    }

}
