<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/demo-page.css')}}" rel="stylesheet">
    <link href="{{ asset('css/hover.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">



      <div class = "row">
         <div class = "col s4 ">
            <ul class = "tabs">
              <li class = "tab col s3"><a href = "#Oportunidad">Oportunidad</a></li>
               <li class = "tab col s3"><a href = "#Cliente">Cliente</a></li>
               <li class = "tab col s3"><a href = "#Solucion">Solucion</a></li>
               <li class = "tab col s3"><a href = "#Vendedores">Vendedores</a></li>
            </ul>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('oportunidads.oportunidad.index') }}" class="hvr-sweep-to-left" title="Show All Oportunidad">
                    <h4>Atras</h4>
                </a>
            </div>

         <div id = "Oportunidad" class = "col s12">
           <div class="container">
             <div class="row">
               <div class="col-sm-3 ">
               </div>
               <div class="col-sm-6 ">
                 <br>
                 <div class="card">
                 <div class="card-header">
                   <table>
                 <td><h5>Oportunidad</h5></td> <td><h5>:</h5></td> <td><h5>{{ $oportunidad->Nombre }}</h5></td>
                 </table>
                 </div>
                 <div class="card-body">
                   <table class="table">
                     <tr>
                   <td>Fecha Oportunidad </td><td>:</td> <td>{{ $oportunidad->FechaOp }}</td>
                   </tr>

                   <tr>
                   <td>Fecha Cierre </td> <td>:</td> <td>{{ $oportunidad->FechaCierre }}</td>
                   </tr>

                   <tr>
                   <td>MustWin </td> <td>:</td> <td>{{ $oportunidad->MustWin }}</td>
                   </tr>

                   <tr>
                  <td>Monto Dolares </td> <td>:</td> <td>{{ $oportunidad->MontoUSS }}</td>
                   </tr>

                   <tr>
                   <td>PercentWin </td> <td>:</td> <td>{{ $oportunidad->PercentWin }} %</td>
                   </tr>

                   <tr>
                   <td>Avance </td> <td>:</td> <td>{{ $oportunidad->Avance }}</td>
                   </tr>

                   <tr>
                   <td>Ponderado </td> <td>:</td> <td>{{ $oportunidad->Ponderado }}</td>
                   </tr>

                   <tr>
                   <td>Funnel </td> <td>:</td> <td>{{ $oportunidad->Funnel }}</td>
                   </tr>

                   <tr>
                   <td>Costo </td> <td>:</td> <td>{{ $oportunidad->Costo }}</td>
                   </tr>

                   <tr>
                   <td>Tipo Venta </td> <td>:</td> <td>{{ $oportunidad->TipoVenta }}</td>
                   </tr>

                   <tr>
                   <td>Mes </td> <td>:</td> <td>{{ $oportunidad->Mes }}</td>
                   </tr>

                   <tr>
                   <td>Trimestre </td> <td>:</td> <td>{{ $oportunidad->Trimestre }}</td>
                   </tr>

                   <tr>
                   <td>Tamano </td> <td>:</td> <td>{{ $oportunidad->Tamano }}</td>
                   </tr>

                   <tr>
                   <td>Relevante </td> <td>:</td> <td>{{ $oportunidad->Relevante }}</td>
                   </tr>

                   <tr>
                   <td>Registrado </td> <td>:</td> <td>{{ $oportunidad->Registrado }}</td>
                   </tr>

                   <tr>
                   <td>Codigo </td> <td>:</td> <td>{{ $oportunidad->Codigo }}</td>
                   </tr>

                   </table>
                 </div>
                 </div>
               </div>
               <div class="col-sm-3 ">
               </div>
             </div>
           </div>
         </div>


         <div id = "Cliente" class = "col s12">
           <div class="container">
             <div class="row">
               <div class="col-sm-3 ">
               </div>
               <div class="col-sm-6 ">
                 <br>
                 <div class="card">
                 <div class="card-header">
                   <table>
                 <td><h5>Nombre Cliente</h5></td> <td><h5>:</h5></td> <td><h5>{{ $oportunidad->cliente->Nombre }}</h5></td>
                 </table>
                 </div>
                 <div class="card-body">
                   <table class="table">
                     <tr>
                   <td>Direccion </td><td>:</td> <td>{{ $oportunidad->cliente->Direccion }}</td>
                   </tr>

                   <tr>
                   <td>Email </td> <td>:</td> <td>{{ $oportunidad->cliente->Email }}</td>
                   </tr>

                   <tr>
                   <td>Telefono </td> <td>:</td> <td>{{ $oportunidad->cliente->Telefono }}</td>
                   </tr>

                   <tr>
                  <td>Empresa </td> <td>:</td> <td>{{ $oportunidad->cliente->empresa->Nombre }}</td>
                   </tr>

                   <tr>
                   <td>Tier </td> <td>:</td> <td>{{ $oportunidad->cliente->empresa->Tier }}</td>
                   </tr>

                   <tr>
                   <td>Industria </td> <td>:</td> <td>{{ $oportunidad->cliente->empresa->Industria }}</td>
                   </tr>

                   <tr>
                   <td>Sector </td> <td>:</td> <td>{{ $oportunidad->cliente->empresa->Sector }}</td>
                   </tr>
                   </table>
                 </div>
                 </div>
               </div>
               <div class="col-sm-3 ">
               </div>
             </div>
           </div>
         </div>


         <div id = "Solucion" class = "col s12">
           <div class="container">
             <div class="row">
               <div class="col-sm-3 ">
               </div>
               <div class="col-sm-6 ">
                 <br>
                 <div class="card">
                 <div class="card-header">
                   <table>
                 <td><h5>Solucion</h5></td> <td><h5>:</h5></td> <td><h5>{{ $oportunidad->solucion->Solucion }}</h5></td>
                 </table>
                 </div>
                 <div class="card-body">
                   <table class="table">
                     <tr>
                   <td>Area </td><td>:</td> <td>{{ $oportunidad->solucion->Area }}</td>
                   </tr>

                   <tr>
                   <td>Marca </td> <td>:</td> <td>{{ $oportunidad->solucion->Marca }}</td>
                   </tr>

                   <tr>
                   <td>Mayorista </td> <td>:</td> <td>{{ $oportunidad->mayorista->Nombre }}</td>
                   </tr>
                   </table>
                 </div>
                 </div>
               </div>
               <div class="col-sm-3 ">
               </div>
             </div>
           </div>
         </div>


         <div id = "Vendedores" class = "col s12">
           <div class="container">
             <div class="row">
               <div class="col-sm-3 ">
               </div>
               <div class="col-sm-6 ">
                 <br>
                 <div class="card">
                 <div class="card-header">
                   <table>
                 <h5>Vendedor</h5>
                 </table>
                 </div>

                 <div class="card-body">
                   <table class="table">
                     <tr>
                   <td>Vendedor </td><td>:</td> <td>{{ $oportunidad->vend->Nombre }}</td>
                   </tr>

                   <tr>
                   <td>Telefono </td> <td>:</td> <td>{{ $oportunidad->vend->Telefono }}</td>
                   </tr>

                   <tr>
                   <td>Email </td> <td>:</td> <td>{{ $oportunidad->vend->Email }}</td>
                   </tr>
                   </table>
                 </div>

                 <div class="card-header">
                   <table>
                   <h5>Prevendedor</h5>
                   </table>
                 </div>
                 <div class="card-body">
                   <table class="table">
                     <tr>
                   <td>Prevendedor </td><td>:</td> <td>{{ $oportunidad->prevend->Nombre }}</td>
                   </tr>

                   <tr>
                   <td>Telefono </td> <td>:</td> <td>{{ $oportunidad->prevend->Telefono }}</td>
                   </tr>

                   <tr>
                   <td>Email </td> <td>:</td> <td>{{ $oportunidad->prevend->Email }}</td>
                   </tr>
                   </table>
                 </div>

                 </div>
               </div>
               <div class="col-sm-3 ">
               </div>
             </div>
           </div>
         </div>


      </div>
      </div>


</main>
</div>
<!-- Scripts -->
<script src="{{ asset('js/materialize.min.js') }}" defer></script>
<script src="{{ asset('js/jquery.min.js') }}" defer></script>
<script src="{{ asset('js/popper.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
</body>
</html>
