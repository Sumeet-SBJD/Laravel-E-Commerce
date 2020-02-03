<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Fetch_Data_Controller extends Controller
{
   public function user_list()
   {

   		$data= DB::table('users')->paginate(10);

   		return view('Admin/user_table',['dat'=>$data]);

   }

   public function product_list(request $request)
   {

   	$data= DB::table('product_list')->paginate(8);

   	return view('Admin/product_table',['products'=>$data]);

   }

   public function show_all_product(request $request)
   {

         $new_products= DB::table('product_list')->paginate(12);
         
         return view('homepage',['products'=>$new_products]);

   }
 

}
 