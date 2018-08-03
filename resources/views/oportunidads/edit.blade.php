@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
    <link rel = "stylesheet" href = "{{ asset('css/materialize.min.css') }}">

    <script>
       $(document).ready(function() {
          $('#select').material_select();
       });
    </script>

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ !empty($title) ? $title : 'Oportunidad' }}</h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="{{ route('oportunidads.oportunidad.index') }}" class="btn btn-primary" title="Show All Oportunidad">
                    <span class="fas fa-list-ol" aria-hidden="true"> Mostrar Oportunidades</span>
                </a>

                <a href="{{ route('oportunidads.oportunidad.create') }}" class="btn btn-success" title="Create New Oportunidad">
                    <span class="far fa-plus-square" aria-hidden="true"> Crear Oportunidad</span>
                </a>

            </div>
        </div>


        <div class="panel-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('oportunidads.oportunidad.update', $oportunidad->Id) }}" id="edit_oportunidad_form" name="edit_oportunidad_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('oportunidads.form', [
                                        'oportunidad' => $oportunidad,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Actualizar">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
