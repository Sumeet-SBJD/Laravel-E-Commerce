<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Add_product extends Controller
{
    public function insert_product(request $request)
	{
		$request->validate(['product_title'=>'required']);
		$request->validate(['product_image'=>'required | ']);

		$p_title = $request->input('product_title');
		
		$p_desc = $request->input('product_desc');

		$price = $request->input('product_price');

	    $image = $request->file('product_image');

	    $new_name = $image->getClientOriginalName();

	    $destination = $image->move(public_path('Uploads/products_img'), $new_name);


	    

		DB::table('product_list')->insert(
	    ['product_title' => $p_title, 'product_image' => $new_name, 'product_desc' => $p_desc, 'price' => $price]
	    );

		return back()->with('success', 'Post Successfully Updated');
		
	}

	public function delete_product($id)
    {	
    	
    	$userdata= DB::table('product_list')->where('id',$id)->delete();
    	return back()->with('success','Product Deleted Succefully');
    }

	

}
