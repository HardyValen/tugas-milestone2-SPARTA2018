<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageViewController extends Controller
{
    function viewLanding(){
        return view('landing');
    }

    function viewAbout(){
        return view('about');
    }

    function viewTOC(){
        return view('products');
    }

    function viewContact(){
        return view('contact');
    }
}
