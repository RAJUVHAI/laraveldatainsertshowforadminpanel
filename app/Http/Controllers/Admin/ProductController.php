<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function prductform(){
        $data['category'] =  DB::table('category_tb')
                            ->select('c_name','id')
                            ->where('category','!=',0)
                            ->where('status',1)
                            ->get(); 


        return view('Admin/addproduct',$data);
    }
    public function addProduct(Request $request){
        $validated = $request->validate([
            'p_name'            => 'required|max:255',
            'short_description' => 'required|max:150',
            'long_description'  => 'required|max:500',
            'p_category'        => 'required|numeric',
            'image'             => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'quantity'          => 'required|max:500',
            'b_price'           => 'required|numeric',
            'mrp_price'         => 'required|numeric',
            's_price'           => 'required|numeric'
        ]);
        $image_name = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/product-image',$image_name);
        
        $data = array(
            'p_name'            => $request->input('p_name'),
            'short_description' =>  $request->input('short_description'),
            'long_description'  => $request->input('long_description'),
            'p_category'        => $request->input('p_category'),
            'image'             => $image_name,
            'quantity'          => $request->input('quantity'),
            'b_price'           => $request->input('b_price'),
            'mrp_price'         => $request->input('mrp_price'),
            's_price'           => $request->input('s_price')
        );
       $insert = DB::table('product_tb')->insert($data);
       if($insert){
            return redirect('addproduct')->with('status', 'Successfully Added');
       }else{
            return redirect('addproduct')->with('error', 'Something Went Wrong');
       }

        // $input = $request -> all();
        // echo '<pre>'; 
        // print_r($input);
        // die();
       
        // print_r(request->all());
        // die();

    
    }

    // public function manage_product(){
    //     $data['product'] = DB::table('product_tb')
    //                             ->join('category_tb', 'category_tb.id', '=', 'product_tb.p_category')
    //                             ->select('product_tb.*', 'category_tb.id', 'category_tb.c_name')
    //                             ->orderBy('product_tb.p_category','ASC')
    //                             ->get();
        
    //     return view('Admin/manageproduct',$data);
    // }
   
}
