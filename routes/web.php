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

Route::group(["middleware" => "guest"], function() {
Route::get('top','TopController@top');
Route::get('introduction', 'TopController@introduction');
});

Route::get('event', 'TopController@event');
Route::get('community', 'TopController@community');

Route::group(["middleware" => "auth"],function() {
Route::get('selection', 'MainController@selection');
Route::get('information', 'MainController@information');
Route::get('record', 'MainController@record');
Route::get('menu', 'MainController@menu');
Route::get('recovery', 'MainController@recovery');
Route::get('post', 'MainController@post'); 
Route::get('management', 'MainController@management');
});

Route::get('create', 'Admin\MainController@create');
Route::get('index', 'Admin\MainController@index');
Route::get('edit', 'Admin\MainController@edit');

Auth::routes();
Route::get('/home', 'HomeController@index');



