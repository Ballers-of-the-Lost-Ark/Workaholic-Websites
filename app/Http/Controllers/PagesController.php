<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index')->with(['title' => 'Workaholic Websites', 'navbarBackground' => 'see-through', 'index' => 'true']);
    }

    public function about(){
        return view('pages.about')->with(['title' => 'About']);;
    }

    public function services(){
        return view('pages.services')->with(['title' => 'Services']);;
    }

    public function portfolio(){
        return view('pages.portfolio')->with(['title' => 'My Work']);;
    }

    public function contact(){
        return view('pages.contact')->with(['title' => 'Contact']);
    }

    public function terms(){
        return view('pages.terms')->with(['title' => 'Terms and Privacy Policy']);
    }
}
