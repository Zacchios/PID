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
        return view('welcome');
    });
    Route::get('desktop', function (){
        return view( 'desktop');
    });
    Route::get('laptop', function (){
        return view( 'laptop');
    });
    Route::get('peripherique', function (){
        return view( 'peripherique');
    });

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
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

Route::get('/home', 'HomeController@index')->name('welcome');
Route::get('desktop', 'DesktopController@index')->name('desktop');
Route::get('laptop', 'LaptopController@index')->name('laptop');
Route::get('peripherique', 'PeripheriqueController@index')->name('peripherique');

/**Admin**/

Route::group(['middleware'=>['admin']],function(){
    Route::get('user-index','UserController@index')->name('user-index');
});