@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
    
    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <span class="pull-left">
                <h4 class="mt-5 mb-5">Create New Oportunidad</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
              <a href="{{ route('oportunidads.oportunidad.index') }}" class="btn btn-primary" title="Show All Oportunidad">
                  <span class="fas fa-list-ol" aria-hidden="true"> Mostrar Oportunidades</span>
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

            <form method="POST" action="{{ route('oportunidads.oportunidad.store') }}" accept-charset="UTF-8" id="create_oportunidad_form" name="create_oportunidad_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('oportunidads.form', [
                                        'oportunidad' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection
