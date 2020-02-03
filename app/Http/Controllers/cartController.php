<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product_list;
use Cart;

class cartController extends Controller
{
   public function Add_to_cart(request $req)
   {
   		$productId = $req->productId;

   		$cartData = Product_list::where('id',$productId)->first();

   	   Cart::add([
   				'id' => $productId,
   				'image' => $cartData->product_image,
   				'name' => $cartData->product_title,
   				'description' => $cartData->product_desc,
   				'price' => $cartData->price,
   				'qty' => $req->qty
   		]);
   		
         
         
   		
   }

   public function show_cart()
   {
   		$cartProducts = Cart::getContent();
         $total = Cart::gettotal();
         $qty = Cart::getTotalQuantity();

   		return view('Front.cart.cart',compact('cartProducts','total','qty'));
   }
   public function clear_cart($id)
   {
   		Cart::remove($id);
   		return redirect('/show_cart');
   }

}
