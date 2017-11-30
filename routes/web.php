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

Route::get('/', 'FrontHomeController@index');

    Route::get('desktop', function (){
        return view( 'desktop');
    });
    Route::get('laptop', function (){
        return view( 'laptop');
    });
    Route::get('peripherique', function (){
        return view( 'Front/peripherique');
    });

Auth::routes();


Route::get('user-index','UserController@index')->name('user-index');
Route::get('user/{user}/destroy','UserController@destroyForm')->name('user-destroy');



Route::get('upDateRole',['uses'=>'UserController@upDateRole','as'=>'upDateRole']);
Route::resource('user', 'UserController');
Route::resource('product', 'ProductController');
Route::resource('marque', 'MarqueController');
Route::resource('type', 'TypeController');
Route::resource('desktop', 'DesktopController');
Route::resource('laptop', 'LaptopController');
Route::resource('order', 'OrderController');
Route::resource('orderline', 'OrderlineController');
Route::resource('mouse', 'MouseController');
Route::resource('peripherique', 'PeripheriqueController');
Route::resource('screen', 'ScreenController');
Route::resource('pad', 'PadController');


Route::get('desktop', 'DesktopController@index')->name('desktop');
Route::get('laptop', 'LaptopController@index')->name('laptop');
Route::get('peripherique', 'PeripheriqueController@index')->name('peripherique');

/**Admin**/

Route::group(['middleware'=>['admin']],function(){
    Route::get('user-index','UserController@index')->name('user-index');
    Route::get('product-create','ProductController@create')->name('product-create');
    Route::get('product','ProductController@index')->name('product');
    Route::get('desktop-create','DesktopController@create')->name('desktop-create');
    Route::get('AdminHome','HomeController@index');
});