<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\data;
Use DB;

class ContentController extends Controller
{
    public function index()
    {
       
        $contents = data::all();

        
        return view('admin.contentmanage')->with('contents', $contents);


        //return view('posts.index');
        // $posts = Post::all();
        // return view('posts.index')->with('posts', $posts);
    }
}
