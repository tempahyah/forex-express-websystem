<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        $title = 'About';
        // return view ('pages.about', compact('title'));
        return view ('pages.about')->with('title', $title);
    }

    public function contact(){
        $title = 'Contact';
        // return view ('pages.about', compact('title'));
        return view ('pages.contact')->with('title', $title);
    }

    public function team(){
        $title = 'Team';
        return view ('pages.team')->with('title', $title);
    }

}
