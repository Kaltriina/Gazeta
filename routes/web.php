<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



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
Route::get('users/{id}/show', 'UserController@show');

Route::get('posts', 'PostController@index');
Route::get('posts/index','PostController@index');
Route::get('posts/create','PostController@create');
Route::post('posts/store','PostController@store');
Route::post('posts/{id}/update', 'PostController@update')->name('postController.update');
Route::get('posts/{id}/show','PostController@show');
Route::get('posts/{id}/edit', 'PostController@edit');
Route::post('posts/{id}/destroy', 'PostController@destroy');

Route::get('category', 'CategoryController@index');
Route::get('category/index', 'CategoryController@index');
Route::get('category', 'CategoryController@index');