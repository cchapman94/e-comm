<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function index() {
    	$data= Product::all();
    	return view('product', ['products'=>$data]);
    	//return Product::all();
    	//return "welcome to product page"; 

    }
    function detail($id) {
    	//return Product::find($id);
    	$data= Product::find($id);
    	return view('detail', ['product'=>$data]);
    }
}
