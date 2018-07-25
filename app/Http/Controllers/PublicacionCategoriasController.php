<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriasPublicacion;

class PublicacionCategoriasController extends Controller
{
  public function categoria(Request $request)
  {
    $cats = CategoriasPublicacion::all();
    $view = view('perfil')->with('cats', $cats);
    return $view;
  }
}
