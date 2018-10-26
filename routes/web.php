<?php

use App\Http\Controllers\UserController;



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

Route::get('users', 'UserController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('users/index', 'UserController@index');

Route::get('users/create', 'UserController@create');
Route::post('users/store', 'UserController@store');


Route::get('users/{id}/edit', 'UserController@edit');
Route::post('users/{id}/update', 'UserController@update')->name('userController.update');
Route::post('users/{id}/delete', 'UserController@delete')->name('userController.delete');