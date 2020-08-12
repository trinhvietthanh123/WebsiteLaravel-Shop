<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class AuthorProduct extends Controller
{
        public function AuthLogin(){
            $admin_id = Session::get('admin_id');
            if($admin_id){
                return Redirect::to('dashboard');
            }else{
                return Redirect::to('admin')->send();
            }
        }
        public function add_author_product(){
            $this->AuthLogin();
            return view('admin.add_author');
        }
        public function all_author_product(){
            $this->AuthLogin();
            
            $all_author_name = DB::table('tbl_author_product')->get();
            $manager_author_product  = view('admin.all_author')->with('all_author',$all_author_name);
            return view('admin_layout')->with('admin.all_author', $manager_author_product);
    
        }
        public function save_author_product(Request $request){
            $this->AuthLogin();
            $data= array();
            $data['author_name']= $request->author_name;
            $data['Books_By_Author']= $request->Books_By_Author;
            DB::table('tbl_author_product')->insert($data);
            Session::put('message','Thêm danh tác giả thành công');
            return Redirect::to('add-author');
        }
     
        
        public function edit_author_product($author_id){
            $edit_author_name=DB::table('tbl_author_product')->where('author_id',$author_id)->get();
            $manager_author_name  = view('admin.edit_author')->with('edit_author',$edit_author_name);
            return view('admin_layout')->with('admin.edit_author', $manager_author_name);
        }
        public function update_author_product(Request $request,$author_product_id ){
            $data=array();
            $data['author_name']= $request->author_name;
            $data['author_desc']= $request->Books_By_Author;
            DB::table('tbl_author_product')->where('author_id',$author_id)->update($data);
            Session::put('message','Cập nhật sản phẩm thành công');
            return Redirect::to('add-author');
        }
        public function delete_author_product($author_id ){
           
            DB::table('tbl_author_product')->where('author_id',$author_id)->delete();
            Session::put('message','Xóa sản phẩm thành công');
            return Redirect::to('all-author');
        }
}
    
