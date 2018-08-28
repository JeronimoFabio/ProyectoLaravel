<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class InicioController extends Controller
{
   public function showInicio(){

    return view('/inicio');

   }

   public function cocinas(){
   	$cocinas=Product::where('categories_id', 1)->get();
   	return view('/cocinas', compact('cocinas'));
   }
   public function anafes(){
   	$anafes=Product::where('categories_id', 3)->get();
   	return view('/anafes', compact('anafes'));
   }
   public function campana(){
   	$campana=Product::where('categories_id', 4)->get();
   	return view('/campana', compact('campana'));
   }
   public function hornos(){
   	$hornos=Product::where('categories_id', 2)->get();
   	return view('/hornos', compact('hornos'));
   }
}
