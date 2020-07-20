<?php

namespace App\Http\Controllers\Back;

use Session;
use Validator;
use App\Album;
use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{
    public function addImages($album_id)
    {
        $album = Album::with('images')->where('id', $album_id)->first();
        return view('back.albums.update-images', compact('album'));
    }

    public function updateGallery(Request $request, $album_id)
    {
        if( isset($request['images']) and $request['images'] != null ) {
            $images = explode(',',$request['images']);
            Gallery::where('album_id',$album_id)->delete();
            foreach( $images as $image ) {
                Gallery::create([
                    'album_id' => $album_id,
                    'url' => $image
                ]);
            }
            Session::flash('success', 'Data updated successfully.');
            return redirect()->route('albums.index');
        }
        Session::flash('fail', 'Album is now empty.');
        return redirect()->route('albums.index');
    }

    public function uploadAlbumImage(Request $request, $album_id)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            
            $dir = 'album_'.$album_id.'/';
            if (!file_exists(public_path('img/gallery') .'/'.$dir )) {
                $oldmask = umask(0);
                mkdir(public_path('img/gallery') .'/'.$dir , 0775, true);
                umask($oldmask);
            }
            
            $img_name = pathinfo(str_replace(" ","-",$image->getClientOriginalName()), PATHINFO_FILENAME);
            $name = $img_name . '-' . time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/gallery/'. $dir . $name);

            Image::make($image)->save($location,75);
            
            return response()->json([
                'success' => true,
                'message' => 'Images Uploaded Successfully',
                'image' => $name
            ],200);
        }else{
            return response()->json(['message' => 'Error uploading images. Please try again later'],500);
        }
    }

    public function ajaxDeleteDropzoneAlbumImage(Request $request)
    {
        $destinationPath = public_path('img/gallery/'.'album_'.$request['albumId'].'/'.$request['url']);              
        if(file_exists($destinationPath)){
            @unlink($destinationPath);
            return 'success';
        }
        return 'failure';
    }

    public function ajaxDeleteAlbumImage(Request $request)
    {
        $image = Gallery::where('url',$request['url'])->first();
        if($image){
            $album_id = $image->album_id;
            $destinationPath = public_path('img/gallery/'.'album_'.$album_id.'/'.$image->url);
            if($image->delete() ){                
                if(file_exists($destinationPath)){
                    @unlink($destinationPath);
                }
                return 'success';
            }elseif(file_exists($destinationPath)){
                @unlink($destinationPath);
                return 'success';
            }
        }
        return 'failure';
    } 
}
