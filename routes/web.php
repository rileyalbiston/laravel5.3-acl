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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin', [
	'uses' => 'AdminController@index',
	'middleware' => 'roles',
	'roles' => 'admin'
]);

Route::get('/user', [
	'uses' => 'UserController@index',
	'middleware' => 'roles',
	'roles' => ['user', 'admin']
]);
