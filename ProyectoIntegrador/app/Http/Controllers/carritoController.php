<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carritoController extends Controller
{
    public function showCarrito(){

    	return view('/viewss/carrito');
    }
}
