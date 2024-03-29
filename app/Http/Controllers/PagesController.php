<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;
use DB;

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
        
        $about_one = DB::table('data')->where('titleid', 'about_one')->first();
        
    	return view('pages.about')->with('about_one', $about_one);

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
