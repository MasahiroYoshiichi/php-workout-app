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

Route::get('top','HomeController@top');
Route::get('login','HomeController@login');
Route::get('register','HomeController@register');
Route::post('register', 'HomeController@register');
Route::get('introduction', 'HomeController@introduction');
Route::get('event', 'HomeController@event');
Route::get('community', 'HomeController@community');

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