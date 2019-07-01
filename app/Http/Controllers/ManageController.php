<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;



class ManageController extends Controller
{
	public function index()
    {
        // $title = "Hey Admin!";
    	return view('admin.adminhome');
    }
    public function dashboard()
    {
        $title = DB::select('SELECT count(*) FROM users');
        

    	return view('admin.dashboard')->with('title', $title);
    	

    }

    public function usermanage()
    {
        $users = User::orderBy('id','asc')->paginate(10);
    	return view('admin.usermanage')->with('users', $users);
    }
    public function content()
    {
        $data = array(
            'title'=>'contents', 
            'services'=>['about company', 'static data', 'privacy policy', 'contact us details']
        );

    	return view('admin.contentmanage')->with($data);
    }





    public function register()
    {
        // $title = "Hey Admin!";
        return view('admin.adminregister');
    }



    public function login()
    {
        // $title = "Hey Admin!";
        return view('admin.adminlogin');
    }
    
}
