<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class RegsController extends Controller
{
	

	public function add_users(request $request)
	{
		
		$fname=$request->input('username');
		$lname=$request->input('lastname');
		$email=$request->input('email');
		$password=$request->input('password');
		$enc=md5($password);
		$address=$request->input('address');
		$city=$request->input('city');
		$country=$request->input('country');
		$zip_code=$request->input('zip_code');

		$image = $request->file('profile_pic');

	    $new_name = $image->getClientOriginalName();

	    $destination = $image->move(public_path('Uploads/Profile_pic'), $new_name);


		DB::table('users')->insert(
    		[
    		 'first_name'=> $fname,
    		 'last_name'=> $lname,
    		 'email' => $email, 
    		 'password' => $enc,
    		 'address' => $address,
    		 'city'=> $city,
    		 'country'=> $country,
    		 'zip_code'=> $zip_code,
    		 'profile_pic' => $new_name
    		]);


		return back()->with('success', 'Successfully Registered');


	}







}