<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class CheckoutController extends Controller
{
    public function login_checkout(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')->orderby('category_id','desc')->get();
        $author = DB::table('tbl_author_product')->orderby('author_id','desc')->get();
        return view('pages.login_checkout')->with('category',$cate_product)->with('author',$author);
    }
}
