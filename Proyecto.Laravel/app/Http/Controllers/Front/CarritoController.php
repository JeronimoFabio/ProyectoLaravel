<?php

namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
class CarritoController extends Controller
{
    public function showCarrito(){
                
       $productos = \DB::table('products')->select('price','name')->get(); 
       return view('/carrito', compact('productos'));
    }
}