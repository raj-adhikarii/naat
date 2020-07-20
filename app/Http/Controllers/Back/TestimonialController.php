<?php

namespace App\Http\Controllers\Back;

use Image;
use Avatar;
use Session;
use Validator;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::get();

        return view('back.testimonials.index',compact('testimonials'));
    }

    public function create()
    {
        return view('back.testimonials.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'designation' => 'required',
            'testimony' => 'required'
        ]);

        if ($validator->fails()) {
            $error = $validator->messages()->first();
            Session::flash('fail',$error);
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->all();
        if (!file_exists(public_path('img/testimonials'))) {
            $oldmask = umask(0);
            mkdir(public_path('img/testimonials'), 0775, true);
            umask($oldmask);
        }
        if(isset($data['avatar'])){
            $img = Image::make($data['avatar']);
            $ext = $data['avatar']->extension();
            $filename = 'avatar_'.time().'.'.$ext;

            $img->save('public/img/testimonials/'.$filename);

            $data['avatar'] = $filename;
        }else{
            $currentTime = time();
            $avatar = Avatar::create($data['name'])->save('public/img/testimonials/avatar_'. $currentTime .'.png');
            $data['avatar'] = 'avatar_'. $currentTime .'.png';
        }
        if(Testimonial::create($data)){
            Session::flash('success', 'Data submitted successfully.');
            return redirect()->route('testimonials.index');
        }else{
            Session::flash('error', 'Error while sending data. Please try again later.');
            return redirect()->back();
        }
    }

    public function edit(Testimonial $testimonial)
    {
        return view('back.testimonials.edit',compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'designation' => 'required',
            'testimony' => 'required'
        ]);

        if ($validator->fails()) {
            $error = $validator->messages()->first();
            Session::flash('fail',$error);
            return back()->withErrors($validator)->withInput();
        }
        
        $data = $request->all();
        if(isset($data['avatar'])){
            $img = Image::make($data['avatar']);
            $ext = $data['avatar']->extension();
            $filename = 'avatar_'.time().'.'.$ext;

            $img->save('public/img/testimonials/'.$filename);

            $oldAvatar = public_path('img/testimonials/'.$testimonial->avatar);
            if(file_exists($oldAvatar)){
                @unlink($oldAvatar);
            }
            $data['avatar'] = $filename;
        }

        if($testimonial->update($data)){
            Session::flash('success', 'Data updated successfully.');
            return redirect()->route('testimonials.index');
        }else{
            Session::flash('error', 'Error while updating data. Please try again later.');
            return redirect()->back();
        }
    }
    
    public function destroy(Testimonial $testimonial)
    {
        $image = $testimonial->avatar;
        if( $testimonial->delete() ){
            $oldAvatar = public_path('img/testimonials/'.$image);
            if(file_exists($oldAvatar)){
                @unlink($oldAvatar);
                Session::flash('success', 'Data deleted successfully.');
                return redirect()->back();
            }
        }else{
            Session::flash('error', 'Error while deleting data. Please try again later.');
            return redirect()->back();
        }
    }
}
