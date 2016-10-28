<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    $active = "active";
    return view('welcome', ['active_home'=>$active]);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/khoa-hoc', 'ClassController@index');
Route::get('/lien-he', 'ContactController@index');
Route::post('/lien-he', 'ContactController@create');