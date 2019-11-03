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





#notes
/*Route::group(['namespace' => 'Blog', 'prefix' => 'blog'],function (){
    Route::resource('posts', 'postcontroller')->names('blog.posts');
});*/
Route::group(['prefix' => 'note'], function (){
    Route::resource('notes', 'NotesController')->names('notes');
});

#contacts
Route::get('/contact/{contact}/form', 'ContactsController@updateShowForm')->name('contact_update_form');
Route::get('/contacts/show', 'ContactsController@contactsShow')->name('contacts_show');
Route::post('/contact/insert', 'ContactsController@contactInsert')->name('contact_insert');
Route::get('/contact/{contact}', 'ContactsController@contactDetails')->name('contact_details');
Route::get('/contact/{contact}/update-form', 'ContactsController@showUpdate')->name('contact_update_form');
Route::patch('/contact/{contact}/update', 'ContactsController@contactUpdate')->name('contact_update');
#Route::patch('/contact/{contact}/update-form', 'ContactsController@contactUpdate')->name('contact_update');
Route::delete('/contact/{contact}', 'ContactsController@contactDelete')->name('contact_delete');

#users
Route::get('/users/roles', 'UsersController@showRoles')->name('users_roles');
Route::get('/users/{user}', 'UsersController@showDetails')->name('user_details');
Route::get('/users', 'UsersController@showAll')->name('users_show');

#home
Route::get('/home', 'HomeController@index')->name('home');
