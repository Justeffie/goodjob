@extends('layouts.index')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Good Job</title>
  </head>
  <body>
    @section('content')
    <header>
      <div class="header-contenedor">
      <h1>Lugar donde la originalidad, creatividad e innovación confluyen </h1>
      <h2>Sumate a esta gran comunidad </h2>
      <div class="com">
      <a class="iniciar head" href="{{route('login')}}">Iniciar Sesión</a>
      <a class="iniciar head" href="{{route('register')}}">Registrate</a>
    </div>
    </div>
    </header>

    <section class="seccion1">

      <div class="todainfo">
      <article class="explicacion">
      <div class="info">
        <img class="descripcion" src="css/imagenes/idea.png" alt="">
        <p>Mostrale al mundo tus ideas y de lo que sos capás</p>
      </div>
    </article>
    <article class="explicacion">
      <div class="info">
        <img class="descripcion" src="css/imagenes/conversacion.png" alt="">
        <p>Encontrá personas con tu misma pasión</p>
      </div>
    </article>
    <article class="explicacion">
      <div class="info">
        <img class="descripcion" src="css/imagenes/trabajo.png" alt="">
        <p>Mantenete al tanto de las últimas ofertas del mercado laboral</p>
      </div>
    </article>
    </div>
    </section>
    <section class="seccion2">
          <h3>Destacados</h3>
          <article class="destacados">
            <div class="fav">
              <a href="#" target="_blank"><img class="imagenes" src="css/imagenes/elefantes.jpg" alt=""></a>
            </div>
            <div class="fav">
              <a href="#" target="_blank"><img class="imagenes" src="css/imagenes/chico.jpg" alt=""></a>
            </div>
            <div class="fav">
              <a href="#" target="_blank"><img class="imagenes" src="css/imagenes/luces.jpg" alt=""></a>
            </div>
            <div class="fav">
              <a href="#" target="_blank"><img class="imagenes" src="css/imagenes/naturaleza.jpg" alt=""></a>
            </div>
            <div class="fav">
              <a href="#" target="_blank"><img class="imagenes" src="css/imagenes/vintage.jpg" alt=""></a>
            </div>
            <div class="fav">
              <a href="#" target="_blank"><img class="imagenes" src="css/imagenes/chica.jpg" alt=""></a>
            </div>
          </article>
          <form class="explorar" action="index.php" method="post">
            <div class="buscador">
            <input class="busca" type="search" name="explorar" placeholder="Explorar">
            <img class="lupa" src="css/imagenes/lupa.png" alt="">
            </div>
          </form>
        </section>
        @endsection
  </body>
</html>
