<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//<<<<<<<>>>>Admin Section Routing <<<<>>>>>>>> ///

Route::post('/product', 'Add_product@insert_product');
Route::post('/add_user', 'RegsController@add_users');
Route::post('/update', 'UpdateController@update');
Route::get('/admin','AdminController@admin_login');

Route::post('/dashboard','AdminController@index')->name('Admin-dashboard');
Route::get('/dashboard','AdminController@index')->name('Admin-dashboard');

// ----- static page ----- //
Route::view('/create_user','Admin/user')->name('user');
Route::view('/addproduct','Admin/addproduct')->name('addproduct');
// --------Static Ends here------------  //

//----Admin fetch data from database ----//
Route::get('/user_list','Fetch_Data_Controller@user_list');
Route::get('/products_table','Fetch_Data_Controller@product_list');
Route::get('/edit_record/{id}' ,'EditUserData@edit_record');
Route::get('/delete_record/{id}', 'EditUserData@delete_record');

//<<<<<>>>>> Admin section ends here <<<<>>>>.//

//<<<<<>>>>> Product Edit Section Starts <<<<>>>>.//
Route::get('/delete_product/{id}' ,'EditUserData@delete_product');
//<<<<<>>>>> Product Edit Ends Section Starts <<<<>>>>.//

Route::get('/homes','Fetch_Data_Controller@show_all_product');

///<<<>>> My own Testing Routing <<<<>>>>> //

/* Shopping Cart  */
Route::post('/Add_to_cart','cartController@Add_to_cart')->name('Add_to_cart');
Route::get('/show_cart','cartController@show_cart')->name('show_cart');
Route::get('/clear_cart/{id}','cartController@clear_cart');

/* End Shopping Cart  */
Route::get('/',function(){
	return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
