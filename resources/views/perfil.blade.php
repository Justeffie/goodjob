@extends('layouts.encabezado')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/iniciostyle.css">
    <link rel="stylesheet" href="/css/perfilstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Perfil de {{ Auth::user()->name }}</title>
  </head>
@section('contenido')
  <aside class="perfil-perf">
    <div class="datos">
      <div class="datos foto">
      <img class="fotoperfil" src="@foreach ($user as $dato)
        {{$dato->foto_perfil}}
      @endforeach" alt="">
      <h4>{{ Auth::user()->name }}</h4>
      <p class="user">@php
        foreach ($user as $dato) {
        echo '@' . $dato->usuario;
        }
      @endphp</p>
      </div>
      <div class="datos seguidores">
      <a class="seguir" href="#">0 Seguidores</a>
      <p class="seguir">/</p>
      <a class="seguir" href="#">0 Seguidos</a>
      </div>
      <!--<img src="" class="seguir" alt="">-->
      <p class="biografia">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </aside>
  <section class="trabajos">
    <div class="publicacion-contenedor">
      <a class="publicacion-a" href="/posteoUsuario">
        <img class="user-publicacion" src="/css/imagenes/ciudad.jpg" alt="">
      </a>
    </div>
    <div class="publicacion-contenedor">
      <a href="#">
      <img class="user-publicacion" src="/css/imagenes/luces.jpg" alt="">
      </a>
    </div>
    <div class="publicacion-contenedor">
      <a href="#">
      <img class="user-publicacion" src="/css/imagenes/naturaleza.jpg" alt="">
      </a>
    </div>
    <div class="publicacion-contenedor">
      <img class="user-publicacion" src="/css/imagenes/vintage.jpg" alt="">
    </div>
    <div class="publicacion-contenedor">
      <a href="#">
      <img class="user-publicacion" src="/css/imagenes/parque.jpg" alt="">
      </a>
    </div>
    <div class="publicacion-contenedor">
      <a href="#">
      <img class="user-publicacion" src="/css/imagenes/chico.jpg" alt="">
      </a>
    </div>
  </section>

@endsection
