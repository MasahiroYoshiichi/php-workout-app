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

Route::get('top','TopController@top');
Route::get('app_login','TopController@app_login');
Route::get('app_register','TopController@app_register');
Route::post('app_register', 'TopController@app_add');
Route::get('introduction', 'TopController@introduction');
Route::get('event', 'TopController@event');
Route::get('community', 'TopController@community');

Route::get('selection', 'MainController@selection');
route::get('information', 'MainController@information');
Route::get('record', 'MainController@record');
Route::get('menu', 'MainController@menu');
Route::get('recovery', 'MainController@recovery');
Route::get('post', 'MainController@post'); 
Route::get('management', 'MainController@management');

Route::get('create', 'Admin\MainController@create');
Route::get('index', 'Admin\MainController@index');
Route::get('edit', 'Admin\MainController@edit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
