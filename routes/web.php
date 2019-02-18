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
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function(){
	return view('contact');
});

Route::get('/gallery', function(){
	return view('gallery');
});

Route::get('/booking', function(){
	return view('booking');
});

Route::get('/service', function(){
	return view('service');
});

Route::post('/suscribe', 'HomepageController@emailSuscribe')->name('suscribe.store');

Auth::routes();

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
});

// test E-mail
Route::get('sendemail', function () {

    $data = array(
        'name' => "Learning Laravel",
    );

    Mail::send('emails.welcome', $data, function ($message) {

        $message->from('hendrawankevin97@gmail.com', 'Salon Violet');

        $message->to('amedia92@gmail.com')->subject('Terimakasih Telah Berlangganan');

    });

    return "Your email has been sent successfully";

});

