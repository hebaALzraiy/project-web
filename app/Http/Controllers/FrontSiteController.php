<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontSiteController extends Controller
{


    public function showHome(){
        return view('frontsite.home');
    }

    public function showAboutus(){
        return view('frontsite.aboutus');
    }

    public function showContact(){
        return view('frontsite.contact');
    }

    public function showMeet(){
        return view('frontsite.meet');
    }
    public function showWhatwedo(){
        return view('frontsite.whatwedo');
    }
}
