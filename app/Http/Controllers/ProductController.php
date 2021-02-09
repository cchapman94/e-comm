<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Wishlist;
use Session;
use Illuminate\Support\Facades\DB;

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
    function search(Request $req) {
    	//return $req->input();
    	$data= Product::where('name', 'like','%'.$req->input('query').'%')->get();
    	return view('search', ['products'=>$data]);

    }
    function addToCart(Request $req) {
    	if($req->session()->has('user')) {
    		$cart= new Cart;
    		$cart->user_id= $req->session()->get('user')['id'];
    		$cart->product_id= $req->product_id;
    		$cart->save();
    		return redirect('/');

    	} else {
    		return redirect('/login');
    	}
    	
    }

    //Buy Now button on detail page: want add item to cart and redirect to ordernow page
     function buyNow(Request $req) {
        if($req->session()->has('user')) {
            $cart= new Cart;
            $cart->user_id= $req->session()->get('user')['id'];
            $cart->product_id= $req->product_id;
            $cart->save();
            return redirect('/ordernow');

        } else {
            return redirect('/login');
        }
        
}

    static function cartItem() {
    	$userId= Session::get('user')['id'];
    	return Cart::where('user_id', $userId)->count();

    }
    function cartList() {
    	//join cart and products tables from the db
    	$userId= Session::get('user')['id'];
    	$products= DB::table('cart')
    	->join('products', 'cart.product_id', '=', 'products.id')
    	->where('cart.user_id', $userId)
    	->select('products.*', 'cart.id as cart_id')
    	->get();

    	return view('cartlist', ['products'=>$products]);
    }

    function removeCart($id) {
    	Cart::destroy($id);
    	return redirect('cartlist');
    }
    function orderNow() {
    	$userId= Session::get('user')['id'];
    	$total= $products= DB::table('cart')
    	->join('products', 'cart.product_id', '=', 'products.id')
    	->where('cart.user_id', $userId)
    	->sum('products.price');

    	return view('ordernow', ['total'=>$total]);

    }
    function orderPlace(Request $req) {
    	$userId= Session::get('user')['id'];
    	$allCart= Cart::where('user_id', $userId)->get();
    	foreach($allCart as $cart) {
    		$order = new Order;
    		$order->product_id= $cart['product_id'];
    		$order->user_id= $cart['user_id'];
    		$order->status= "pending";
    		$order->payment_method= $req->payment;
    		$order->payment_status= "pending";
    		$order->address= $req->address;
    		$order->save();
    		Cart::where('user_id', $userId)->delete();

    	}
    	$req->input();
    	return redirect('/');

    }
    function myOrders() {
    	$userId= Session::get('user')['id'];
    	$orders= DB::table('orders')
    	->join('products', 'orders.product_id', '=', 'products.id')
    	->where('orders.user_id', $userId)
    	->get();

    	return view('myorders', ['orders'=>$orders]);
    }
    function addToWishlist(Request $req) {
        if($req->session()->has('user')) {
            $list= new Wishlist;
            $list->user_id= $req->session()->get('user')['id'];
            $list->product_id= $req->product_id;
            $list->save();
            return redirect('/');

        } else {
            return redirect('/login');
        } 
        
        
    }
    static function wishlistItem() {
        $userId= Session::get('user')['id'];
        return Wishlist::where('user_id', $userId)->count();

    }
    
     function wishList() {
        //join list and products tables from the db
        $userId= Session::get('user')['id'];
        $products= DB::table('list')
        ->join('products', 'list.product_id', '=', 'products.id')
        ->where('list.user_id', $userId)
        ->select('products.*', 'list.id as list_id')
        ->get();

        return view('wishlist', ['products'=>$products]); 
    }

    function removeList($id) {
        Wishlist::destroy($id);
        return redirect('wishlist');
    } 
   
}
