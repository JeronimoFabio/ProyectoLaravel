<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add($id)
    {
        if (
            !session()->has('productos')
            || !in_array($id, session()->get('productos'))
        ) {
            session()->push('productos', $id);
        }
        
        return redirect('carrito');
    }
    
    public function destroy()
    {
        session()->forget('productos');
        return redirect('carrito');
    }
    
    public function show()
    {
        $products = [];
        $carrito = [];

        if (session()->has('productos')) {
            $carrito = session()->get('productos');
            $products = \App\Product::whereIn('id', $carrito)->get();
        }
        
        return view('/productos', ['products' => $products, 'carrito' => $carrito]);
    }
}
