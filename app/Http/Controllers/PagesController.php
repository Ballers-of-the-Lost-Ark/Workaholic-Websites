<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index')->with(['title' => 'Workaholic Websites', 'navbarBackground' => 'see-through']);
    }

    public function about(){
        return view('pages.about')->with(['title' => 'About', 'navbarBackground' => 'navbar-dark']);;
    }

    public function services(){
        return view('pages.services')->with(['title' => 'Services', 'navbarBackground' => 'navbar-dark']);;
    }

    public function portfolio(){
        return view('pages.portfolio')->with(['title' => 'Portfolio', 'navbarBackground' => 'navbar-dark']);;
    }

    public function contact(){
        return view('pages.contact')->with(['title' => 'Contact', 'navbarBackground' => 'navbar-dark']);
    }

    public function payment(){
        return view('pages.payment')->with(['title' => 'Payment', 'navbarBackground' => 'navbar-dark']);
    }
}
