Esta es la lista de usuarios:
<ul>
  @foreach ($usuarios as $usuario)
    <li><a href="/usuario/{{$usuario->id}}">{{$usuario->nombre}}, {{$usuario->apellido}}</a></li>
    <br>
    <ul>
      @foreach ($usuario->publicacion as $publicacion)
      <li>{{$publicacion->descripcion}}</li>
      <br>
      @endforeach
    </ul>
  @endforeach
</ul>
<br>

<nav aria-label="Search results page">
{{$usuarios->links()}}
</nav>
