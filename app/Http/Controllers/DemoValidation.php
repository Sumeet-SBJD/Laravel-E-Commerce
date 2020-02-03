<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoValidation extends Controller
{
   public function index(request $request)
   {
   		$request->validate([
   			'firstname'=>'required',
   			'lastname'=>'required',
   			'email'=>'required | email',
   			'address'=>'required',
   			'phone'=>'required',
   			'gender'=>'required',
   			'qualification'=>'required',
   		]);

   		$fname= $request->input('firstname');
   		$lname= $request->input('lastname');
   		$email= $request->input('email');
   		$address= $request->input('address');
   		$phone= $request->input('phone');
   		$gender= $request->input('gender');
   		$qualification= $request->input('qualification');

   		DB::table('demo-form')->insert([
    		 'fname'=> $fname,
    		 'lname'=> $lname,
    		 'email' => $email, 
    		 'address' => $address,
    		 'phone' => $phone,
    		 'gender'=> $gender,
    		 'qualification'=> $qualification
    		]);
   		
   		return back()->with('success', 'Successfully registered');
   		
   }
}
