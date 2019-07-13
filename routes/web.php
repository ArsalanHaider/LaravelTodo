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


Route::get('Todou','todocontroller@index');

Route::get('Todou/{todo}','todocontroller@show');

Route::get('new-todo','todocontroller@create');

Route::post('store-todo','todocontroller@store');

Route::get('Todou/{todo}/edit','todocontroller@edit');

Route::post('Todou/{todo}/update-todo','todocontroller@update');

Route::get('Todou/{todo}/delete','todocontroller@destroy');

Route::get('Todou/{todo}/completed','todocontroller@completed');
