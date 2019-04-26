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

Route::get('/users/roles', 'UsersController@showRoles')->name('users_roles');
Route::get('/users/{user}', 'UsersController@showDetails')->name('user_details');
Route::get('/users', 'UsersController@showAll')->name('users_show');
Route::get('/home', 'HomeController@index')->name('home');