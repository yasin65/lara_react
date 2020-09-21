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

Route::get('/', 'HomeController@index');
Route::get('/example', 'HomeController@example')->name('example');
Route::get('/another', 'HomeController@another_page')->name('another_page');
Route::post('/submit', 'HomeController@submit')->name('submit');
Route::get('/edit{id}', 'HomeController@edit')->name('edit');
Route::get('/delete{id}', 'HomeController@delete')->name('delete');
Route::post('/update{id}', 'HomeController@update')->name('update');
Route::get('/all', 'HomeController@all')->name('all');


Route::get('/page', 'userController@page')->name('page');
Route::get('/contact', 'userController@contact')->name('contact');
Route::post('/submit1', 'userController@submit1')->name('submit1');

Route::get('/edity{id}', 'userController@edity');
Route::get('/deletey{id}', 'userController@deletey');












