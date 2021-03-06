
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="<?php if((isset($_COOKIE['switch'])) && ($_COOKIE['switch'] === 'dark')){
          echo '/css/darkthemes/darkiniciostyle.css';
      }else{
          echo '/css/iniciostyle.css';
        }?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Inicio</title>
  </head>
  <body>
    <header>
      <div class="head-contenedor">
      <div class="head">
        <a href="/home"><h1>Good Job</h1></a>
        <input id="act" type="checkbox" name="act" value="">
        <label for="act">
          <div class="perfil-img-contenedor">
          <img class="perfil" src="@foreach ($user as $dato)
            {{$dato->foto_perfil}}
          @endforeach" alt="">
          </div>
        </label>
        <form class="search" action="/buscador?explorar={{ Input::get('explorar') ?? ''}}" method="get">
          <input type="search" name="explorar" placeholder="Buscar">
          <button id="exp" type="submit">
            <img class="lupa" src="/css/imagenes/lupa2.png" alt="">
          </button>
        </form>
        <div class="barra-contenedor">
          <ul class="barralat">
            <li><div class="perfil-container"><img class="perfil-barralat" src="@foreach ($user as $dato)
              {{$dato->foto_perfil}}
            @endforeach" alt=""></div><p id="user">@foreach ($user as $dato)
              {{$dato->name}}
            @endforeach</p></li>
            <li class="barra">
              <a href="/<?php foreach ($user as $dato) {
                echo trim($dato->usuario);
              }?>">
            <img src="/css/imagenes/user.png" alt="">Perfil</a></li>
            <li class="barra"><a href="configuracion"><img src="/css/imagenes/configuracion.png" alt="">Configuración</a></li>
            <li class="barra">
              <form class="" action="{{ route('logout') }}" method="post">
                {{ csrf_field() }}
                <img  class="cerrar" src="/css/imagenes/cerrar.png" alt="">
                <input type="submit" name="cerrar" value="Cerrar Sesión">
              </form>
              </li>
              <li> <button id="switch2" type="button" name="dark">Modo Oscuro</button></li>
          </ul>
        </div>
        </div>
        <nav>
          <div class="nav-principal">
          <ul>
            <li><a class="navegador" href="/home"><img class="nav" src="/css/imagenes/inicio.png" alt="Inicio"></a></li>
            <li><a class="navegador" href="/"><img class="nav" src="/css/imagenes/notificacion.png" alt="Notificaciones"></a></li>
            <li><a class="navegador" href="/postear"><img class="nav" src="/css/imagenes/escribir.png" alt="Compartir"></a></li>
            <li><a class="navegador" href="/"><img class="nav" src="/css/imagenes/mensajes.png" alt="Mensajes"></a></li>
            <li><a class="navegador" href="/"><img class="nav" src="/css/imagenes/trabajo2.png" alt="Empleos"></a></li>
          </ul>
          </div>
        </nav>
        </div>
    </header>
    <div class="main-container">
      <aside class="seetings">
        <div class="left-container">
        <div class="barra-aside">
          <ul>
            <div class="barraSide">
              <img class="usuario" src="@foreach ($user as $dato)
                {{$dato->foto_perfil}}
              @endforeach" alt="">
            </div>
              <p class="nombre-usuario">@foreach ($user as $dato)
                {{$dato->name}}
              @endforeach</p>
            <li class="barra"><a href="/<?php foreach ($user as $dato) {
              echo trim($dato->usuario);
            }?>"><img src="css/imagenes/user.png" alt="">Perfil</a></li>
            <li class="barra"><a href="#"><img src="css/imagenes/configuracion.png" alt="">Configuración</a></li>
            <li class="barra">
              <form class="" action="{{ route('logout') }}" method="post">
                {{ csrf_field() }}
                <img  class="cerrar" src="css/imagenes/cerrar.png" alt="">
                <input type="submit" name="cerrar" value="Cerrar Sesión">
                </form>
              </li>
              <li> <button id="switch" type="button" name="dark">Modo Oscuro</button></li>
          </div>
        </ul>
        </div>
      </aside>
      @yield('contenido')
    </div>
    <script src="/js/inicioscript.js"></script>
  </body>
</html>
