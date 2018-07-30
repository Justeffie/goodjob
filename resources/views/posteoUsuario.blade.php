@extends('layouts.encabezado')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/iniciostyle.css">
    <link rel="stylesheet" href="/css/posteoUserStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Trabajo de @foreach ($user as $dato)
      {{$dato->name}} {{$dato->apellido}}
    @endforeach</title>
  </head>
  @section('contenido')
    <div class="post-container">
      <div class="info-usuario">
        <div class="info-fotoperfil-contenedor">
        <img class="fotoperfil" src="@foreach ($user as $dato)
          {{$dato->foto_perfil}}
        @endforeach" alt="">
        </div>
        <h4>@foreach ($user as $dato)
          {{$dato->name}} {{$dato->apellido}}
        @endforeach</h4>
      </div>
      <div class="imag-contenedor">
          <img class="user-publicacion" src="/{{$post->imagen}}" alt="">

      </div>
      <div class="descrip-contenedor">
      <p class="user-post">{{$post->descripcion}}
        <br>
      {{$post->created_at}}</p>
      </div>
      <div class="interaccion">
        <a  href="#"><img class="inter" src="/css/imagenes/megusta.png" alt=""></a>
        <a href="#"><img class="inter"  src="/css/imagenes/comentario.png" alt=""></a>
        <a  href="#"><img class="inter" src="/css/imagenes/compartir.png" alt=""></a>
      </div>
      <div class="borrar">
        <form class="" action="/@php
          foreach ($user as $dato) {
            echo $dato->usuario;
          }
        @endphp" method="post">
          {{ csrf_field() }}

          <div class="borrar-bor">
            <img class="bas" src="/css/imagenes/borrar.png" alt="">
          </div>
          <input class="input-borrar" type="submit" name="borrar" value="Borrar">
          <textarea style='visibility:hidden' name="img" rows="1" cols="1">{{$post->imagen}}</textarea>
        </form>
      </div>
    </div>


  @endsection
