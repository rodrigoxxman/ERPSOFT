<?php
namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class UsersController extends Controller{

/*******Funcion Index************************************************************************************/
    public function index(){
        $usersObjects = users::paginate(25);
        return view('users.index', compact('usersObjects'));
    }
/******Fin funcion index***********************************************************************************/
    


/*******Funcion Mostrar************************************************************************************/
    public function show($id){
        $users = users::findOrFail($id);
        return view('users.show', compact('users'));
    }
/*******Fin funcion mostrar************************************************************************************/



/*******Funcion Editar************************************************************************************/
    public function edit($id){
        $users = users::findOrFail($id);
        return view('users.edit', compact('users'));
    }
/*******Fin funcion Editar*************************************************************************************/



/*******Funcion Actualizar******************************************************************************************/
    public function update($id, Request $request){
        try {       
            $data = $this->getData($request);        
            $users = users::findOrFail($id);
            $users->update($data);
            return redirect()->route('users.users.index')->with('success_message', 'Las credenciales del usuario se actualizaron con exito!');
        } catch (Exception $exception) {
            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Un error inesperado ha ocurrido mientras se procesaba su accion, ponerse en contacto!']);
        }        
    }
/******Fin funcion Actualizar***************************************************************************************/



/***** Funcion Obtener Data***************************************************************************************/
    protected function getData(Request $request){
        $rules = [
            'name' => 'required|string|min:1|max:191',
            'email' => 'required|string|min:1|max:191',
            'password' => 'nullable|string|min:0|max:191',
            'code' => 'nullable|string|min:0|max:191',
            'active' => 'required|numeric|min:-2147483648|max:2147483647',
            'remember_token' => 'nullable|string|min:0|max:100',
        ];    
        $data = $request->validate($rules);
        return $data;
    }
/***** Fin Funcion Obtener Data**************************************************************************************/
}
