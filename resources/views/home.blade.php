@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->hasRole('admin'))
                        <div>Acceso como administrador</div>
                    @else
                    <script type="text/javascript">
                    window.location = 'oportunidads/';//here double curly bracket
                    </script>
                    @endif
                    Bienvenido!

                  </div>



            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 4%;">
  <!--fila 1-->
  <div class="row">

    <button type="button" name="button" onClick="document.location.href='oportunidads'" style="width: 30%; margin-left:20%;" >
  <h2>Oportunidades</h2>

    </button>

    <button type="button" name="button" onClick="document.location.href='graficas'"  style="width: 30%; margin-right:20%">
    <h2>Graficas</h2>
  </button>

    <button type="button" name="button" onClick="document.location.href='users'" style="width: 30%; margin-left:20%;">
    <h2>Usuarios</h2>
    </button>

    <button type="button" name="button" onClick="document.location.href='logout'" style="width: 30%; margin-right:20%">
    <h2>Configuracion</h2>
    </button>
  </div>





</div>
@endsection
