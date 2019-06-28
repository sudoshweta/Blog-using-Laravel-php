<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\data;
use DB;


class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = data::all();
        return view('content.index')->with('contents', $contents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'titleid'=>'required',
            'title'=>'required',
            'description' => 'required',

        ]);

        $entry = new data();
        $entry->titleid = $request->input('titleid');
        $entry->title = $request->input('title');
        $entry->description = $request->input('description');
        // $post->user_id = auth()->user()->id;
        $entry->save();

        return redirect('/admin/content')->with('success', 'Content Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entry =  data::find($id);
        return view('content.show')->with('entry', $entry);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entry =  data::find($id);
        return view('content.edit')->with('entry', $entry);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'titleid'=>'required',
            'title'=>'required',
            'description' => 'required',

        ]);

        $entry = data::find($id);
        $entry->titleid = $request->input('titleid');
        $entry->title = $request->input('title');
        $entry->description = $request->input('description');
        
        $entry->save();

        return redirect('/admin/content')->with('success', 'Content Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entry = data::find($id);
         $entry->delete();
        return redirect('/admin/content')->with('success', 'Content Removed');
    }
}
