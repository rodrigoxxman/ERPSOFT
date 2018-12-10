<?php

namespace App\Http\Controllers;

use Khill\Lavacharts\Lavacharts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class testController extends Controller
{

  public function test(){
    return view('solucion.elegir');
  }
}
