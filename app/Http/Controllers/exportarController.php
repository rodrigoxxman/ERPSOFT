<?php

namespace App\Http\Controllers;

use App\Models\Vend;
use App\Models\Cliente;
use App\Models\Prevend;
use App\Models\Solucion;
use App\Models\Mayorista;
use App\Models\oportunidad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class exportarController extends Controller
{
/*******Funcion Index************************************************************************************/
    public function indexExportar(){
        $oportunidads = oportunidad::with('cliente', 'prevend', 'vend', 'solucion', 'mayorista')->paginate(25);
        return view('exportar.aprobadas', compact('oportunidads'));
    }
/*******Fin Funcion Index************************************************************************************/

    public function probarcodigo(){
        $test = 1;
        return view('areadepruebas');
    }
}
