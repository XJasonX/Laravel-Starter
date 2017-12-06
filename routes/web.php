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

Route::get('/whatever', function () {
    return "who care?";
});

Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');
Route::get('posting/{id}', 'PostingsController@show');
Route::resource('profile', 'CompanyProfileController');
Route::resource('post', 'JobPostController');

Route::get('/places2', function () {
    return view('pages/places2');
});

Route::get('users', 'UsersController@index');
Route::get('users/create', 'UsersController@create')->name('createuser');
Route::get('users/{id}', 'UsersController@show')->name('showuser');
Route::post('users', 'UsersController@store')->name('storeuser');
