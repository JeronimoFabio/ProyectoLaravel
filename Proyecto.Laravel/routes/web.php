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
Route::get('/carrito','Front\ProductoController@index');
Route::get('/faq', 'Front\FaqController@showFaq');
Route::get('/contacto','Front\ContactoController@showContacto');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::match(['get', 'post'], 'admin/createadmin', 'AdminController@createAdmin');

Route::get('admin', 'AdminController@admin');

Route::get('/cocinas','Front\InicioController@cocinas');
Route::get('/anafes','Front\InicioController@anafes');
Route::get('/campana','Front\InicioController@campana');
Route::get('/hornos','Front\InicioController@hornos');


Route::get('/carrito/add/{id}', 'CartController@add');
Route::get('/carrito','CartController@show');

Route::get('/cart/destroy', 'CartController@destroy');
