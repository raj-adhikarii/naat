<?php

namespace App\Http\Controllers\Front;

use Alert;
use Session;
use Validator;
use App\Album;
use App\Event;
use App\Team;
use App\Gallery;
use App\Testimonial;
use App\ContactQuery;
use App\SuccessStory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::take(3)->latest()->get();
        $testimonials = Testimonial::take(3)->get();
        $galleries = Gallery::take(8)->get();
        
        if(Session::has('success')){
            Alert::success(session('success'))->persistent('Close');
        }elseif(Session::has('error')){
            Alert::error(session('error'))->persistent('Close');
        }
        return view('front.home.index', compact('events', 'testimonials', 'galleries'));
    }

    public function albums()
    {
        $albums = Album::all();
        $recentEvents = Event::orderBy('id','DESC')->take(4)->get();
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.home.albums',compact('albums','recentEvents'));
    }

    public function albumImages($album_id)
    {
        $album = Album::find($album_id);
        $images = Gallery::where('album_id', $album_id)->get();
        $recentEvents = Event::orderBy('id','DESC')->take(4)->get();
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.home.album-images',compact('album','images','recentEvents'));
    }

    public function contactdetails()
    {
        if(Session::has('success')){
            Alert::success(session('success'))->persistent('Close');
        }elseif(Session::has('error')){
            Alert::error(session('error'))->persistent('Close');
        }
        return view('front.home.contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email'=> 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            $error = $validator->messages();
            Session::flash('error',$error);
            return back()->withErrors($validator)->withInput();
        }

        if(ContactQuery::create($request->all())){
            Session::flash('success', 'Data submitted successfully.');
            return redirect()->back();
        }else{
            Session::flash('error', 'Error while sending data. Please try again later.');
            return redirect()->back();
        }

        return redirect()->back()->with('success','Message sent');
    }

    public function whywe()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.aboutus.whywe');
    }

    public function diplomacrew()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.training.diplomacrew');
    }

    public function groundhandling()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.training.groundhandling');
    }

    public function internationaltourism()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.training.internationaltourism');
    }

     public function advancedinternationaltourism()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.training.advancedinternationaltourism');
    }

    public function who()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.aboutus.who');
    }

    public function mission()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.aboutus.mission');
    }

    public function message()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.aboutus.message');
    }

    public function ourTeam()
    {
        $teams = Team::orderBy('name', 'ASC')->get();
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.aboutus.our_team', compact('teams'));
    }

    public function certificates()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.aboutus.certificates');
    }

    public function successStories()
    {
        $stories = SuccessStory::orderBy('name', 'ASC')->get();
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.aboutus.success-stories', compact('stories'));
    }

    public function learningFacilities()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.aboutus.learning-facilities');
    }

    public function cabincrew()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.training.cabincrew');
    }

    public function airport()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.training.airport');
    }

    public function pilot()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.training.pilot');
    }

    public function aircraft()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.training.aircraft');
    }

    public function show()
    {
        $events = Event::orderBy('id','DESC')->get();

        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.event.show', compact('events'));

    }

    public function eventDetail($slug)
    {
        $event = Event::where('slug',$slug)->first();

        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.event.detail', compact('event'));
    }

    public function faq()
    {
        if(Session::has('success')){
            Alert::success(session('success'));
        }elseif(Session::has('error')){
            Alert::error(session('error'));
        }
        return view('front.home.faq');
    }
}
