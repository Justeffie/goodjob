<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Pelicula;
use Illuminate\Http\Request;


class ValidarController extends Controller

{
    public function formulario(Request $request)
    {
      $view = view('formulario');
      return $view;
    }

    public function validarFormulario(Request $request)
    {

      $validaciones = $this->validate($request, [
        'title' => 'required',
        'rating' => 'numeric',
        'awards' => 'numeric|integer',
        'lenght' => 'numeric',
        'release_date' => 'date',
      ],
      [
        'title.required' => 'El título es obligatorio',
        'rating.numeric' => 'El ratíng debe ser númerico',
        'awards.numeric' => 'Los premios deben ser númericos',
        'awards.integer' => 'Los premios deben ser números enteros',
        'lenght.numeric' => 'El largo debe ser numérico',
        'release_date.date' => 'Ponga bien la fecha de estreno',
      ]
    );

      $peli = Pelicula::where('title', '=', $request->input('title'))->first();
      if ($peli) {
            $peli->rating = $request->input('rating');
            $peli->awards = $request->input('awards');
            $peli->release_date = $request->input('release_date');

        } else {
            $peli = new Pelicula($request->except(['_token']));
        }

        $peli->save();


        return redirect('/agregar')
            ->with('exito', 'La pelicula ha sido guardada con éxito!');
      }


    }
