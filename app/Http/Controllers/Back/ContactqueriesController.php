<?php

namespace App\Http\Controllers\Back;

use Auth;
use Session;
use App\ContactQuery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactqueriesController extends Controller
{
    public function index()
    {
        $contactqueries = ContactQuery::with('follower')->get();
        return view('back.contactqueries.index', compact('contactqueries'));
    }

    public function update(ContactQuery $contactquery)
    {
        if($contactquery->followed){
            $contactquery->followed_by = 0;            
        }else{
            $contactquery->followed_by = Auth::id();
        }        
        $contactquery->followed = !$contactquery->followed;
        if( $contactquery->update() ){
            Session::flash('success', 'Data updated successfully.');
            return redirect()->back();
        }else{
            Session::flash('fail', 'Error while updating data. Please try again later.');
            return redirect()->back();
        }
    }

    public function destroy(ContactQuery $contactquery)
    {
        if( $contactquery->delete() ){
            Session::flash('success', 'Data deleted successfully.');
            return redirect()->back();
        }else{
            Session::flash('fail', 'Error while deleting data. Please try again later.');
            return redirect()->back();
        }
    }
}
