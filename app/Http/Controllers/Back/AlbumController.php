<?php

namespace App\Http\Controllers\Back;

use Session;
use Validator;
use App\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::orderBy('id','DESC')->get();
        return view('back.albums.index', compact('albums'));
    }

    public function create()
    {
        return view('back.albums.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'album' => 'required',
            'info' => 'required',
        ]);

        if ($validator->fails()) {
            $error = $validator->messages()->first();
            Session::flash('fail',$error);
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->all();

        $old_albums_count = Album::where('name', $data['album'])->count();
        while(Album::where('name', $data['album'])->count() > 0){
            $data['album'] = $request['album']. '-' . $old_albums_count;
            $old_albums_count++;
        }

        $data['name'] = $data['album'];
        if(Album::create($data)){
            Session::flash('success', 'Data saved successfully.');
            return redirect()->route('albums.index');
        }else{
            Session::flash('fail', 'Error while saving data. Please try again later.');
            return redirect()->back();
        }
    }

    public function edit(Album $album)
    {
        return view('back.albums.edit', compact('album'));
    }

    public function update(Request $request, Album $album)
    {
        $validator = Validator::make($request->all(), [
            'album' => 'required',
            'info' => 'required',
        ]);

        if ($validator->fails()) {
            $error = $validator->messages()->first();
            Session::flash('fail',$error);
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->all();
        if( $album->name !== $request->album ){
            $old_albums_count = Album::where('name', $data['album'])->count();
            while(Album::where('name', $data['album'])->count() > 0){
                $data['album'] = $request['album']. '-' . $old_albums_count;
                $old_albums_count++;
            }
        }

        $data['name'] = $data['album'];
        if($album->update($data)){
            Session::flash('success', 'Data updated successfully.');
            return redirect()->route('albums.index');
        }else{
            Session::flash('fail', 'Error while updating data. Please try again later.');
            return redirect()->back();
        }
    }

    public function destroy(Album $album)
    {
        if($album->delete()){
            Session::flash('success', 'Data deleted successfully.');
            return redirect()->route('albums.index');
        }else{
            Session::flash('fail', 'Error while deleting data. Please try again later.');
            return redirect()->back();
        }
    }
}
