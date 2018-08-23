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


Route::get('/viewss/inicio','Front\InicioController@showInicio');
Route::get('/viewss/carrito','Front\CarritoController@showCarrito');
Route::get('register', 'Auth\RegisterController@showSignin');
Route::get('login', 'Auth\LoginController@showLogin');
Route::get('/viewss/faq', 'Front\FaqController@showFaq');
Route::get('/viewss/contacto','Front\ContactoController@showContacto');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/backRegister', 'BackUp\BackUpController@index');
