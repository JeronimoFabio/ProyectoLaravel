<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CarritoController extends Controller
{
    public function showCarrito(){

    	return view('/viewss/carrito');
    }
}
