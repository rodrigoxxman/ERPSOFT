@extends('layouts.app')

    @section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper" style="margin-left:5%; margin-right:5%;">
  <div class="card-header">
    Agregar Oportunidad
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('oportunidads.oportunidad.store') }}">
      @csrf
          <div class="form-group">
              <label for="Nombre">Nombre de Oportunidad:</label>
              <input type="text" class="form-control" name="Nombre"/>
          </div>
          <div class="form-group">
              <label for="FechaOp">Fecha de la Oportunidad:</label>
              <input type="text" class="form-control" name="FechaOp"/>
          </div>
          <div class="form-group">
              <label for="FechaCierre">Fecha de Cierre:</label>
              <input type="text" class="form-control" name="FechaCierre"/>
          </div>
          <div class="form-group">
              <label for="MustWin">Must-Win:</label>
              <input type="text" class="form-control" name="MustWin"/>
          </div>
          <div class="form-group">
              <label for="MontoUSS">Monto en Dólares:</label>
              <input type="text" class="form-control" name="MontoUSS"/>
          </div>
          <div class="form-group">
              <label for="PercentWin">PercentWin:</label>
              <input type="text" class="form-control" name="PercentWin"/>
          </div>
          <div class="form-group">
              <label for="Avance">Avance:</label>
              <input type="text" class="form-control" name="Avance"/>
          </div>
          <div class="form-group">
              <label for="Ponderado">Ponderado:</label>
              <input type="text" class="form-control" name="Ponderado"/>
          </div>
          <div class="form-group">
              <label for="Funnel">Funnel:</label>
              <input type="text" class="form-control" name="Funnel"/>
          </div>
          <div class="form-group">
              <label for="Costo">Costo:</label>
              <input type="text" class="form-control" name="Costo"/>
          </div>
          <div class="form-group">
              <label for="TipoVenta">Tipo de Venta:</label>
              <input type="text" class="form-control" name="TipoVenta"/>
          </div>
          <div class="form-group">
              <label for="Mes">Mes:</label>
              <input type="text" class="form-control" name="Mes"/>
          </div>
          <div class="form-group">
              <label for="Trimestre">Trimestre:</label>
              <input type="text" class="form-control" name="Trimestre"/>
          </div>
          <div class="form-group">
              <label for="Tamano">Tamano:</label>
              <input type="text" class="form-control" name="Tamano"/>
          </div>
          <div class="form-group">
              <label for="Relevante">Relevante:</label>
              <input type="text" class="form-control" name="Relevante"/>
          </div>
          <div class="form-group">
              <label for="Registrado">Registrado:</label>
              <input type="text" class="form-control" name="Registrado"/>
          </div>
          <div class="form-group">
              <label for="Codigo">Codigo:</label>
              <input type="text" class="form-control" name="Codigo"/>
          </div>
          <div hidden class="form-group">
              <label for="Facturado">Facturado:</label>
              <input type="text" class="form-control" name="Facturado" value="PE" />
          </div>
          <div class="form-group">

          
          <label for="Cliente_Id" class="col-md-2 control-label">Cliente</label>
                <select class="form-control" id="Cliente_Id" name="Cliente_Id" required="true">
                        <option value="" style="display: none;" {{ old('Cliente_Id') == '' ? 'selected' : '' }} disabled selected>Select cliente</option>
                    @foreach ($clientes as $key => $cliente)
                        <option value="{{ $key }}" {{ old('Cliente_Id') == $key ? 'selected' : '' }}>
                            {{ $cliente }}
                        </option>
                    @endforeach
                </select>
          </div>

          <div class="form-group">
               <label for="Cliente_Empresa_Id" class="col-md-2 control-label">Cliente  Empresa</label>
                    <select class="form-control" id="Cliente_Empresa_Id" name="Cliente_Empresa_Id" required="true">
                            <option value="" style="display: none;" {{ old('Cliente_Empresa_Id') == '' ? 'selected' : '' }} disabled selected>Select cliente  empresa</option>
                        @foreach ($clientes as $key => $cliente)
                            <option value="{{ $key }}" {{ old('Cliente_Empresa_Id') == $key ? 'selected' : '' }}>
                                {{ $cliente }}
                            </option>
                        @endforeach
                    </select>
          </div>

          <div class="form-group">
               <label for="Prevend_Id" class="col-md-2 control-label">Prevendedor</label>
                    <select class="form-control" id="Prevend_Id" name="Prevend_Id" required="true">
                            <option value="" style="display: none;" {{ old('Prevend_Id') == '' ? 'selected' : '' }} disabled selected>Select prevend</option>
                        @foreach ($prevends as $key => $prevend)
                            <option value="{{ $key }}" {{ old('Prevend_Id') == $key ? 'selected' : '' }}>
                                {{ $prevend }}
                            </option>
                        @endforeach
                    </select>
          </div>

          <div class="form-group">
              <label for="vend_Id" class="col-md-2 control-label">Vendedor</label>
                <div class="col-md-10">
                    <select class="form-control" id="vend_Id" name="vend_Id" required="true">
                            <option value="" style="display: none;" {{ old('vend_Id') == '' ? 'selected' : '' }} disabled selected>Select vend</option>
                        @foreach ($vends as $key => $vend)
                            <option value="{{ $key }}" {{ old('vend_Id') == $key ? 'selected' : '' }}>
                                {{ $vend }}
                            </option>
                        @endforeach
                    </select>
                </div>
          </div>
          
          <div class="form-group">
          <label for="Solucion_Id" class="col-md-2 control-label">Solucion</label>
            <div class="col-md-10">
                <select class="form-control" id="Solucion_Id" name="Solucion_Id" required="true">
                        <option value="" style="display: none;" {{ old('Solucion_Id') == '' ? 'selected' : '' }} disabled selected>Select solucion</option>
                    @foreach ($solucions as $key => $solucion)
                        <option value="{{ $key }}" {{ old('Solucion_Id') == $key ? 'selected' : '' }}>
                            {{ $solucion }}
                        </option>
                    @endforeach
                </select>
          </div>
          <div class="form-group">
          <label for="Solucion_Id" class="col-md-2 control-label">Mayorista</label>
            <div class="col-md-10">
                <select class="form-control" id="Mayorista_Id" name="Mayorista_Id" required="true">
                        <option value="" style="display: none;" {{ old('Mayorista_Id') == '' ? 'selected' : '' }} disabled selected>Selecciona Mayorista</option>
                    @foreach ($mayorista as $key => $mayorista)
                        <option value="{{ $key }}" {{ old('Mayorista_Id') == $key ? 'selected' : '' }}>
                            {{ $mayorista }}
                        </option>
                    @endforeach
                </select>
            </div>
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>

@endsection


