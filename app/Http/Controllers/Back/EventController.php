<?php

namespace App\Http\Controllers\Back;

use Str;
use Image;
use Session;
use Validator;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::get();

        return view('back.events.index', compact('events'));
    }

    public function create()
    {
        return view('back.events.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3',
            'slug' => 'required|min:3',
            'description' => 'required',
            'thumbnail' => 'required|image'
        ]);

        if ($validator->fails()) {
            $error = $validator->messages()->first();
            Session::flash('fail',$error);
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->all();
        if(isset($data['thumbnail'])){
            if (!file_exists(public_path('img/events'))) {
                $oldmask = umask(0);
                mkdir(public_path('img/events'), 0775, true);
                umask($oldmask);
            }

            $img = Image::make($data['thumbnail']);
            $ext = $data['thumbnail']->extension();
            $filename = 'img_'.date('sdHmY').'_'.rand(1000, 9000).'.'.$ext;

            $img->save('public/img/events/'.$filename);

            $data['thumbnail'] = $filename;
        }
        $slug = Str::slug($data['slug']);
        $data['slug'] = $slug;
        $old_events_count = Event::where('slug', $data['slug'])->count();
        while(Event::where('slug', $data['slug'])->count() > 0){
            $data['slug'] = $slug. '-' . $old_events_count;
            $old_events_count++;
        }

        if(Event::create($data)){
            Session::flash('success', 'Data submitted successfully.');
            return redirect()->route('events.index');
        }else{
            Session::flash('fail', 'Error while sending data. Please try again later.');
            return redirect()->back();
        }
    }

    public function edit(Event $event)
    {
        return view('back.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            $error = $validator->messages()->first();
            Session::flash('fail',$error);
            return back()->withErrors($validator)->withInput();
        }

        if(isset($request['thumbnail'])){
            $prev_image = $event->thumbnail;
            $img = Image::make($request['thumbnail']);
            $ext = $request['thumbnail']->extension();
            $filename = 'img_'.date('sdHmY').'_'.rand(1000, 9000).'.'.$ext;

            $img->save('public/img/events/'.$filename);

            $event['thumbnail'] = $filename;
        }
        $event->title = $request->title;
        $event->description = $request->description;
        if($event->update()){
            $destinationPath = public_path('img/events/'.$prev_image);
            if(file_exists($destinationPath)){
                @unlink($destinationPath);
            }
            Session::flash('success', 'Data updated successfully.');
            return redirect()->route('events.index');
        }else{
            Session::flash('fail', 'Error while updating data. Please try again later.');
            return redirect()->back();
        }
    }

    public function destroy(Event $event)
    {
        $image = $event->thumbnail;
        if( $event->delete() ){
            $destinationPath = public_path('img/events/'.$image);
            if(file_exists($destinationPath)){
                @unlink($destinationPath);
                Session::flash('success', 'Data deleted successfully.');
                return redirect()->back();
            }
        }else{
            Session::flash('fail', 'Error while deleting data. Please try again later.');
            return redirect()->back();
        }
    }
}
