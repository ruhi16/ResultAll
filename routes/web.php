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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/setting', function(){
    return view('/setting/setting');
});

Route::get('/session', 'AdSettingController@session');
Route::post('/addSession', 'AdSettingController@addSession');
Route::get('/editSession/{n}', 'AdSettingController@editSession');

Route::get('/clssec',function(){
    return view ('/setting/clssec');
});




Route::post('/register-submit', 'AdminController@registerSubmit');
Route::post('/login-submit', 'AdminController@loginSubmit');

Route::group(['middleware' => 'admin'], function(){
    Route::get('/dashboard', 'AdminController@dashboard');

    Route::get('/logout',function(){
        session()->flush();
        return redirect()->to('/home');
    });


});