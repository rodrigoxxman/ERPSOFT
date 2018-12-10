<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="{{ asset('css/style-login.css')}}">
    <link href="{{ url('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css') }}">

    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js') }}"></script>
</head>
<body>
          <div class="card whitesmoke z-depth-5">
            <div id="tit" class="card-content black-text">
                <span class="card-title">Registro</span>
              </div>
              <hr>
            <div class="card-content black-text">
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf   
                            <div class="input-field">
                                <i class="material-icons prefix">perm_identity</i>
                                <input id="name" type="text" 
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                name="name" value="{{ old('name') }}" required autofocus>
                                <label for="icon_prefix">{{ __('Nombre') }}</label>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-field">
                                    <i class="material-icons prefix">mail</i>
                                    <input id="email" type="email" 
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" 
                                    value="{{ old('email') }}" required>
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                           <button class="btn waves-effect waves-light" type="submit" id="ing">Registrar
                                <i class="material-icons right">send</i>
                            </button>

                                <div class="row">
                                    <a id="reest" href="{{ route('password.request') }}">¿Olvidaste tu Contraseña?</a>
                                    <a id="reg" href="{{ route('login') }}">Inicia Sesion</a>
                                </div>
                </form>
            </div>
</body>
</html>