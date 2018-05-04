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
Route::get('/daug',function(){
  $company = App\Company::find(4);
  foreach ($company->products as $product) {

  echo $product->name;
}
});

Route::get('/products','ProductController@index')->name('products.page');
Route::get('/products/create','ProductController@create')->name('createProduct.page')->middleware('admin');
Route::post('/products','ProductController@store')->name('storeProduct.page')->middleware('admin');
Route::get('/products/{product}','ProductController@show')->name('product.page');
Route::get('/editProduct/{product}','ProductController@edit')->name('editProduct.page')->middleware('admin');
Route::put('/updateProduct/{product}','ProductController@update')->name('updateProduct.page')->middleware('admin');
Route::delete('/deleteProduct/{product}','ProductController@delete')->name('deleteProduct.page')->middleware('admin');

Route::get('/companies','CompanyController@index')->name('companies.page');
Route::get('/companies/create','CompanyController@create')->name('createCompany.page')->middleware('admin');
Route::post('/companies','CompanyController@store')->name('storeCompany.page')->middleware('admin');
Route::get('/companies/{company}','CompanyController@show')->name('company.page');
Route::get('companies/{company}/edit','CompanyController@edit')->name('editCompany.page');
Route::put('companies/{company}','CompanyController@update')->name('updateCompany.page');

Route::delete('/deleteCompany/{company}','CompanyController@delete')->name('deleteCompany.page')->middleware('admin');


Route::get('/categories','CategoryController@index')->name('categories.page');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
