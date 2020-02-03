<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function admin_login(request $req)
    {
    	
    	return view('Admin/admin_login');
    }


    public function index(request $request)
    {
        
    	$request->session()->put('email',$request->input('email'));
    	return view('Admin/dashboard')->with('email',$request->session()->get('email'));
    }
}
