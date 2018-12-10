<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vend;
use App\Models\Cliente;
use App\Models\Prevend;
use App\Models\Solucion;
use App\Models\Mayorista;
use App\Models\oportunidad;
use DB;

class ExportExcelController extends Controller
{
    public function index(){
        $oportunidads = oportunidad::with('cliente','prevend','vend','solucion','mayorista')->paginate(25);
        return view('export_excel', compact('oportunidads'));
    }
    /*function excel()
    {
      $oportunidads = oportunidad::with('cliente','prevend','vend','solucion','mayorista')->toArray();
     $oportunidads_array[] = array('Nombre del Cliente', 'Nombre de la Oportunidad', 'Fecha de Oportunidad', 'Fecha de Cierre', 'Must WIN', 'Monto US$', '% WIN', 'Avance', 'Ponderado', 'Funnel', 'Vendedor', 'Marca', 'Costos', 'Sector', 'Industria', 'Mayorista', 'Tipo de Venta', 'Area', 'Solución', 'Tier', 'Tamaño', 'Relevante', 'Mes', 'Trimestre', 'Pre Venta', 'Registrados');
     foreach($oportunidads as $oportunidad)
     {
      $oportunidads_array[] = array(
       'Nombre del Cliente' => $oportunidad->cliente->empresa->Nombre, 
       'Nombre de la Oportunidad' => $oportunidad->Nombre, 
       'Fecha de Oportunidad' => $oportunidad->FechaOp , 
       'Fecha de Cierre' => $oportunidad->FechaCierre, 
       'Must WIN' => $oportunidad->MustWin, 
       'Monto US$' => $oportunidad->MontoUSS, 
       '% WIN' => $oportunidad->PercentWin, 
       'Avance' => $oportunidad->Avance, 
       'Ponderado' => $oportunidad->Ponderado, 
       'Funnel' => $oportunidad->Funnel, 
       'Vendedor' => $oportunidad->vend->Nombre, 
       'Marca' => $oportunidad->solucion->Marca, 
       'Costos' => $oportunidad->Costo, 
       'Sector' => $oportunidad->cliente->empresa->Sector, 
       'Industria' => $oportunidad->cliente->empresa->Industria, 
       'Mayorista' => $oportunidad->Mayorista->Nombre, 
       'Tipo de Venta' => $oportunidad->TipoVenta, 
       'Area' => $oportunidad->solucion->Area, 
       'Solución' => $oportunidad->solucion->Solucion, 
       'Tier' => $oportunidad->cliente->empresa->Tier, 
       'Tamaño' => $oportunidad->Tamano, 
       'Relevante' => $oportunidad->Relevante, 
       'Mes' => $oportunidad->Mes, 
       'Trimestre' => $oportunidad->Trimestre, 
       'Pre Venta' => $oportunidad->prevend->Nombre, 
       'Registrados' => $oportunidad->Registrado
      );
     }
     Excel::create('Oportunidades', function($excel) use ($oportunidads_array){
      $excel->setTitle('Oportunidades');
      $excel->sheet('Oportunidades', function($sheet) use ($oportunidads_array){
       $sheet->fromArray($oportunidads_array, null, 'A1', false, false);
      });
     })->download('xlsx');
    }*/
    public function export($type)
    {
        return Excel::download(new PostsExport, 'oportunidades.' . $type);
    }
    
}
