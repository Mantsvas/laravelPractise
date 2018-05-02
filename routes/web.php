<?php

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('kontaktai');

// Route::resource('product','ProductController@main');
Route::get('/','ProductController@main')->name('main.page');
Route::get('/products','ProductController@index')->name('products.page');
Route::get('/products/{id}','ProductController@show')->name('product.page');
Route::get('/companies','CompanyController@index')->name('companies.page');
Route::get('/categories','CategoryController@index')->name('categories.page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');