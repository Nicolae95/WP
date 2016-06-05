<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/admin/product/new', 'ProductController@newProduct');
Route::get('/admin/products', 'ProductController@index');
Route::get('/admin/product/destroy/{id}', 'ProductController@destroy');
Route::post('/admin/product/save', 'ProductController@add');
Route::get('/admin/product/{id}/edit', 'ProductController@editProduct');
Route::post('/admin/product/update/{id}', 'ProductController@update');


Route::get('/admin/category/new', 'CategoryController@newCategory');
Route::get('/admin/categories', 'CategoryController@indexcat');
Route::get('/admin/category/destroy/{id}', 'CategoryController@destroycat');
Route::post('/admin/category/save', 'CategoryController@addcat');
Route::get('/category/{id}', 'CategoryController@category');

Route::get('/', 'MainController@index');



