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


 Route::get('/', 'WelcomeController@index');
 Route::get('/product/details/{id}/{name}', 'WelcomeController@product_details');


 /*cart*/
Route::post('/cart/add', 'CartController@addToCart');
Route::get('/cart/show', 'CartController@showCart');
Route::get('/cart/delete/{id}', 'CartController@deleteCartProduct');


Route::post('/product/review', 'WelcomeController@product_review');
Route::get('/product/view', 'WelcomeController@product_view');
Route::get('/product/{id}/supplier', 'WelcomeController@product_supplier')->name('product.supplier');


//admin links
Route::group(['middleware'=>'role:supplier'], function() {

 Route::get('/supplier/myDashboard', 'SupplierController@index');
Route::resource('product', 'ProductController');
});


Route::group(['middleware'=>'role:admin'], function() {

Route::get('/adminPage', 'AdminController@index');
Route::resource('role', 'RoleController');
Route::resource('category', 'CategoryController');
Route::get('roles/createRole', [
        'as' => 'createRole',
        'middleware'=>'role:admin',
        'uses' => 'RoleController@create']);

Route::get('roles/editRole', [
        'as' => 'editRole',
        'middleware'=>'role:admin',
        'uses' => 'RoleController@edit']);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
