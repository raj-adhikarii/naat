<?php

namespace App\Http\Controllers\Back;

use Image;
use Avatar;
use Session;
use Validator;
use App\SuccessStory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuccessStoryController extends Controller
{
    public function index()
    {
        $success_stories = SuccessStory::get();
        return view('back.success_stories.index',compact('success_stories'));
    }

    public function create()
    {
        return view('back.success_stories.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'designation' => 'required',
            'batch' => 'required'
        ]);

        if ($validator->fails()) {
            $error = $validator->messages()->first();
            Session::flash('fail',$error);
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->all();
        if (!file_exists(public_path('img/success_stories'))) {
            $oldmask = umask(0);
            mkdir(public_path('img/success_stories'), 0775, true);
            umask($oldmask);
        }
        if(isset($data['avatar'])){
            $img = Image::make($data['avatar']);
            $ext = $data['avatar']->extension();
            $filename = 'avatar_'.time().'.'.$ext;

            $img->save('public/img/success_stories/'.$filename);

            $data['avatar'] = $filename;
        }else{
            $currentTime = time();
            $avatar = Avatar::create($data['name'])->save('public/img/success_stories/avatar_'. $currentTime .'.png');
            $data['avatar'] = 'avatar_'. $currentTime .'.png';
        }
        if(SuccessStory::create($data)){
            Session::flash('success', 'Data submitted successfully.');
            return redirect()->route('stories.index');
        }else{
            Session::flash('error', 'Error while sending data. Please try again later.');
            return redirect()->back();
        }
    }

    public function edit(SuccessStory $story)
    {
        return view('back.success_stories.edit',compact('story'));
    }

    public function update(Request $request, SuccessStory $story)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'designation' => 'required',
            'batch' => 'required'
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

            $img->save('public/img/success_stories/'.$filename);

            $oldAvatar = public_path('img/success_stories/'.$story->avatar);
            if(file_exists($oldAvatar)){
                @unlink($oldAvatar);
            }
            $data['avatar'] = $filename;
        }

        if($story->update($data)){
            Session::flash('success', 'Data updated successfully.');
            return redirect()->route('stories.index');
        }else{
            Session::flash('error', 'Error while updating data. Please try again later.');
            return redirect()->back();
        }
    }
    
    public function destroy(SuccessStory $story)
    {
        $image = $story->avatar;
        if( $story->delete() ){
            $oldAvatar = public_path('img/success_stories/'.$image);
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
