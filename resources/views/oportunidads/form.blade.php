
<!--<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : '' }}">
    <label for="Nombre" class="col-md-2 control-label">Nombre</label>
    <div class="col-md-10">
        <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ old('Nombre', optional($oportunidad)->Nombre) }}" minlength="1" maxlength="45" required="true" placeholder="Enter nombre here...">
        {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('FechaOp') ? 'has-error' : '' }}">
    <label for="FechaOp" class="col-md-2 control-label">Fecha Op</label>
    <div class="col-md-10">
        <input class="form-control" name="FechaOp" type="text" id="FechaOp" value="{{ old('FechaOp', optional($oportunidad)->FechaOp) }}" required="true" placeholder="Enter fecha op here...">
        {!! $errors->first('FechaOp', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('FechaCierre') ? 'has-error' : '' }}">
    <label for="FechaCierre" class="col-md-2 control-label">Fecha Cierre</label>
    <div class="col-md-10">
        <input class="form-control" name="FechaCierre" type="text" id="FechaCierre" value="{{ old('FechaCierre', optional($oportunidad)->FechaCierre) }}" required="true" placeholder="Enter fecha cierre here...">
        {!! $errors->first('FechaCierre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('MustWin') ? 'has-error' : '' }}">
    <label for="MustWin" class="col-md-2 control-label">Must Win</label>
    <div class="col-md-10">
        <input class="form-control" name="MustWin" type="text" id="MustWin" value="{{ old('MustWin', optional($oportunidad)->MustWin) }}" minlength="1" maxlength="45" required="true" placeholder="Enter must win here...">
        {!! $errors->first('MustWin', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('MontoUSS') ? 'has-error' : '' }}">
    <label for="MontoUSS" class="col-md-2 control-label">Monto U S S</label>
    <div class="col-md-10">
        <input class="form-control" name="MontoUSS" type="number" id="MontoUSS" value="{{ old('MontoUSS', optional($oportunidad)->MontoUSS) }}" min="-9" max="9" required="true" placeholder="Enter monto u s s here...">
        {!! $errors->first('MontoUSS', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('PercentWin') ? 'has-error' : '' }}">
    <label for="PercentWin" class="col-md-2 control-label">Percent Win</label>
    <div class="col-md-10">
        <input class="form-control" name="PercentWin" type="number" id="PercentWin" value="{{ old('PercentWin', optional($oportunidad)->PercentWin) }}" min="-2147483648" max="2147483647" required="true" placeholder="Enter percent win here...">
        {!! $errors->first('PercentWin', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Avance') ? 'has-error' : '' }}">
    <label for="Avance" class="col-md-2 control-label">Avance</label>
    <div class="col-md-10">
        <input class="form-control" name="Avance" type="text" id="Avance" value="{{ old('Avance', optional($oportunidad)->Avance) }}" minlength="1" maxlength="45" required="true" placeholder="Enter avance here...">
        {!! $errors->first('Avance', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Ponderado') ? 'has-error' : '' }}">
    <label for="Ponderado" class="col-md-2 control-label">Ponderado</label>
    <div class="col-md-10">
        <input class="form-control" name="Ponderado" type="number" id="Ponderado" value="{{ old('Ponderado', optional($oportunidad)->Ponderado) }}" min="-9" max="9" required="true" placeholder="Enter ponderado here...">
        {!! $errors->first('Ponderado', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Funnel') ? 'has-error' : '' }}">
    <label for="Funnel" class="col-md-2 control-label">Funnel</label>
    <div class="col-md-10">
        <input class="form-control" name="Funnel" type="text" id="Funnel" value="{{ old('Funnel', optional($oportunidad)->Funnel) }}" minlength="1" maxlength="45" required="true" placeholder="Enter funnel here...">
        {!! $errors->first('Funnel', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Costo') ? 'has-error' : '' }}">
    <label for="Costo" class="col-md-2 control-label">Costo</label>
    <div class="col-md-10">
        <input class="form-control" name="Costo" type="number" id="Costo" value="{{ old('Costo', optional($oportunidad)->Costo) }}" min="-9" max="9" required="true" placeholder="Enter costo here...">
        {!! $errors->first('Costo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TipoVenta') ? 'has-error' : '' }}">
    <label for="TipoVenta" class="col-md-2 control-label">Tipo Venta</label>
    <div class="col-md-10">
        <input class="form-control" name="TipoVenta" type="text" id="TipoVenta" value="{{ old('TipoVenta', optional($oportunidad)->TipoVenta) }}" minlength="1" maxlength="45" required="true" placeholder="Enter tipo venta here...">
        {!! $errors->first('TipoVenta', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Mes') ? 'has-error' : '' }}">
    <label for="Mes" class="col-md-2 control-label">Mes</label>
    <div class="col-md-10">
        <input class="form-control" name="Mes" type="text" id="Mes" value="{{ old('Mes', optional($oportunidad)->Mes) }}" minlength="1" maxlength="45" required="true" placeholder="Enter mes here...">
        {!! $errors->first('Mes', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Trimestre') ? 'has-error' : '' }}">
    <label for="Trimestre" class="col-md-2 control-label">Trimestre</label>
    <div class="col-md-10">
        <input class="form-control" name="Trimestre" type="text" id="Trimestre" value="{{ old('Trimestre', optional($oportunidad)->Trimestre) }}" minlength="1" maxlength="45" required="true" placeholder="Enter trimestre here...">
        {!! $errors->first('Trimestre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Registrado') ? 'has-error' : '' }}">
    <label for="Registrado" class="col-md-2 control-label">Registrado</label>
    <div class="col-md-10">
        <input class="form-control" name="Registrado" type="text" id="Registrado" value="{{ old('Registrado', optional($oportunidad)->Registrado) }}" minlength="1" maxlength="45" required="true" placeholder="Enter registrado here...">
        {!! $errors->first('Registrado', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Codigo') ? 'has-error' : '' }}">
    <label for="Codigo" class="col-md-2 control-label">Codigo</label>
    <div class="col-md-10">
        <input class="form-control" name="Codigo" type="text" id="Codigo" value="{{ old('Codigo', optional($oportunidad)->Codigo) }}" minlength="1" maxlength="45" required="true" placeholder="Enter codigo here...">
        {!! $errors->first('Codigo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Cliente_Id') ? 'has-error' : '' }}">
    <label for="Cliente_Id" class="col-md-2 control-label">Cliente</label>
    <div class="col-md-10">
        <select class="form-control" id="Cliente_Id" name="Cliente_Id" required="true">
        	    <option value="" style="display: none;" {{ old('Cliente_Id', optional($oportunidad)->Cliente_Id ?: '') == '' ? 'selected' : '' }} disabled selected>Select cliente</option>
        	@foreach ($clientes as $key => $cliente)
			    <option value="{{ $key }}" {{ old('Cliente_Id', optional($oportunidad)->Cliente_Id) == $key ? 'selected' : '' }}>
			    	{{ $cliente }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('Cliente_Id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Cliente_Empresa_Id') ? 'has-error' : '' }}">
    <label for="Cliente_Empresa_Id" class="col-md-2 control-label">Cliente  Empresa</label>
    <div class="col-md-10">
        <select class="form-control" id="Cliente_Empresa_Id" name="Cliente_Empresa_Id" required="true">
        	    <option value="" style="display: none;" {{ old('Cliente_Empresa_Id', optional($oportunidad)->Cliente_Empresa_Id ?: '') == '' ? 'selected' : '' }} disabled selected>Select cliente  empresa</option>
        	@foreach ($clientes as $key => $cliente)
			    <option value="{{ $key }}" {{ old('Cliente_Empresa_Id', optional($oportunidad)->Cliente_Empresa_Id) == $key ? 'selected' : '' }}>
			    	{{ $cliente }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('Cliente_Empresa_Id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Prevend_Id') ? 'has-error' : '' }}">
    <label for="Prevend_Id" class="col-md-2 control-label">Prevend</label>
    <div class="col-md-10">
        <select class="form-control" id="Prevend_Id" name="Prevend_Id" required="true">
        	    <option value="" style="display: none;" {{ old('Prevend_Id', optional($oportunidad)->Prevend_Id ?: '') == '' ? 'selected' : '' }} disabled selected>Select prevend</option>
        	@foreach ($prevends as $key => $prevend)
			    <option value="{{ $key }}" {{ old('Prevend_Id', optional($oportunidad)->Prevend_Id) == $key ? 'selected' : '' }}>
			    	{{ $prevend }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('Prevend_Id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('vend_Id') ? 'has-error' : '' }}">
    <label for="vend_Id" class="col-md-2 control-label">Vend</label>
    <div class="col-md-10">
        <select class="form-control" id="vend_Id" name="vend_Id" required="true">
        	    <option value="" style="display: none;" {{ old('vend_Id', optional($oportunidad)->vend_Id ?: '') == '' ? 'selected' : '' }} disabled selected>Select vend</option>
        	@foreach ($vends as $key => $vend)
			    <option value="{{ $key }}" {{ old('vend_Id', optional($oportunidad)->vend_Id) == $key ? 'selected' : '' }}>
			    	{{ $vend }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('vend_Id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Solucion_Id') ? 'has-error' : '' }}">
    <label for="Solucion_Id" class="col-md-2 control-label">Solucion</label>
    <div class="col-md-10">
        <select class="form-control" id="Solucion_Id" name="Solucion_Id" required="true">
        	    <option value="" style="display: none;" {{ old('Solucion_Id', optional($oportunidad)->Solucion_Id ?: '') == '' ? 'selected' : '' }} disabled selected>Select solucion</option>
        	@foreach ($solucions as $key => $solucion)
			    <option value="{{ $key }}" {{ old('Solucion_Id', optional($oportunidad)->Solucion_Id) == $key ? 'selected' : '' }}>
			    	{{ $solucion }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('Solucion_Id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Mayorista_Id') ? 'has-error' : '' }}">
    <label for="Mayorista_Id" class="col-md-2 control-label">Mayorista</label>
    <div class="col-md-10">
        <select class="form-control" id="Mayorista_Id" name="Mayorista_Id" required="true">
        	    <option value="" style="display: none;" {{ old('Mayorista_Id', optional($oportunidad)->Mayorista_Id ?: '') == '' ? 'selected' : '' }} disabled selected>Select mayorista</option>
        	@foreach ($mayorista as $key => $mayorista)
			    <option value="{{ $key }}" {{ old('Mayorista_Id', optional($oportunidad)->Mayorista_Id) == $key ? 'selected' : '' }}>
			    	{{ $mayorista }}
			    </option>
			@endforeach
        </select>

        {!! $errors->first('Mayorista_Id', '<p class="help-block">:message</p>') !!}
    </div>
</div>-->















<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
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
          <div class="form-group">
              @csrf
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
          <div class="form-group">
          <label for="Cliente_Id" class="col-md-2 control-label">Cliente</label>
                <select class="form-control" id="Cliente_Id" name="Cliente_Id" required="true">
                        <option value="" style="display: none;" {{ old('Cliente_Id', optional($oportunidad)->Cliente_Id ?: '') == '' ? 'selected' : '' }} disabled selected>Select cliente</option>
                    @foreach ($clientes as $key => $cliente)
                        <option value="{{ $key }}" {{ old('Cliente_Id', optional($oportunidad)->Cliente_Id) == $key ? 'selected' : '' }}>
                            {{ $cliente }}
                        </option>
                    @endforeach
                </select>
          </div>

          <div class="form-group">
               <label for="Cliente_Empresa_Id" class="col-md-2 control-label">Cliente  Empresa</label>
                    <select class="form-control" id="Cliente_Empresa_Id" name="Cliente_Empresa_Id" required="true">
                            <option value="" style="display: none;" {{ old('Cliente_Empresa_Id', optional($oportunidad)->Cliente_Empresa_Id ?: '') == '' ? 'selected' : '' }} disabled selected>Select cliente  empresa</option>
                        @foreach ($clientes as $key => $cliente)
                            <option value="{{ $key }}" {{ old('Cliente_Empresa_Id', optional($oportunidad)->Cliente_Empresa_Id) == $key ? 'selected' : '' }}>
                                {{ $cliente }}
                            </option>
                        @endforeach
                    </select>
          </div>

          <div class="form-group">
               <label for="Prevend_Id" class="col-md-2 control-label">Prevendedor</label>
                    <select class="form-control" id="Prevend_Id" name="Prevend_Id" required="true">
                            <option value="" style="display: none;" {{ old('Prevend_Id', optional($oportunidad)->Prevend_Id ?: '') == '' ? 'selected' : '' }} disabled selected>Select prevend</option>
                        @foreach ($prevends as $key => $prevend)
                            <option value="{{ $key }}" {{ old('Prevend_Id', optional($oportunidad)->Prevend_Id) == $key ? 'selected' : '' }}>
                                {{ $prevend }}
                            </option>
                        @endforeach
                    </select>
          </div>

          <div class="form-group">
              <label for="vend_Id" class="col-md-2 control-label">Vendedor</label>
                <div class="col-md-10">
                    <select class="form-control" id="vend_Id" name="vend_Id" required="true">
                            <option value="" style="display: none;" {{ old('vend_Id', optional($oportunidad)->vend_Id ?: '') == '' ? 'selected' : '' }} disabled selected>Select vend</option>
                        @foreach ($vends as $key => $vend)
                            <option value="{{ $key }}" {{ old('vend_Id', optional($oportunidad)->vend_Id) == $key ? 'selected' : '' }}>
                                {{ $vend }}
                            </option>
                        @endforeach
                    </select>
          </div>
          
          <div class="form-group">
          <label for="Solucion_Id" class="col-md-2 control-label">Solucion</label>
            <div class="col-md-10">
                <select class="form-control" id="Solucion_Id" name="Solucion_Id" required="true">
                        <option value="" style="display: none;" {{ old('Solucion_Id', optional($oportunidad)->Solucion_Id ?: '') == '' ? 'selected' : '' }} disabled selected>Select solucion</option>
                    @foreach ($solucions as $key => $solucion)
                        <option value="{{ $key }}" {{ old('Solucion_Id', optional($oportunidad)->Solucion_Id) == $key ? 'selected' : '' }}>
                            {{ $solucion }}
                        </option>
                    @endforeach
                </select>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
