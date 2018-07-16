@extends('layouts.index')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Ingresar a Good Job</title>
  </head>
  <body>
      @section('content')
<div class="transparencia">
    <div class="headcont">
    <h3>Ingresar</h3>
    </div>
  </header>
</header>
    <form class="usuario" action="{{ route('login') }}" method="post">
          {{csrf_field()}}
  <div class="imgcontainer">
    <img src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-hacker-3830b32ad9e0802c-512x512.png" alt="Avatar" class="avatar">
  </div>
  <div class="container">
    <label><b>Direccion de Email:</b></label>
      <input type="text" placeholder="" name="email" value="{{old('email')}}">

      <br>
      @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
            <br>
    <label><b>Contraseña:</b></label>
    <input type="password" placeholder="" name="password" >

    @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif

    <button type="submit">Cargar</button>
    <label>
      <input class="recordar" type="checkbox" checked="checked" name="remember"> Recordarme
    </label>
  </div>
  <div class="container" style="background-color: rgba(0,0,0,0.5) ">
    <span ><a class="pass" href="contraseña.php">¿Te olvidaste la contraseña?</a></span>
  </div>
</form>
</div>
    @endsection
  </body>
</html>
