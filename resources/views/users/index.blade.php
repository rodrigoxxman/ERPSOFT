@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
    integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="panel panel-default" style="margin-left:5%; margin-right:5%">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Usuarios</h4>
            </div>


        </div>
        
        @if(count($usersObjects) == 0)
            <div class="panel-body text-center">
                <h4>No hay uuarios disponibles!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped" style="margin:2%;">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($usersObjects as $users)
                        <tr>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->email }}</td>    
                            <td>

                                <form method="POST" action="{!! route('users.users.destroy', $users->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('users.users.show', $users->id ) }}" class="btn btn-info" title="Show Users">
                                            <i class="fas fa-eye"> Mostrar Mas</i>
                                        </a>
                                        <a href="{{ route('users.users.edit', $users->id ) }}" class="btn btn-primary" title="Edit Users">
                                            <i class="fas fa-edit"> Editar</i>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Users" onclick="return confirm(&quot;Delete Users?&quot;)">
                                            <i class="fas fa-trash-alt"> Borrar</i>
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
            {!! $usersObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection