@extends('layouts.aside')
@section('contenido')
    <section>
      <div class="container">
        @php
         if ($post->all() === []) {
              echo '<div class="buscar-amigos">
                <p>Todavía no tenés amigos. Comenzá a explorar...</p>
                <form class="search" action="" method="post">';
                  echo csrf_field();
                echo  '<input type="search" name="explorar" placeholder="Buscar"><img class="lupa" src="/css/imagenes/lupa2.png" alt="">
                </form>
              </div>';
            } else {
                foreach ($post as $dato) {
                  echo '<article class="publi-inicio">
                             <div class="id-user-amigo">
                               <div class="perfil-container"><img class="perfil-barralat" src=' . $dato->foto_perfil .' alt=""></div><p id="user-amigo">' . $dato->usuario. '</p>
                             </div>
                             <div class="img-amigos">
                               <img class="" src=' . $dato->imagen . ' alt="">
                              </div>';

                              if ($dato->descripcion) {
                                echo '<div class="descrip">
                                 <p class="descripcion-usuario">' .$dato->descripcion .'</p>
                              </div>';
                            }
                             echo '<div class="publi-amigos">
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
        @endphp
        </div>

    </section>
    <aside>
      <div class="right-container">
      <div class="publicar">
        <form class="trabajo" action="/home" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <textarea class="publica" name="texto" placeholder="Mostrá tu trabajo"></textarea>
          <input class="publicacion" type="file" name="imagen" value="" required>
          <img class="compartir" src="css/imagenes/escribir.png" alt="Compartir">
          <select name="id_categoria" class="id-categoria">
            <option value="">Categoría</option>
            @foreach ($cats as $categoria)
              <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
          </select>
          <input class="postear" type="submit" name="" value="Publicar">
        </form>
      </div>
    </div>
    </aside>
    @endsection
