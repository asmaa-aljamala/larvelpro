<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontsiteController extends Controller
{
    public function showhome(){

  return view('frontsize.index');
    }
    public function showcategory(){
        return view('frontsize.category');
    }
    public function shownewsdetails(){
        return view('frontsize.news-details');
    }
    public function showsidebar(){

        return view('frontsize.sidebar');
    }
    public function showabout(){
        return view('frontsize.about-us');

    }
    public function showsearch(){
        return view('frontsize.search');

    }
    public function showcontact(){
        return view('frontsize.contact-us');
    }
}
