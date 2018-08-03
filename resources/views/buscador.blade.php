@extends('layouts.encabezado')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="@if (isset($_COOKIE['switch']))
      @if ($_COOKIE['switch'] === 'dark')
          /css/darkthemes/darkiniciostyle.css
      @else
          /css/iniciostyle.css
        @endif
    @else
      /css/iniciostyle.css
    @endif">
    <link rel="stylesheet" href="@if (isset($_COOKIE['switch']))
      @if ($_COOKIE['switch'] === 'dark')
          /css/darkthemes/darkbuscadorstyle.css
      @else
          /css/buscadorstyle.css
        @endif
    @else
      /css/buscadorstyle.css
    @endif">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
  </head>

@section('contenido')
    @if ($usuarios === [])
        <section class="buscador-cont">
      <article class="item-busc">
      <p id="no-result">No ha realizado ninguna búsqueda</p>
      </article>
  </section>
  @elseif (count($usuarios) === 0)
      <section class="buscador-cont">
          <article class="item-busc">
          <p id="no-result">No se han encontrado resultados</p>
          </article>
            </section>
@elseif (count($usuarios) >= 1)
    @foreach($usuarios as $usuario)
        <section class="buscador-cont">
    <a class="link-busc" href="/{{$usuario->usuario}}">
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
      </section>
    <div class="paginado">
      {{$usuarios->links()}}
    </div>
    @endforeach
@endif



@endsection
</html>
