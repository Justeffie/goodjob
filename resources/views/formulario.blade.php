@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach

    </ul>

  </div>

@endif

<html>
    <head>
        <title>Agregar Pelicula</title>
    </head>
    <body>
        <form id="agregarPelicula" action="/agregar"
        name="agregarPelicula" method="post">
          {{csrf_field()}}
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="title" id="titulo" value="{{old('title')}}"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating" value="{{old('rating')}}"/>
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="awards" id="premios" value="{{old('awards')}}"/>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="length" id="duracion" value="{{old('length')}}"/>
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <input type="date" name="release_date" value="" value="{{old('release_date')}}">
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>
    </body>
</html>
