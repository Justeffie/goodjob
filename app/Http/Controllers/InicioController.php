<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Usuario;

class InicioController extends Controller

{
  protected $redirectTo = '/home';



    public function user(Request $request)
    {
      $usuario = Auth::user()->name;
      $user = Usuario::where('name','=',$usuario)->get();
      $view = view('inicio')->with('user', $user);
      return $view;
    }
}
