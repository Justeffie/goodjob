<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
    <nav class="menu-principal">
      <div class="menu-contenedor">
      <a href="/index" class="nombre">Good Job</a>
      <input id="act" type="checkbox" name="act" value="">
      <label for="act">
      <img class=" hamburguesa" src="css/imagenes/menu.png" alt="">
      </label>
        <ul class="hambur">
          <li class="menu"><a href="creativos">Usuarios</a></li>
          <li class="menu"><a href="empleos">Empleos</a></li>
          <li class="menu"><a href="empresas">Empresas</a></li>
          </ul>

        <div class="ladoder">

          <a class="iniciar" href="{{route('login')}}">Iniciar Sesión</a>
          <a class="iniciar" href="{{route('register')}}">Registrate</a>
        </div>
        </div>
    </nav>
      @yield('content')
    <footer>
      <h3 id="nredes">Nuestras Redes</h2>
        <div class="redes">
      <a href="#" target="_blank"><img src="css/imagenes/twitter.png" alt=""></a>
      <a href="#" target="_blank"><img src="css/imagenes/instagram.png" alt=""></a>
      <a href="#" target="_blank"><img src="css/imagenes//facebook.png" alt=""></a>
    </div>
      <ul class="pie">
        <li><a href="#">Sobre Nosotros</a></li>
        <li><a href="faq.php">Preguntas Frecuentes</a></li>
        <li><a href="#">Empleos</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </footer>

  </body>
</html>
