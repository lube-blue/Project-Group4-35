<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Product;
use App\Category;

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

Route::get('/', function () {
    return view('welcome')
    ->with('product',Product::paginate(3))
    ->with('category',Category::all());
});

//ค้นหาข้อมูลแบบเลือกประเภทสินค้า
Route::get('/product/category/{id}','Admin\ProductController@findCategory');

//ค้นหาข้อมูลด้วยชื่อสินค้า
Route::get('/product/search','ProductController@searchProduct');

//ค้นหาข้อมูลด้วยราคา
Route::get('/product/pricrenge','ProductController@searchproductprice');




Auth::routes();

Route::middleware(['auth','verifyisadmin'])->group(function(){
    //route admin
    Route::get('/admin/index','Admin\AdminController@index')->name('index');

    //route category
    Route::get('/admin/category/index','Admin\CategoryController@index')->name('category');
    Route::post('/admin/category/create','Admin\CategoryController@create')->name('create');
    Route::get('/admin/category/Edit/{id}','Admin\CategoryController@edit');
    Route::post('/admin/category/Update/{id}','Admin\CategoryController@update');
    Route::get('/admin/category/Delete/{id}','Admin\CategoryController@delete');

    //route product
    Route::get('/admin/product/index','Admin\ProductController@index')->name('product');
    Route::post('/admin/product/create','Admin\ProductController@create')->name('product.c');
    Route::get('/admin/product/edit/{id}','Admin\ProductController@edit');
    Route::post('/admin/product/update/{id}','Admin\ProductController@update');
    Route::get('/admin/product/delete/{id}','Admin\ProductController@delete');

    //route user
    Route::get('/admin/user/index','Admin\UserController@index')->name('user');
    Route::get('/admin/user/edit/{id}','Admin\UserController@edit');
    Route::post('/admin/user/update/{id}','Admin\UserController@update');
    Route::get('/admin/user/delete/{id}','Admin\UserController@delete');

    Route::get('/home', 'HomeController@index')->name('home');
});