@extends('layouts.index')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/faqstyle.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Frecuentes</title>
  </head>
  <body>
      @section('content')
    <section>
      <article class="">
        <h3>Preguntas Frecuentes</h3>
        <ul class="preguntas">
          <li class="faq">
            <input id="activar" name="activar" type="checkbox">
            <label class="inputlabel" for="activar">
              <h4>¿Qué es GJ?</h4>
              <img class="novisto" src="css/imagenes/novisto.png" alt="">
            </label>
            <p class="desplegable">GJ (Good Job) es un espacio que está dedicado a personas que necesitan un lugar en el cual expresarse y mostrar lo que saben hacer.</p>
          </li>
          <li class="faq">
            <input id="activar2" name="activar2" type="checkbox">
            <label class="inputlabel" for="activar2">
            <h4>¿Cualquier persona puede entrar?</h4>
            <img class="novisto" src="css/imagenes/novisto.png" alt="">
            </label>
            <p class="desplegable">GJ está destinado a amateurs, profesionales de distintos tipos de areas. Todo aquel que realice trabajos creativos y necesite de un lugar donde poder compartirlos.</p>
        </li>
        <li class="faq">
          <input id="activar3" name="activar3" type="checkbox">
          <label class="inputlabel" for="activar3">
          <h4>¿Cuáles son los beneficios de ser parte de GJ?</h4>
          <img class="novisto" src="css/imagenes/novisto.png" alt="">
          </label>
          <p class="desplegable">Te permite compartir tus trabajos con la <strong>comunidad</strong>, encontrar compañeros o colegas de tu mismo ámbito, establecer nuevos contactos y estar al tanto de lo que está buscando el <strong>mercado laboral</strong>.</p>
        </li>
        <li class="faq">
          <input id="activar4" name="activar4" type="checkbox">
          <label class="inputlabel" for="activar4">
          <h4>¿Se puede conseguir empleo a través de GJ?</h4>
          <img class="novisto" src="css/imagenes/novisto.png" alt="">
          </label>
          <p class="desplegable">En GJ podés encontrar los últimos anuncios del mercado. Además, posibilita que tanto tu perfil como tus trabajos se encuentren disponibles, y a la vista de pequeñas, medianas y grandes empresas que les guste lo que hacés y requieran de tu <strong>trabajo.</strong></p>
        </li>

        <li class="faq">
          <input id="activar5" name="activar5" type="checkbox">
          <label class="inputlabel" for="activar5">
          <h4>¿Que diferencias tiene GJ de otras paginas?</h4>
          <img class="novisto" src="css/imagenes/novisto.png" alt="">
          </label>
          <p class="desplegable">A diferencias de otros portales, GJ te permite mantener conversaciones con otros usuarios o futuros empleadores a través de mensajes privados, tanto en forma de audio como videollamadas.</p>
        </li>

      </ul>
      </article>
    </section>
    @endsection
  </body>
</html>
