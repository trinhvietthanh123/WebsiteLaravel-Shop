<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();
class CartController extends Controller
{
    public function save_cart(request $request){
        $productId = $request->product_hidden;
    	$quantity = $request->qty;
    	$product_info = DB::table('tbl_product')->where('product_id',$productId)->first(); 

        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = $product_info->product_price;
        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);
        // Cart::destroy();
        return Redirect::to('/show-cart');
       
    }
    public function show_cart(){

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $author_product = DB::table('tbl_author_product')->orderby('author_id','desc')->get(); 
        return view('pages.show_cart')->with('category',$cate_product)->with('author',$author_product);
    }
    public function delete_cart($rowID){
        Cart::update($rowID,0);
        return redirect('/show-cart');
    }
    public function update_cart(request $request){
        $rowID= $request->rowId_cart;
        $qty= $request->cart_quantity;
        Cart::update($rowID,$qty);
        return redirect('/show-cart');
    }
}