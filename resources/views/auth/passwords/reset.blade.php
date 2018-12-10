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
                <span class="card-title">Reestablecer Contraseña</span>
              </div>
              <hr>
            <div class="card-content black-text">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf  

                        <input type="hidden" name="token" value="{{ $token }}">

                            <div class="input-field">
                                    <i class="material-icons prefix">mail</i>
                                    <input id="email" type="email" 
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                    name="email" value="{{ $email ?? old('email') }}" required autofocus>
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="input-field">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="password" type="password" 
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                    name="password" required>
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="input-field">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            </div>
                            
                           <button class="btn waves-effect waves-light" type="submit" id="ing">Reestablecer
                                <i class="material-icons right">send</i>
                            </button>

                                <div class="row">
                                <a id="reest" href="{{ route('register') }}">Registrate Aquí</a>
                                    <a id="reg" href="{{ route('login') }}">Inicia Sesion</a>
                                </div>
                </form>
            </div>
</body>
</html>