@extends('layouts.encabezado')
@section('contenido')
  <aside class="perfil-perf">
    <div class="datos">
      <div class="datos foto">
      <img class="fotoperfil" src="@foreach ($user as $dato)
        {{$dato->foto_perfil}}
      @endforeach" alt="">
      <h4>{{ Auth::user()->name }}</h4>
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
      <img class="user publicacion" src="/css/imagenes/ciudad.jpg" alt="">
    </div>
    <div class="publicacion-contenedor">
      <img class="user publicacion" src="/css/imagenes/luces.jpg" alt="">
    </div>
    <div class="publicacion-contenedor">
      <img class="user publicacion" src="/css/imagenes/naturaleza.jpg" alt="">
    </div>
    <div class="publicacion-contenedor">
      <img class="user publicacion" src="/css/imagenes/vintage.jpg" alt="">
    </div>
    <div class="publicacion-contenedor">
      <img class="user publicacion" src="/css/imagenes/parque.jpg" alt="">
    </div>
    <div class="publicacion-contenedor">
      <img class="user publicacion" src="/css/imagenes/chico.jpg" alt="">
    </div>
  </section>

@endsection
