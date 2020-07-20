<?php

namespace App\Http\Controllers\Back;

use App\ContactQuery;
use App\Event;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::count();
        $users = User::count();
        $contacts = ContactQuery::count();

        return view('back.dashboard', compact('events', 'users', 'contacts'));
    }
}
