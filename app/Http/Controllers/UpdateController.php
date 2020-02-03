<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class UpdateController extends Controller
{
	

	public function update(request $request)
	{
		$request->validate([
   			'username'=>'required',
   			'lastname'=>'required',
   			'email'=>'required | email',
   			'address'=>'required',
   			'city'=>'required | regex:/[a-zA-z]/ | alpha',
   			'country'=>'required',
   			'zip_code'=>'required | max:6 | min:6',
   		]);

		$id=$request->input('id');
		$fname=$request->input('username');
		$lname=$request->input('lastname');
		$email=$request->input('email');
		$address=$request->input('address');
		$city=$request->input('city');
		$country=$request->input('country');
		$zip_code=$request->input('zip_code');

		DB::table('users')
            ->where('u_id', $id)
            ->update([
            			'first_name'=> $fname,
			    		'last_name'=> $lname,
			    		'email' => $email,
			    		'address' => $address,
			    		'city'=> $city,
			    		'country'=> $country,
			    		'zip_code'=> $zip_code]
		);

		return back()->with('success', 'Updated Successfully');
	}
	

	
}