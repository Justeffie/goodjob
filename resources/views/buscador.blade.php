@extends('layouts.encabezado')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href=<?php if((isset($_COOKIE['switch'])) && ($_COOKIE['switch'] === 'dark')){
          echo '/css/darkthemes/darkiniciostyle.css';
      }else{
          echo '/css/iniciostyle.css';
        }?>>
    <link rel="stylesheet" href="<?php if((isset($_COOKIE['switch'])) && ($_COOKIE['switch'] === 'dark')){
          echo '/css/darkthemes/darkbuscadorstyle.css';
      }else{
          echo '/css/buscadorstyle.css';
        }?>">
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

    @endforeach
@endif
@if (count($usuarios) >= 1)
  <div class="paginado">
    {{$usuarios->appends(Input::except('page'))->links()}}
  </div>
@endif
@endsection
</html>
