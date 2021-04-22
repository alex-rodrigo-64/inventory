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
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/', function () {
    return view('home');
})->middleware('auth');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


Route::get('registro', 'DiskController@registro')->middleware('auth');

Route::get('/cerrar', 'DiskController@cerrar')->middleware('auth');

Route::post('/crear', 'DiskController@crear')->name('disco.crear')->middleware('auth');


Route::get('resultado', 'DiskController@resultado')->name('resultado')->middleware('auth');
Route::post('resultado', 'DiskController@compatible')->name('disco.compatible')->middleware('auth');



Route::get('addCompatible', 'DiskController@addCompatible')->name('addCompatible')->middleware('auth');
Route::post('addCompatible', 'DiskController@add')->middleware('auth');



Route::get('/home', 'DiskController@terminaRegistro')->middleware('auth');
Route::get('showDisk', 'DiskController@terminaRegistro2')->middleware('auth');

Route::get('showDisk', 'DiskController@showDisk')->name('showDisk')->middleware('auth');
Route::get('editar/{id}','DiskController@editar')->name('editar')->middleware('auth');
Route::put('/editar/{id}','DiskController@update')->name('update')->middleware('auth');
Route::post('editCompatible','DiskController@add2')->name('editCompatible')->middleware('auth');

Route::post('showDisk', 'DiskController@filtrado')->name('disco.filtrado')->middleware('auth');
Route::delete('showDisk/eliminar/{id}', 'DiskController@eliminar')->middleware('auth');
Route::delete('eliminarCompatible/{id}', 'DiskController@eliminarCompatible')->middleware('auth');
Route::get('showDisk/print', 'DiskController@imprimir')->middleware('auth');
