<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Redirect;
use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
  private $code;

    public function activate($code){
      $this->code = $code;
      $users = User::where('code', $code);
      $exist = $users->count();
      $user = $users->first();
      if ($exist == 1 and $user->activate == 0){
        $id = $user->id;
        return view('auth.date_complete', compact('id'));
      }else{
        return redirect::to('/');
      }
    }

    public function complete(UserRequest $request, $id){
        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->active = 1;
        $user->save();
        return redirect::to('/login');
      /*$codigo = 0;
      DB::table('users')
            ->where('active', 0)
            ->update(['password' => bcrypt($request->password),
                      'active' => 1]);
            return redirect::to('/login');*/


    }


}
