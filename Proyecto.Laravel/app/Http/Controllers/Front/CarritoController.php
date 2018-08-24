<?php

namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product; 
class CarritoController extends Controller
{
    public function showCarrito(){
                

       return view('/carrito');
    }
}