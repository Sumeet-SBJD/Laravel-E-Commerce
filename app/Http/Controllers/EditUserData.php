<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserListModel;

class EditUserData extends Controller
{
    public function edit_record($id)
    {	
    	
    	$userdata= DB::table('users')->where('u_id',$id)->get();
    	return view('Admin/edit',['data'=>$userdata]);
    }

    public function delete_record($id)
    {	
    	
    	DB::table('users')->where('u_id',$id)->delete();
    	
    }

    function delete_product($id)
    {
       DB::table('product_list')->where('id',$id)->delete();
    }

}
