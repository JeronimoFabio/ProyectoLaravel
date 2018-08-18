<?php

namespace App\Http\Controllers\BackUp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackUpController extends Controller
{
   public function index(){
   	return view('auth.backRegister');
   }
}
