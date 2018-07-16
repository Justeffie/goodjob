<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Usuario;

class PerfilController extends Controller
{
  public function index(Request $request)
  {
    $usuario = Auth::user()->name;
    $user = Usuario::where('name','=',$usuario)->get();
    $view = view('perfil')->with('user', $user);
    return $view;
  }
}
