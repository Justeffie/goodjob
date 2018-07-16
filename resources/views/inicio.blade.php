@extends('layouts.aside')
@section('contenido')
    <section>
      <div class="container">
          <?php for($i=0; $i <= 3; $i++) {
          echo ' <article class="publi-inicio">
                    <div class="id-user-amigo">
                      <div class="perfil-container"><img class="perfil-barralat" src="https://cdn.iconscout.com/public/images/icon/free/png-512/avatar-user-hacker-3830b32ad9e0802c-512x512.png" alt=""></div><p id="user-amigo">Nombre de Amigo</p>
                    </div>
                    <div class="img-amigos">
                      <img class="" src="css/imagenes/elefantes.jpg" alt="">
                      </div>
                    <div class="publi-amigos">
                      <a href="#"><img src="css/imagenes/megusta.png" alt=""></a>
                      <a href="#"><img src="css/imagenes/comentario.png" alt=""></a>
                      <a href="#"><img src="css/imagenes/compartir.png" alt=""></a>
                    </div>
                    <div class="comentarios">
                      <form action="index.html" method="post">
                        <input class="coment" type="text" name="" value="Escribí un comentario">
                      </form>
                    </div>
                  </article>';
          }; ?>
        </div>

    </section>
    <aside>
      <div class="right-container">
      <div class="publicar">
        <form class="trabajo" action="index.html" method="post">
          <input class="publica" type="text" name="" placeholder="Mostrá tu trabajo">
          <img class="compartir" src="css/imagenes/escribir.png" alt="Compartir">
        </form>
      </div>
    </div>
    </aside>
    @endsection
