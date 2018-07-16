@extends('layouts.encabezado')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/iniciostyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Configuración</title>
    <style media="screen">
      .btn-mio,
      .btn-mio:hover,
      .btn-mio:active {
        background: orange;
      }
      h1 {
        font-family: "Lobster";
        color: orange;
        font-size: 1.8rem;
        float: right;
      }
    </style>
  </head>
  <body>

    <div class="container m-auto p-auto">
      <div class="row justify-content-center mt-5 pt-5">
        <div class="col-md-7">
          <h2 class="display-4">Datos personales</h2>
          <hr class="bg-info">
          <form class="" action="/usuario/@foreach ($usuario as $dato)
            {{$dato->id}}
          @endforeach" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
            <div class="row form-group">
              <label for="nombre" class="form-label col-md-4">Nombre:</label>
                <div class="col-md-8">
                  <input type="text" name="nombre" id="nombre" class="form-control" value="@foreach ($usuario as $dato)
                    {{$dato->nombre}}
                  @endforeach">
                </div>
            </div>
            <div class="row form-group">
              <label for="apellido" class="form-label col-md-4">Apellido:</label>
                <div class="col-md-8">
                  <input type="text" name="apellido" id="apellido" class="form-control" value="@foreach ($usuario as $dato)
                    {{$dato->apellido}}
                  @endforeach">
                </div>
            </div>
            <div class="row form-group">
              <label for="usuario" class="form-label col-md-4">Usuario:</label>
                <div class="col-md-8">
                  <input type="text" name="usuario" id="usuario" class="form-control" value="@foreach ($usuario as $dato)
                    {{$dato->usuario}}
                  @endforeach">
                </div>
            </div>
            <div class="row form-group">
              <label for="email" class="form-label col-md-4">E-mail:</label>
                <div class="col-md-8">
                  <input type="text" name="email" id="email" class="form-control" value="@foreach ($usuario as $dato)
                    {{$dato->email}}
                  @endforeach">
                </div>
            </div>
            <div class="row form-group">
              <label for="foto_perfil" class="form-label col-md-4">Subir otra foto de perfil:</label>
                <div class="col-md-8">
                  <input type="file" name="foto_perfil" id="foro_perfil" class="form-control" value="">
                </div>
            </div>
            <button type="submit" class="btn btn-mio" name="enviar">Guardar</button>
          </form>
        </div>
      </div>
    </div>

  </body>
</html>
