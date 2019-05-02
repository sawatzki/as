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

#contacts
Route::get('/contacts/details', 'ContactsController@detailsContacts')->name('contact_details');
Route::post('/contacts/insert', 'ContactsController@insertContacts')->name('contact_insert');
Route::get('/contacts/show', 'ContactsController@showContacts')->name('contacts_show');

#users
Route::get('/users/roles', 'UsersController@showRoles')->name('users_roles');
Route::get('/users/{user}', 'UsersController@showDetails')->name('user_details');
Route::get('/users', 'UsersController@showAll')->name('users_show');

#home
Route::get('/home', 'HomeController@index')->name('home');