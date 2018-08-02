<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Redirect;
use App\User;

class UserController extends Controller
{
  private $code;



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
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

    public function complete(Request $request){
      /*$user = User::find($id);
      $user = new \stdClass();
      $user->password = bcrypt($request->password);
      $user->active = 1;
      $user->save();
      return redirect::to('/login');*/
      $codigo = 0;
      DB::table('users')
            ->where('active', 0)
            ->update(['password' => bcrypt($request->password),
                      'active' => 1]);
            return redirect::to('/login');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
