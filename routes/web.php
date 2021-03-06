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

Route::get('/', function () {
    return view('home');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/wel', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('admin')->group(function() {

    Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

    Route::resource('/categories', 'CategoryController');
    Route::resource('/products', 'ProductController');
    Route::resource('/brands', 'BrandController');


});
    
Route::prefix('user')->group(function() {

    Route::get('/home', 'HomeController@index')->name('home');
//    Route::get('/products', 'ProductController@index')->name('all.products');
//    Route::get('/garage', 'UserProductController@index')->name('garage');
//    Route::resource('/products', 'ProductController');
//    Route::post('/products/create', 'ProductController@store')->name('store.product');


});


