<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Usuario;


class PerfilController extends Controller
{


  public function index(Request $request, $usuario)
  {
    $user = Usuario::where('usuario','=',trim($usuario))->get();
    $post = '';
    foreach ($user as $dato) {
      if ($dato->publicacion()) {
        $post = $dato->publicacion()->orderBy('created_at', 'DESC')->paginate(12);
      }
    }
    $view = view('perfil')->with('user', $user)->with('post', $post);
    return $view;
  }
}
