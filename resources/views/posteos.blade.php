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
        <img class="fotoperfil" src="@foreach ($user as $dato)
          {{$dato->foto_perfil}}
        @endforeach" alt="">

          <h4>{{ Auth::user()->name }}</h4>


      </div>
      <form class="" action="index.html" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <textarea class="texto" name="texto"></textarea>
        <input class="publicacion" type="file" name="imagen" value="" required>
        <input class="postear" type="submit" name="" value="Publicar">
      </form>

    </div>
  @endsection
