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
        return view('pages.portfolio')->with(['title' => 'Portfolio']);;
    }

    public function contact(){
        return view('pages.contact')->with(['title' => 'Contact']);
    }
}
