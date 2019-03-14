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

// Homepage

Route::get('/', function () {
    return view('homepage');
});

// about

Route::get('/about', function () {
    return view('about');
});

// contact

Route::get('/contact', function(){
	return view('contact');
});

// Gallery

Route::get('gallery', 'GaleriController@pageGaleri')->name('page.galeri');

// Reservation

Route::get('/reservation', 'ReservationController@index')->name('page.reservation');

// service

Route::get('/service', function(){
	return view('service');
});

// suscribe

Route::post('/suscribe', 'HomepageController@emailSuscribe')->name('suscribe.store');

Auth::routes();

// Bagian Backed Salon Violet

Route::group(['middleware' => ['auth']], function(){
	Route::get('/home', 'HomeController@index')->name('home');

	//bagian profil dan ubah password
	Route::get('edit/{profile}/profile','ProfileController@edit')->name('profile.data');
	Route::post('edit/{profile}/update','ProfileController@update')->name('profile.update_data');

	//user controller
	Route::get('users/data','UserController@listData')->name('user.data');
	Route::resource('users', 'UserController');

	//layanan controller
	Route::get('layanan/data','LayananController@listData')->name('layanan.data');
	Route::resource('layanan', 'LayananController');

	//paket controller
	Route::get('paket/data','PaketController@listData')->name('paket.data');
	Route::resource('paket', 'PaketController');	

	// Galeri Controller
	Route::get('galeri/data','GaleriController@listData')->name('galeri.data');
	Route::resource('galeri', 'GaleriController');	
});