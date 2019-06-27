<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        $title = "Welcome to lido!";
    	return view('pages.index', compact('title'));
    }
    public function gallary()
    {
        $title = "Welcome to lido!";
        return view('pages.gallary', compact('title'));
    }
    public function about()
    {
        $title = "About Us Page";
    	return view('pages.about')->with('title', $title);
    }
    public function policy()
    {
        $data = array(
            'title'=>'services', 
            'services'=>['tour guide', 'camping', 'rafting', 'campfire']
        );

    	return view('pages.policy')->with($data);
    }
    public function contact()
    {
    	return view('pages.contact');
    }
}
