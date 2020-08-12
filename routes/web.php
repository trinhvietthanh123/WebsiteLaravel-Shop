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
//frontend
Route::get('/','HomeController@index');
Route::get('/trang-chu','HomeController@index');


//Back-end
Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::get('/logout','AdminController@log_out');
Route::post('/admin_dashboard','AdminController@dashboard');

//Hide product and non hide
Route::get('/inactive-category-product/{category_product_id}','CategoryProduct@inactive_category_product');
Route::get('/active-category-product/{category_product_id}','CategoryProduct@active_category_product');

//Category Product
Route::get('/add-category','CategoryProduct@add_category_product');
Route::get('/all-category','CategoryProduct@all_category_product');
Route::post('/save-category-product','CategoryProduct@save_category_product');
Route::get('/edit-category/{category_product_id}','CategoryProduct@edit_category_product');
Route::get('/delete-category/{category_product_id}','CategoryProduct@delete_category_product');
Route::post('/update-category-product/{category_product_id}','CategoryProduct@update_category_product');
//Author Product
Route::get('/add-author','AuthorProduct@add_author_product');
Route::get('/all-author','AuthorProduct@all_author_product');
Route::post('/save-author-product','AuthorProduct@save_author_product');
Route::get('/edit-author/{author_id}','AuthorProduct@edit_author_product');
Route::get('/delete-author/{author_id}','AuthorProduct@delete_author_product');
Route::post('/update-author-product/{author_id}','AuthorProduct@update_author_product');
//Product
Route::get('/add-product','Product@add_product');
Route::get('/all-product','Product@all_product');
Route::post('/save-product','Product@save_product');
Route::get('/edit-product/{product_id}','Product@edit_product');
Route::get('/delete-product/{product_id}','Product@delete_product');
Route::post('/update-product/{product_id}','Product@update_product');
Route::get('/inactive-product/{product_id}','Product@inactive_product');
Route::get('/active-product/{product_id}','Product@active_product');