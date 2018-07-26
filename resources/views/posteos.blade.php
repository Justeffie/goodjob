@extends('layouts.encabezado')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/iniciostyle.css">
    <link rel="stylesheet" href="/css/posteosstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Postear</title>
  </head>
  @section('contenido')
    <div class="form-container">
      <div class="info-usuario">
        <div class="fotoperfil-contenedor">
        <img class="fotoperfil" src="@foreach ($user as $dato)
          {{$dato->foto_perfil}}
        @endforeach" alt="">
        </div>
          <h4>{{ Auth::user()->name }}</h4>
      </div>

      <form class="" action="/postear" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <textarea class="texto" name="descripcion"></textarea>
        @if ($errors->has('descripcion'))
            <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first('descripcion') }}</strong>
            </span>
        @endif
        <br>
        <input class="publicacion" type="file" name="imagen" value="" required>
        <br>
        @if ($errors->has('imagen'))
            <span class="invalid-feedback" role="alert" style="color:red">
                <strong>{{ $errors->first('imagen') }}</strong>
            </span>
        @endif

          <select name="id_categoria" class="id-categoria">
            <option value="">Categoría</option>
            @foreach ($cats as $categoria)
              <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
          </select>
          @if ($errors->has('id_categoria'))
              <span class="invalid-feedback" role="alert" style="color:red">
                  <strong>{{ $errors->first('id_categoria') }}</strong>
              </span>
          @endif
          <br>

        <input class="postear" type="submit" value="Publicar">
      </form>
      </div>

  @endsection
