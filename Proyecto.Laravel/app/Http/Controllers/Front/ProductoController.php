<?php

namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
 
class ProductoController extends Controller
{
    public function index(){
        
      return view('productos');
    }
}