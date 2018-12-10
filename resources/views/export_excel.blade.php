@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

<div class="container">
        <h1 style="font-size: 2.2rem">Exportar Oportunidades</h1>
        <hr/>
        {!! Form::open(['method'=>'get']) !!}
        <div class="row">
            <div class="col-sm-4 form-group">
                {!! Form::select('Registrado',['-1'=>'Registrado?','Si'=>'Si','No'=>'No'],null,['class'=>'form-control','onChange'=>'form.submit()']) !!}
            </div>
            <div class="col-sm-5 form-group">
                <div class="input-group">
                    <input class="form-control" id="search"
                           value="{{ request('search') }}"
                           placeholder="Buscar Nombre" name="search"
                           type="text" id="search"/>
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-warning"
                        >
                            Buscar
                        </button>
                    </div>
                </div>
            </div>
            <input type="hidden" value="{{request('field')}}" name="field"/>
            <input type="hidden" value="{{request('sort')}}" name="sort"/>
        </div>
        {!! Form::close() !!}
        <table class="table table-striped bg-light">
            <thead class="bg-dark" style="color: white">
            <tr>

                <th width="60px" style="vertical-align: middle;text-align: center">Cliente</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Empresa</th>
                <th style="vertical-align: middle">
                    <a href="{{url('oportunidads')}}?search={{request('search')}}&gender={{request('gender')}}&field=name&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                    Oportunidad
                    </a>
                    {{request('field','Oportunidad')=='Oportunidad'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                </th>
                <th width="60px" style="vertical-align: middle;text-align: center">FechaOportunidad</th>
                <th width="60px" style="vertical-align: middle;text-align: center">FechaCierre</th>
                <th width="60px" style="vertical-align: middle;text-align: center">MustWin</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Monto$</th>
                <th width="60px" style="vertical-align: middle;text-align: center">%Win</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Avance</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Ponderado</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Funnel</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Vendedor</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Marca</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Costo</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Sector</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Industria</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Mayorista</th>
                <th width="60px" style="vertical-align: middle;text-align: center">TipoVenta</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Area</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Solucion</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Tier</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Tamaño</th>
                <th style="vertical-align: middle">
                    <a href="{{url('oportunidads')}}?search={{request('search')}}&Registrado={{request('Registrado')}}&field=Registrado&sort={{request('sort','asc')=='asc'?'desc':'asc'}}">
                    Registrado
                    </a>
                    {{request('field')=='Registrado'?(request('sort','asc')=='asc'?'&#9652;':'&#9662;'):''}}
                </th>
                <th width="60px" style="vertical-align: middle;text-align: center">Mes</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Trimestre</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Prevendedor</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Registrados</th>
                <th width="60px" style="vertical-align: middle;text-align: center">Codigo</th>
                <th width="130px" style="vertical-align: middle">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($oportunidads as $oportunidad)
                <tr>
                    <td style="vertical-align: middle">{{ $oportunidad->cliente->Nombre }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->cliente->empresa->Nombre }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->Nombre }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->FechaOp }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->FechaCierre }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->MustWin }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->MontoUSS }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->PercentWin }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->Avance }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->Ponderado }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->Funnel }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->vend->Nombre }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->solucion->Marca }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->Costo }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->cliente->empresa->Sector }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->cliente->empresa->Industria }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->Mayorista->Nombre }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->TipoVenta }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->solucion->Area }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->solucion->Solucion }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->cliente->empresa->Tier }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->Tamano}}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->Relevante}}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->Mes }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->Trimestre }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->prevend->Nombre }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->Registrado }}</td>
                    <td style="vertical-align: middle">{{ $oportunidad->Codigo }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <nav>
            <ul class="pagination justify-content-end">
                {{$oportunidads->links('vendor.pagination.bootstrap-4')}}
            </ul>
        </nav>
    </div>
@endsection