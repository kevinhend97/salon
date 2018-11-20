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

Route::get('/home', 'HomeController@index')->name('home');

//bagian profil dan ubah password
Route::get('edit/{profile}/profile','ProfileController@edit')->name('profile.data');
Route::post('edit/{profile}/update','ProfileController@update')->name('profile.update_data');

//user controller
Route::resource('users', 'UserController');
Route::get('users/data','UserController@listData')->name('user.data');