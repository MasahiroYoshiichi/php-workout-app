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
Route::group(["middleware" => "auth"],function() {
Route::get('selection', 'MainController@selection');
Route::get('information', 'MainController@information');
Route::post('information', 'MainController@profile_create');
Route::get('record', 'MainController@record');
Route::get('menu', 'MainController@menu');
Route::get('recovery', 'MainController@recovery');
Route::get('post', 'MainController@post'); 
Route::get('management', 'MainController@management');
Route::get('record', 'CalendarController@record');
Route::get('athlete', 'MainController@athlete');
Route::get('exercise','MainController@exercise');
Route::get('fitness', 'MainController@fitness');
Route::post('athlete','MainController@training_register');
Route::post('athlete', 'MainController@various_training_register');
Route::post('exercise','MainController@training_register');
Route::post('fitness','MainController@training_register');
Route::get('chest', 'Ajax\MenuController@chest');
Route::get('back', 'Ajax\MenuController@back');
Route::get('sholuder', 'Ajax\MenuController@sholuder');
Route::get('bicelder', 'Ajax\MenuController@bicelder');
Route::get('triceps', 'Ajax\MenuController@triceps');
Route::get('leg', 'Ajax\MenuController@leg');
Route::get('hip', 'Ajax\MenuController@hip');
Route::get('body', 'Ajax\MenuController@body');
Route::get('ath', 'Ajax\MenuController@ath');
Route::get('exe', 'Ajax\MenuController@exe');
Route::get('fit', 'Ajax\MenuController@fit');
Route::get('arginine', 'Ajax\RecoveryController@arginine');
Route::get('bcaa', 'Ajax\RecoveryController@bcaa');
Route::get('citrulline', 'Ajax\RecoveryController@citrulline');
Route::get('cla', 'Ajax\RecoveryController@cla');
Route::get('creatine', 'Ajax\RecoveryController@creatine');
Route::get('dha', 'Ajax\RecoveryController@dha');
Route::get('eaa', 'Ajax\RecoveryController@eaa');
Route::get('epa', 'Ajax\RecoveryController@epa');
Route::get('glutamine', 'Ajax\RecoveryController@glutamine');
Route::get('hmb', 'Ajax\RecoveryController@hmb');
Route::get('omega', 'Ajax\RecoveryController@omega');
Route::get('vitaminA', 'Ajax\RecoveryController@vitaminA');
Route::get('vitaminB1', 'Ajax\RecoveryController@vitaminB1');
Route::get('vitaminB6', 'Ajax\RecoveryController@vitaminB6');
Route::get('vitaminB12', 'Ajax\RecoveryController@vitaminB12');
Route::get('vitaminC', 'Ajax\RecoveryController@vitaminC');
Route::get('vitaminD', 'Ajax\RecoveryController@vitaminD');
Route::get('vitaminE', 'Ajax\RecoveryController@vitaminE');
Route::get('vitaminK', 'Ajax\RecoveryController@vitaminK');
Route::get('whey', 'Ajax\RecoveryController@whey');
Route::get('gazein', 'Ajax\RecoveryController@gazein');
Route::get('carbohydrates', 'Ajax\RecoveryController@carbohydrates');
Route::get('carnitine', 'Ajax\RecoveryController@carnitine');
Route::get('ornithine', 'Ajax\RecoveryController@ornithine');
Route::get('alanine', 'Ajax\RecoveryController@alanine');
Route::get('tyrosine', 'Ajax\RecoveryController@tyrosine');
Route::get('agmatin', 'Ajax\RecoveryController@agmatin');
Route::get('biotin', 'Ajax\RecoveryController@biotin');
Route::get('calcium', 'Ajax\RecoveryController@calcium');
Route::get('caroten', 'Ajax\RecoveryController@caroten');
Route::get('citric', 'Ajax\RecoveryController@citric');
Route::get('copper', 'Ajax\RecoveryController@copper');
Route::get('folic', 'Ajax\RecoveryController@folic');
Route::get('iron', 'Ajax\RecoveryController@iron');
Route::get('kuromu', 'Ajax\RecoveryController@kuromu');
Route::get('line', 'Ajax\RecoveryController@line');
Route::get('lipo', 'Ajax\RecoveryController@lipo');
Route::get('lutein', 'Ajax\RecoveryController@lutein');
Route::get('lycopene', 'Ajax\RecoveryController@lycopene');
Route::get('magnesium', 'Ajax\RecoveryController@magnesium');
Route::get('mangan', 'Ajax\RecoveryController@mangan');
Route::get('moribuden', 'Ajax\RecoveryController@moribuden');
Route::get('niacin', 'Ajax\RecoveryController@niacin');
Route::get('pantothenic', 'Ajax\RecoveryController@pantothenic');
Route::get('potassium', 'Ajax\RecoveryController@potassium');
Route::get('polyphenol', 'Ajax\RecoveryController@polyphenol');
Route::get('probiotics', 'Ajax\RecoveryController@probiotics');
Route::get('seren', 'Ajax\RecoveryController@seren');
Route::get('sodium', 'Ajax\RecoveryController@sodium');
Route::get('soy', 'Ajax\RecoveryController@soy');
Route::get('tyrosine', 'Ajax\RecoveryController@tyrosine');
Route::get('youso', 'Ajax\RecoveryController@youso');
Route::get('zinc', 'Ajax\RecoveryController@zinc');
Route::get('management_chest', 'Ajax\ManagementController@chest');
Route::get('management_back', 'Ajax\ManagementController@back');
Route::get('management_sholuder', 'Ajax\ManagementController@sholuder');
Route::get('management_bicelder', 'Ajax\ManagementController@bicelder');
Route::get('management_triceps', 'Ajax\ManagementController@triceps');
Route::get('management_leg', 'Ajax\ManagementController@leg');
Route::get('management_hip', 'Ajax\ManagementController@hip');
Route::get('management_body', 'Ajax\ManagementController@body');
Route::get('day/test', 'Ajax\CarenderController@day_test');
Route::get('composition', 'Ajax\ManagementController@composition');
});
Route::get('create', 'Admin\MainController@create');
Route::get('index', 'Admin\MainController@index');
Route::get('edit', 'Admin\MainController@edit');

Auth::routes();
Route::get('/home', 'HomeController@index');


