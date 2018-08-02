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

class OportunidadsController extends Controller
{

    /**
     * Display a listing of the oportunidads.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $oportunidads = oportunidad::with('cliente','prevend','vend','solucion','mayorista')->paginate(25);

        return view('oportunidads.index', compact('oportunidads'));
    }

    /**
     * Show the form for creating a new oportunidad.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $clientes = Cliente::pluck('id','Id')->all();
      $prevends = Prevend::pluck('id','Id')->all();
      $vends = Vend::pluck('id','Id')->all();
      $solucions = Solucion::pluck('id','Id')->all();
      $mayorista = mayorista::pluck('id','id')->all();

        return view('oportunidads.create', compact('clientes','clientes','prevends','vends','solucions','mayorista'));
    }

    /**
     * Store a new oportunidad in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {

            $data = $this->getData($request);

            oportunidad::create($data);

            return redirect()->route('oportunidads.oportunidad.index')
                             ->with('success_message', 'Oportunidad was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified oportunidad.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $oportunidad = oportunidad::with('cliente','prevend','vend','solucion','mayorista')->findOrFail($id);

        return view('oportunidads.show', compact('oportunidad'));
    }

    /**
     * Show the form for editing the specified oportunidad.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $oportunidad = oportunidad::findOrFail($id);
        $clientes = Cliente::pluck('id','Id')->all();
$prevends = Prevend::pluck('id','Id')->all();
$vends = Vend::pluck('id','Id')->all();
$solucions = Solucion::pluck('id','Id')->all();
$mayorista = mayorista::pluck('id','id')->all();

        return view('oportunidads.edit', compact('oportunidad','clientes','clientes','prevends','vends','solucions','mayorista'));
    }

    /**
     * Update the specified oportunidad in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {

            $data = $this->getData($request);

            $oportunidad = oportunidad::findOrFail($id);
            $oportunidad->update($data);

            return redirect()->route('oportunidads.oportunidad.index')
                             ->with('success_message', 'Oportunidad was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Remove the specified oportunidad from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $oportunidad = oportunidad::findOrFail($id);
            $oportunidad->delete();

            return redirect()->route('oportunidads.oportunidad.index')
                             ->with('success_message', 'Oportunidad was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }


    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'Nombre' => 'required|string|min:1|max:95',
            'FechaOp' => 'required|date_format:d-m-Y',
            'FechaCierre' => 'required|date_format:d-m-Y',
            'MustWin' => 'required|string|min:1|max:10',
            'MontoUSS' => 'required|numeric|min:-9|max:900000000',
            'PercentWin' => 'required|numeric|min:-2147483648|max:2147483647',
            'Avance' => 'required|string|min:1|max:45',
            'Ponderado' => 'required|numeric|min:-9|max:900000000',
            'Funnel' => 'required|string|min:1|max:45',
            'Costo' => 'required|numeric|min:-9|max:900000000',
            'TipoVenta' => 'required|string|min:1|max:45',
            'Mes' => 'required|string|min:1|max:13',
            'Trimestre' => 'required|string|min:1|max:45',
            'Tamano' => 'required|string|min:1|max:55',
            'Relevante' => 'required|string|min:1|max:45',
            'Registrado' => 'required|string|min:1|max:45',
            'Codigo' => 'required|string|min:1|max:45',
            'Cliente_Id' => 'required',
            'Cliente_Empresa_Id' => 'required',
            'Prevend_Id' => 'required',
            'vend_Id' => 'required',
            'Solucion_Id' => 'required',
            'Mayorista_Id' => 'required',

        ];


        $data = $request->validate($rules);




        return $data;
    }

}
