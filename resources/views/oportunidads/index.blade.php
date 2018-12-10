@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

<div class="container">



    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-3 mb-4">Oportunidades</h4>
            </div>
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('oportunidads.oportunidad.create') }}" class="btn btn-success hvr-sweep-to-left" title="Create New Oportunidad">
                    <i class="far fa-plus-square"> Crear Nueva Oportunidad</i>
                </a>
            </div>
        </div>
        @if(count($oportunidads) == 0)
            <div class="panel-body text-center">
                <h4>No Oportunidads Available!</h4>
            </div>
        @else
        <br>
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Empresa</th>
                            <th>Oportunidad</th>
                            <th>FechaOportunidad</th>
                            <th>FechaCierre</th>
                        <!--<th>MustWin</th>-->
                        <!--<th>Monto$</th>-->
                        <!--<th>%Win</th>-->
                            <th>Avance</th>
                        <!--<th>Ponderado</th>-->
                        <!--<th>Funnel</th>-->
                            <th>Vendedor</th>
                        <!--<th>Marca</th>-->
                        <!--<th>Costo</th>-->
                        <!--<th>Sector</th>-->
                        <!--<th>Industria</th>-->
                        <!--<th>Mayorista</th>-->
                            <th>TipoVenta</th>
                        <!--<th>Area</th>-->
                            <th>Solucion</th>
                        <!--<th>Tier</th>-->
                        <!--<th>Tamaño</th>-->
                            <th>Relevante</th>
                        <!--<th>Mes</th>-->
                        <!--<th>Trimestre</th>-->
                        <!--<th>Prevendedor</th>-->
                        <!--<th>Registrados</th>-->
                        <!--<th>Codigo</th>-->
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($oportunidads as $oportunidad)
                        <tr>
                            <td>{{ $oportunidad->cliente->Nombre }}</td>              <!--Nombre del Cliente       ==> Tabla:Cliente     -->
                            <td>{{ $oportunidad->cliente->empresa->Nombre }}</td>     <!--Nombre de la empresa     ==> Tabla:Empresa     -->
                            <td>{{ $oportunidad->Nombre }}</td>                       <!--Nombre de la Oportunidad ==> Tabla:Oportunidad -->
                            <td>{{ $oportunidad->FechaOp }}</td>                      <!--Fecha de la Oportunidad  ==> Tabla:Oportunidad -->
                            <td>{{ $oportunidad->FechaCierre }}</td>                  <!--Fecha del Cierre         ==> Tabla:Oportunidad -->
                        <!--<td>{{ $oportunidad->MustWin }}</td>                          MustWin                  ==> Tabla:Oportunidad -->
                        <!--<td>{{ $oportunidad->MontoUSS }}</td>                         MontoUSS                 ==> Tabla:Oportunidad -->
                        <!--<td>{{ $oportunidad->PercentWin }}</td>                       PercentWin               ==> Tabla:Oportunidad -->
                            <td>{{ $oportunidad->Avance }}</td>                       <!--Avance                   ==> Tabla:Oportunidad -->
                        <!--<td>{{ $oportunidad->Ponderado }}</td>                        Ponderado                ==> Tabla:Oportunidad -->
                        <!--<td>{{ $oportunidad->Funnel }}</td>                           Funnel                   ==> Tabla:Oportunidad -->
                            <td>{{ $oportunidad->vend->Nombre }}</td>                 <!--Vendedor                 ==> Tabla:vend        -->
                        <!--<td>{{ $oportunidad->solucion->Marca }}</td>                  Marca                    ==> Tabla:Solucion    -->
                        <!--<td>{{ $oportunidad->Costo }}</td>                            Costo                    ==> Tabla:Oportunidad -->
                        <!--<td>{{ $oportunidad->cliente->empresa->Sector }}</td>         Sector                   ==> Tabla:Empresa     -->
                        <!--<td>{{ $oportunidad->cliente->empresa->Industria }}</td>      Industria                ==> Tabla:Empresa     -->
                        <!--<td>{{ $oportunidad->Mayorista->Nombre }}</td>                Mayorista                ==> Tabla:Mayorista   -->
                            <td>{{ $oportunidad->TipoVenta }}</td>                    <!--TipoVenta                ==> Tabla:Oportunidad -->
                        <!--<td>{{ $oportunidad->solucion->Area }}</td>                   Area                     ==> Tabla:solucion    -->
                            <td>{{ $oportunidad->solucion->Solucion }}</td>           <!--Solucion                 ==> Tabla:Solucion    -->
                        <!--<td>{{ $oportunidad->cliente->empresa->Tier }}</td>           Tier                     ==> Tabla:empresa     -->
                        <!--<td>{{ $oportunidad->Tamano}}</td>                            Tamaño                   ==> Tabla:empresa     -->
                            <td>{{ $oportunidad->Relevante}}</td>                     <!--Relevante                ==> Tabla:empresa     -->
                        <!--<td>{{ $oportunidad->Mes }}</td>                              Mes                      ==> Tabla:Oportunidad -->
                        <!--<td>{{ $oportunidad->Trimestre }}</td>                        Trimestre                ==> Tabla:Oportunidad -->
                        <!--<td>{{ $oportunidad->prevend->Nombre }}</td>                  prevendedor              ==> Tabla:prevend     -->
                        <!--<td>{{ $oportunidad->Registrado }}</td>                       Registrado               ==> Tabla:Oportunidad -->
                        <!--<td>{{ $oportunidad->Codigo }}</td>                           Codigo                   ==> Tabla:Oportunidad -->

                            <td>

                                <form method="POST" action="{!! route('oportunidads.oportunidad.destroy', $oportunidad->Id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('oportunidads.oportunidad.show', $oportunidad->Id ) }}" class="btn btn-info hvr-sweep-to-left" title="Show Oportunidad">
                                            <i class="fas fa-eye"> Mostrar Oportunidad</i>
                                        </a>
                                        <a href="{{ route('oportunidads.oportunidad.edit', $oportunidad->Id ) }}" class="btn btn-primary hvr-sweep-to-left" title="Edit Oportunidad">
                                            <i class="fas fa-edit"> Editar Oportunidad</i>
                                        </a>

                                        <button type="submit" class="btn btn-danger hvr-sweep-to-left" title="Delete Oportunidad" onclick="return confirm(&quot;Delete Oportunidad?&quot;)">
                                            <i class="fas fa-trash-alt"> Borrar Oportunidad</i>
                                        </button>
                                    </div>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $oportunidads->render() !!}
        </div>

        @endif

    </div>
    </div>
@endsection