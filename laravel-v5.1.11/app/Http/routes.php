<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::get('add','CurdController@Index');
//Route::post('add_pro','CurdController@Add');
//Route::get('select','CurdController@Select');
//Route::get('del','CurdController@Del');
//Route::get('up','CurdController@Up');
//Route::post('update','CurdController@Update');

Route::get('site','SiteController@Index');
Route::post('site_add','SiteController@Site_add');
Route::get('site_show','SiteController@Site_show');
Route::get('site_del','SiteController@Site_del');
Route::get('site_up','SiteController@Site_up');
Route::post('site_update','SiteController@Site_update');




Route::get('index','IndexController@Index');



















