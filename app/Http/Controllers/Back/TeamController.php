<?php

namespace App\Http\Controllers\Back;

use Image;
use Avatar;
use Session;
use Validator;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::get();
        return view('back.teams.index',compact('teams'));
    }

    public function create()
    {
        return view('back.teams.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'designation' => 'required',
            'type' => 'required'
        ]);

        if ($validator->fails()) {
            $error = $validator->messages()->first();
            Session::flash('fail',$error);
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->all();
        if (!file_exists(public_path('img/teams'))) {
            $oldmask = umask(0);
            mkdir(public_path('img/teams'), 0775, true);
            umask($oldmask);
        }
        if(isset($data['avatar'])){
            $img = Image::make($data['avatar']);
            $ext = $data['avatar']->extension();
            $filename = 'avatar_'.time().'.'.$ext;

            $img->save('public/img/teams/'.$filename);

            $data['avatar'] = $filename;
        }else{
            $currentTime = time();
            $avatar = Avatar::create($data['name'])->save('public/img/teams/avatar_'. $currentTime .'.png');
            $data['avatar'] = 'avatar_'. $currentTime .'.png';
        }
        if(Team::create($data)){
            Session::flash('success', 'Data submitted successfully.');
            return redirect()->route('teams.index');
        }else{
            Session::flash('error', 'Error while sending data. Please try again later.');
            return redirect()->back();
        }
    }

    public function edit(Team $team)
    {
        return view('back.teams.edit',compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'designation' => 'required',
            'type' => 'required'
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

            $img->save('public/img/teams/'.$filename);

            $oldAvatar = public_path('img/teams/'.$team->avatar);
            if(file_exists($oldAvatar)){
                @unlink($oldAvatar);
            }
            $data['avatar'] = $filename;
        }

        if($team->update($data)){
            Session::flash('success', 'Data updated successfully.');
            return redirect()->route('teams.index');
        }else{
            Session::flash('error', 'Error while updating data. Please try again later.');
            return redirect()->back();
        }
    }
    
    public function destroy(Team $team)
    {
        $image = $team->avatar;
        if( $team->delete() ){
            $oldAvatar = public_path('img/teams/'.$image);
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
