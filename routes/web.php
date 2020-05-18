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



Route::get('task', 'TaskController@index');

Route::get('task/add', 'TaskController@add');
Route::post('task/add', 'TaskController@create');

Route::get('category','CategoryController@index');

/*項目を追加する時*/
Route::get('category/add', 'CategoryController@add');
Route::post('category/add', 'CategoryController@create');

/*項目を削除する時*/
Route::get('category/del', 'CategoryController@delete');
Route::post('category/del', 'CategoryController@remove');

/*項目名を編集*/
Route::get('category/edit', 'CategoryController@edit');
Route::post('category/edit', 'CategoryController@update');