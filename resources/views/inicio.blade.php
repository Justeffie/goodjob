@extends('layouts.aside')
@section('contenido')
    <section>
      <div class="container">
@php
  foreach ($user as $dato) {
    if ($dato->publicacion()) {
      foreach ($dato->publicacion()->orderBy('created_at', 'DESC')->get() as $post) {
        echo '<article class="publi-inicio">
                   <div class="id-user-amigo">
                     <div class="perfil-container"><img class="perfil-barralat" src=' . $dato->foto_perfil .' alt=""></div><p id="user-amigo">' . $dato->usuario. '</p>
                   </div>
                   <div class="img-amigos">
                     <img class="" src=' . $post->imagen . ' alt="">
                    </div>
                    <div class="descrip">
                       <p class="descripcion-usuario">' .$post->descripcion .'</p>
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

      }
    }
  }
@endphp


        </div>

    </section>
    <aside>
      <div class="right-container">
      <div class="publicar">
        <form class="trabajo" action="" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <textarea class="publica" name="texto" placeholder="Mostrá tu trabajo"></textarea>
          <input class="publicacion" type="file" name="imagen" value="" required>
          <img class="compartir" src="css/imagenes/escribir.png" alt="Compartir">
          <input class="postear" type="submit" name="" value="Publicar">
        </form>
      </div>
    </div>
    </aside>
    @endsection
