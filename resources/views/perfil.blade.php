@extends('layouts.encabezado')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/iniciostyle.css">
    <link rel="stylesheet" href="/css/perfilstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Perfil de @foreach ($user as $dato)
      {{$dato->name}} {{$dato->apellido}}
    @endforeach</title>
  </head>
@section('contenido')
  <aside class="perfil-perf">
    <div class="datos">
      <div class="datos foto">
        <div class="datos-fotoperfil-contenedor">
      <img class="fotoperfil" src="@foreach ($user as $dato)
        {{$dato->foto_perfil}}
      @endforeach" alt="">
      </div>
      <h4>@foreach ($user as $dato)
        {{$dato->name}} {{$dato->apellido}}
      @endforeach</h4>
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

      <!-- formulario para seguir a un usuario -->
  @foreach ($user as $dato)
    @php
    $find = '';
      $rel = (App\Models\Usuario::find(\Auth::user()->id)->amigos()->where('id_amigo', '=', $dato->id)->get());
      foreach ($rel as $datos) {
        $find= $datos['id'];
      }
    @endphp
      @if (($dato->usuario !== \Auth::user()->usuario) && ($find >= 1))
        <form class="form-seguir" action="/dejarseguir/{{$dato->usuario}}" method="post">
          {{csrf_field()}}
          <div id="seguido" class="seguir-boton">
            <input  style="display:none" type="text" name="id" value="{{$dato->id}}">
              <input class="seg" type="submit" name="seguido" value="Dejar de seguir">
          </div>
        </form>
@elseif (($dato->usuario !==\Auth::user()->usuario) && ($find == ''))
<form class="form-seguir" action="/seguir/{{$dato->usuario}}" method="post">
  {{csrf_field()}}
  <div id="seguir" class="seguir-boton">
    <input class="seg" type="submit" name="seguir" value="Seguir">
    <input style="display:none" type="text" name="id" value="{{$dato->id}}">
  </div>
</form>

      @elseif ($dato->usuario === \Auth::user()->usuario)
      <form style="display:none" class="form-seguir" action="/seguir/{{$dato->usuario}}" method="post">
        {{csrf_field()}}
        <div style="display:none" id="seguir" class="seguir-boton">
          <input style="display:none" class="seg" type="submit" name="seguir" value="Seguir">
          <input style="display:none" type="text" name="id" value="{{$dato->id}}">
        </div>
      </form>
      <form style="display:none" class="form-seguir" action="/dejarseguir/{{$dato->usuario}}" method="post">
        {{csrf_field()}}
        <div style="display:none" id="seguido" class="seguir-boton">
          <input style="display:none" type="text" name="id" value="{{$dato->id}}">
            <input style="display:none" class="seg" type="submit" name="seguido" value="Dejar de seguir">
        </div>
      </form>
@endif
  @endforeach

      <p class="biografia">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </aside>
  <section class="trabajos">
    @php
        foreach ($post as $publi) {
          foreach ($user as $dato) {
          echo '<div class="publicacion-contenedor">
            <a class="publicacion-a" href="/'.$dato->usuario.'/' . substr($publi->imagen, 21) .
              '">
                <img class="user-publicacion" src="/'. $publi->imagen .'" alt="">
              </a>
              </div>';
            }

        }
    @endphp
  </section>
  <div class="paginado">
  {{$post->links()}}
</div>
@endsection
