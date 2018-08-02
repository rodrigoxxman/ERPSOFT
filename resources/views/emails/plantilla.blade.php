<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <img src="{{ url('http://grupobantek.com.pe/images/Bantek.png') }}" alt="lol">
    </header>
    <br>
    Hola {{$name}}
    <br>
    Activa tu cuenta ingresando :  <a href="{{url('/activacion/'.$code)}}"> <button class="btn btn-dark">aquí</button></a>
  </body>
</html>
