@extends('layouts.encabezado')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/iniciostyle.css">
    <link rel="stylesheet" href="/css/posteoUserStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Postear</title>
  </head>
  @section('contenido')
    <div class="post-container">
      <div class="info-usuario">
        <img class="fotoperfil" src="@foreach ($user as $dato)
          {{$dato->foto_perfil}}
        @endforeach" alt="">
        <h4>{{Auth::user()->name}}</h4>
      </div>
      <img class="user-publicacion" src="/css/imagenes/ciudad.jpg" alt="">


      <p class="user-post">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p class="user-date">10 de abril 2018</p>
      <div class="interaccion">
        <a  href="#"><img class="inter" src="css/imagenes/megusta.png" alt=""></a>
        <a href="#"><img class="inter"  src="css/imagenes/comentario.png" alt=""></a>
        <a  href="#"><img class="inter" src="css/imagenes/compartir.png" alt=""></a>
      </div>
    </div>

  @endsection
