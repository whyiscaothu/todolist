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
Route::group(['prefix'=>'admin', 'namespace'=>'admin'], function (){
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::get('/show-list', 'HomeController@show')->name('admin.show');

    Route::post('/post-todo-name', 'HomeController@insert_to_todo_list');
});

