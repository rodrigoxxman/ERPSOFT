<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Redirect;



class testController extends Controller
{

  private $foo = 4;


    public function test(){
      return view('test');
    }

    public function get($foo){
        $this->foo = $foo;
    }
    public function anotherFunction(){
        $hi = $this->foo;
        return $hi; 
    }

}
//$id = 2;
//$users = User::find($id);
//$email = $users->email;
  //      return $email;
