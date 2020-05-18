<?php

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

Route::get('category','CategoryController@index');
Route::get('category/{id}', 'TaskController@index');
Route::get('category/add', 'CategoryController@add');
Route::post('category/add', 'CategoryController@create');
Route::post('category/update', 'CategoryController@update');
Route::get('category/del', 'CategoryController@delete');
Route::post('category/del', 'CategoryController@remove');

Route::post('task/create', 'TaskController@create');
Route::get('task/edit' ,'TaskController@edit');
Route::post('task/edit', 'TaskController@update');
Route::post('task/remove', 'TaskController@remove');


