@extends('layouts.encabezado')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/iniciostyle.css">
    <link rel="stylesheet" href="/css/buscadorstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
  </head>

@section('contenido')
  <section class="buscador-cont">
    @if (count($usuarios) === 0)

          <article class="item-busc">
          <p id="no-result">No se han encontrado resultados</p>
          </article>
@elseif (count($usuarios) >= 1)
    @foreach($usuarios as $usuario)
    <a class="link-busc" href="#">
    <article class="item-busc">
      <div class="item-imag">
        <img src="{{$usuario->foto_perfil}}" alt="">
      </div>
      <div class="item-name">
        <p class="dato-name">{{$usuario->name}} {{$usuario->apellido}}</p>
        <p class="dato-user">@php
          echo '@'.$usuario->usuario;
        @endphp</p>
      </div>
    </article>
    </a>
    @endforeach
@endif
  </section>
    {{$usuarios->links()}}
@endsection
</html>