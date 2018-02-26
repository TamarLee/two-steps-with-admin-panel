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

Route::get('/', 'MainController@showAll');

Auth::routes();


Route::resource('tags', 'Admin\TagsController');
Route::resource('admin', 'Admin\TagsController');
Route::resource('recepies', 'Admin\RecepiesController');
Route::get('post/{id}', 'MainController@showPost');
