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

//Route::get('/', function () {
  //  return view('welcome');
//});
//Route::get('/','UserController@index');
//Route::get('/test1','UserCo	ntroller@test1');
Route::get('/',['as' => 'EMPLOYEES','uses' => 'UserController@EMPLOYEES']);
//Route::post('/{EmployeeCode?}','UserController@ViewOneUser');
//Route::get('/','UserController@index');
Route::get('/',['as' => 'login','uses' => 'UserController@loginUser']);