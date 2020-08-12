<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{ public function index(){
    $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
    $author = DB::table('tbl_author_product')->orderby('author_id','desc')->get();
    /*$all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_author_product','tbl_author_product.author_id','=','tbl_product.author_id')
        ->orderby('tbl_product.product_id','desc')->get();*/
    $all_product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->limit(6)->get();
    $product = DB::table('tbl_product')->where('product_status','1')->orderby('product_id','desc')->get();
    return view('pages.home')->with('category',$cate_product)->with('author',$author)->with('product',$all_product)->with('l_product',$product);
}
   
}
