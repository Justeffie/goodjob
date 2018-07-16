@extends('layouts.index')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link  href="css/login.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
    <title>Resgistrate a Good job</title>
  </head>
  <body>
@section('content')
<div class="transparencia">
  <div class="headcont">
<h3> Registrate </h3>
</div>
<div class="formulario">
    <form  method="post" action="{{route('register')}}" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="container contform">
        <div class="forma">
      <label>Nombre  </label>
  <input type="text" name="name" value="{{old('name')}}" >
  @if ($errors->has('name'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('name') }}</strong>
      </span>
  @endif
    <br>
      <label>Apellido</label>
        <input type="text" name="apellido" value="{{old('apellido')}}" >

        @if ($errors->has('apellido'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('apellido') }}</strong>
            </span>
        @endif
      <br>
        <label>Usuario</label>
  <input type="text" name="usuario" value="{{old('usuario')}}" >

  @if ($errors->has('usuario'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('usuario') }}</strong>
      </span>
  @endif
</div>
<div class="formb">
<label>Correo Electronico</label>
  <input type="text" name="email" value="{{old('email')}}">

  @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('email') }}</strong>
      </span>
  @endif
<br>
<label>Fecha de nacimiento</label>
<input type="date" name="nacimiento" value="" min="1950-01-01" max="2019-01-01">

@if ($errors->has('nacimiento'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('nacimiento') }}</strong>
    </span>
@endif
<br>
  <label>Contraseña</label>
    <input type="password" name="password" value="">

    @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
  <br>
<label>Foto de perfil </label> <br>
<input id="regAvatar" type="file" name="avatar" value="">
</div>
  <button type="submit">Enviar</button>
</div>
  </form>
</div>
</div>
@endsection
  </body>
</html>
