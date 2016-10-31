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
Route::post('/lien-he', 'ContactController@create');

Route::get('/admincp', 'AdminController@index');
Route::get('/admincp/user', 'AdminController@indexUser');

Route::get('/admincp/user/addnew', 'UserController@create');
Route::post('/admincp/user/addnew', 'UserController@store');

Route::get('/admincp/user/edit/{id}', 'UserController@show');
Route::post('/admincp/user/edit/{id}', 'UserController@edit');
Route::get('/admincp/user/delete/{id}', 'UserController@showDelete');
Route::post('/admincp/user/delete/{id}', 'UserController@destroy');

Route::get('/admincp/khoa-hoc', 'ClassController@indexAdmin');
Route::get('/admincp/khoa-hoc/addnew', 'ClassController@create');
Route::post('/admincp/khoa-hoc/addnew', 'ClassController@store');
Route::get('/admincp/khoa-hoc/edit/{id}', 'ClassController@edit');
Route::post('/admincp/khoa-hoc/edit/{id}', 'ClassController@update');
Route::get('/admincp/khoa-hoc/delete/{id}', 'ClassController@delete');
Route::post('/admincp/khoa-hoc/delete/{id}', 'ClassController@destroy');




Route::get('/admincp/contact', 'ContactController@index');
Route::get('/admincp/contact/delete/{id}', 'ContactController@delete');
Route::post('/admincp/contact/delete/{id}', 'ContactController@delete');

Route::get('/admincp', 'AdminController@index');
Route::group(['middleware' => ['isAdmin']], function () {

});