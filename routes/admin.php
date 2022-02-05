<?php

use Illuminate\Support\Facades\Route;
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

route::get('/neworder','App\Http\Controllers\Admin\OrderController@index')->name('neworder');

route::get('/manageorder','App\Http\Controllers\Admin\OrderController@manage')->name('manageorder');


// addproducts routes start
   route::get('/addproduct','App\Http\Controllers\Admin\OrderController@productform')->name('addproduct');   //when click addproduct sidemenu it redirect to addproduct page.
   route::get('/addproduct','App\Http\Controllers\Admin\ProductController@index')->name('addproduct');    //for the redirect to addproductpage
   route::post('/addproduct','App\Http\Controllers\Admin\ProductController@addProduct')->name('addproduct'); //for a db connect &request check
// addproduct routes end


route::get('/manageproduct','App\Http\Controllers\Admin\OrderController@manageproduct')->name('manageproduct');

//catagory add start
route::get('/addcatagory','App\Http\Controllers\Admin\OrderController@addcatagory')->name('addcatagory');      //when click addcatagory sidebarmeny it redirect to the add catagpry page.
route::post('/addcatagory','App\Http\Controllers\Admin\CatagoryController@addcatagory')->name('addcatagory');   //for the redirect to addcatagory page
route::post('/addcatagory','App\Http\Controllers\Admin\CatagoryController@postCatagory')->name('addcatagory');  //for a request & connect db 
//catagory add end

route::get('/managecatagory','App\Http\Controllers\Admin\OrderController@managecatagory')->name('managecatagory');

route::get('/addorder','App\Http\Controllers\Admin\OrderController@ordertable')->name('ordertable');

route::get('/logout','App\Http\Controllers\Admin\DashboardController@logout')->name('logout');
