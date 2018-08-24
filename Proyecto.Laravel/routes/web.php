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
Route::get('/', function(){
	return view('inicio');
});
Route::get('/inicio','Front\InicioController@showInicio');
Route::get('/carrito','Front\CarritoController@showCarrito');
Route::get('/faq', 'Front\FaqController@showFaq');
Route::get('/contacto','Front\ContactoController@showContacto');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

