<div class="card">


<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : '' }}">
    <label for="Nombre" class="col-md-2 control-label">Nombre</label>
    <div class="col-md-10">
        <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ old('Nombre', optional($oportunidad)->Nombre) }}" minlength="1" maxlength="45" required="true" placeholder="Ingresa el nombre aquí...">
        {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
    </div>
</div>




<?php
$t=date("d-m-Y");
?>

<div class="form-group {{ $errors->has('FechaOp') ? 'has-error' : '' }}">
    <label for="FechaOp" class="col-md-2 control-label">Fecha Op</label>
    <div class="col-md-10">
        <input class="form-control" name="FechaOp" type="text" id="FechaOp" value="{{ old('$t', optional($oportunidad)->FechaOp)}}" required="true" placeholder="Ingresa la fecha de la oportunidad aquí...">
        {!! $errors->first('FechaOp', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('FechaCierre') ? 'has-error' : '' }}">
    <label for="FechaCierre" class="col-md-2 control-label">Fecha Cierre</label>
    <div class="col-md-10">
        <input class="form-control" style="width: 20%;" name="FechaCierre" type="text" id="FechaCierre" value="{{ old('FechaCierre', optional($oportunidad)->FechaCierre) }}" required="true" placeholder="Ingresa la fecha de cierre aquí...">
        {!! $errors->first('FechaCierre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('MustWin') ? 'has-error' : '' }}">
    <label for="MustWin" class="col-md-2 control-label">Must Win</label>
    <div class="col-md-10">
        <input class="form-control" name="MustWin" type="text" id="MustWin" value="{{ old('MustWin', optional($oportunidad)->MustWin) }}" required="true" placeholder="Ingresa el must win aquí...">
        {!! $errors->first('MustWin', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('MontoUSS') ? 'has-error' : '' }}">
    <label for="MontoUSS" class="col-md-2 control-label">Monto U S S</label>
    <div class="col-md-10">
        <input class="form-control" name="MontoUSS" type="number" id="MontoUSS" value="{{ old('MontoUSS', optional($oportunidad)->MontoUSS) }}" required="true" placeholder="Ingresa el monto en dólares aquí...">
        {!! $errors->first('MontoUSS', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('PercentWin') ? 'has-error' : '' }}">
    <label for="PercentWin" class="col-md-2 control-label">Percent Win</label>
    <div class="col-md-10">
        <input class="form-control" name="PercentWin" type="number" id="PercentWin" value="{{ old('PercentWin', optional($oportunidad)->PercentWin) }}" required="true" placeholder="Ingresa el percent win aquí...">
        {!! $errors->first('PercentWin', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Avance') ? 'has-error' : '' }}">
    <label for="Avance" class="col-md-2 control-label">Avance</label>
    <div class="col-md-10">
        <input class="form-control" name="Avance" type="text" id="Avance" value="{{ old('Avance', optional($oportunidad)->Avance) }}" minlength="1" maxlength="45" required="true" placeholder="Ingresa el avance aquí...">
        {!! $errors->first('Avance', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Ponderado') ? 'has-error' : '' }}">
    <label for="Ponderado" class="col-md-2 control-label">Ponderado</label>
    <div class="col-md-10">
        <input class="form-control" name="Ponderado" type="number" id="Ponderado" value="{{ old('Ponderado', optional($oportunidad)->Ponderado) }}" min="-9" max="900000" step="0.01" pattern="^\d+(?:\.\d{1,2})?$" required="true" placeholder="Ingresa el ponderado aquí...">
        {!! $errors->first('Ponderado', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Funnel') ? 'has-error' : '' }}">
    <label for="Funnel" class="col-md-2 control-label">Funnel</label>
    <div class="col-md-10">
        <input class="form-control" name="Funnel" type="text" id="Funnel" value="{{ old('Funnel', optional($oportunidad)->Funnel) }}" minlength="1" maxlength="45" required="true" placeholder="Ingresa el funnel aquí...">
        {!! $errors->first('Funnel', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Costo') ? 'has-error' : '' }}">
    <label for="Costo" class="col-md-2 control-label">Costo</label>
    <div class="col-md-10">
        <input class="form-control" name="Costo" type="number" id="Costo" value="{{ old('Costo', optional($oportunidad)->Costo) }}" min="-9" max="900000" step="0.01" pattern="^\d+(?:\.\d{1,2})?$" required="true" placeholder="Ingresa el costo aquí...">
        {!! $errors->first('Costo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('TipoVenta') ? 'has-error' : '' }}">
    <label for="TipoVenta" class="col-md-2 control-label">Tipo Venta</label>
    <div class="col-md-10">
        <input class="form-control" name="TipoVenta" type="text" id="TipoVenta" value="{{ old('TipoVenta', optional($oportunidad)->TipoVenta) }}" minlength="1" maxlength="45" required="true" placeholder="Ingresa el tipo de venta aquí...">
        {!! $errors->first('TipoVenta', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Mes') ? 'has-error' : '' }}">
    <label for="Mes" class="col-md-2 control-label">Mes</label>
    <div class="col-md-10">
        <input class="form-control" name="Mes" type="text" id="Mes" value="{{ old('Mes', optional($oportunidad)->Mes) }}" minlength="1" maxlength="45" required="true" placeholder="Ingresa el mes aquí...">
        {!! $errors->first('Mes', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Trimestre') ? 'has-error' : '' }}">
    <label for="Trimestre" class="col-md-2 control-label">Trimestre</label>
    <div class="col-md-10">
        <input class="form-control" name="Trimestre" type="text" id="Trimestre" value="{{ old('Trimestre', optional($oportunidad)->Trimestre) }}" minlength="1" maxlength="45" required="true" placeholder="Ingresa el trimestre aquí...">
        {!! $errors->first('Trimestre', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Tamano') ? 'has-error' : '' }}">
    <label for="Tamano" class="col-md-2 control-label">Tamaño</label>
    <div class="col-md-10">
        <input class="form-control" name="Tamano" type="text" id="Tamano" value="{{ old('Tamano', optional($oportunidad)->Tamano) }}" minlength="1" maxlength="45" required="true" placeholder="Ingresa el Tamaño aquí...">
        {!! $errors->first('Tamano', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Relevante') ? 'has-error' : '' }}">
    <label for="Relevante" class="col-md-2 control-label">Relevante</label>
    <div class="col-md-10">
        <input class="form-control" name="Relevante" type="text" id="Relevante" value="{{ old('Relevante', optional($oportunidad)->Relevante) }}" minlength="1" maxlength="45" required="true" placeholder="Ingresa si es relevante aquí...">
        {!! $errors->first('Relevante', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Registrado') ? 'has-error' : '' }}">
    <label for="Registrado" class="col-md-2 control-label">Registrado</label>
    <div class="col-md-10">
        <input class="form-control" name="Registrado" type="text" id="Registrado" value="{{ old('Registrado', optional($oportunidad)->Registrado) }}" minlength="1" maxlength="45" required="true" placeholder="Ingresa si esta registrado aquí...">
        {!! $errors->first('Registrado', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('Codigo') ? 'has-error' : '' }}">
    <label for="Codigo" class="col-md-2 control-label">Codigo</label>
    <div class="col-md-10">
        <input class="form-control" name="Codigo" type="text" id="Codigo" value="{{ old('Codigo', optional($oportunidad)->Codigo) }}" minlength="1" maxlength="45" required="true" placeholder="Ingresa el codigo aquí...">
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
</div>

</div>
