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

Route::get('/', 'DoctorController@index')->name('home');

Route::resource('users','UserController');

Route::resource('cme','CmeController');

Route::resource('roles','RoleController');

Route::resource('permissions','PermissionController');

Route::resource('doctors','DoctorController');

Route::get('doctorslist','DoctorController@showAll');

Route::get('/articles/exportCSV','DoctorController@exportCSV');