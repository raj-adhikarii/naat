<?php

namespace App\Http\Controllers\Front;

use Alert;
use Session;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        if(Session::has('success')){
            Alert::success(session('success'))->persistent('Close');
        }elseif(Session::has('error')){
            Alert::error(session('error'))->persistent('Close');
        }
        return view('front.home.testimonials', compact('testimonials'));
    }
}
