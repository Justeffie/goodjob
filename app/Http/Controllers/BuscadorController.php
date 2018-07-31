<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class BuscadorController extends Controller
{
    public function index(Request $request)
    {
      $usuario = \Auth::user()->name;
      $user = Usuario::where('name','=',$usuario)->get();
      $usuarios = $request->input('explorar');
      if ($usuarios){
        $usuarios = \DB::table('users')->where('name', 'LIKE', '%'.$usuarios.'%')
        ->where('apellido', 'LIKE', '%'.$usuarios.'%')
        ->orWhere('name', 'LIKE', '%'.$usuarios.'%')
        ->orWhere('apellido', 'LIKE', '%'.$usuarios.'%')
        ->orWhere('usuario', 'LIKE', '%'.$usuarios.'%')
        ->orWhere('email', 'LIKE', '%'.$usuarios.'%')->paginate(10);

        return view('buscador')->with('usuarios', $usuarios)
        ->with('user', $user);
      } else {
        return view('buscador')->with('usuarios', [])
        ->with('user', $user);
      }


    }

    /*public function buscador(Request $request) {
      $usuario = \Auth::user()->name;
      $user = Usuario::where('name','=',$usuario)->get();
      $usuarios = $request->input('explorar');
      if ($usuarios){
        $usuarios = \DB::table('users')->where('name', 'LIKE', '%'.$usuarios.'%')
        ->where('apellido', 'LIKE', '%'.$usuarios.'%')
        ->orWhere('name', 'LIKE', '%'.$usuarios.'%')
        ->orWhere('apellido', 'LIKE', '%'.$usuarios.'%')
        ->orWhere('usuario', 'LIKE', '%'.$usuarios.'%')
        ->orWhere('email', 'LIKE', '%'.$usuarios.'%')->paginate(10);

        return view('buscador')->with('usuarios', $usuarios)
        ->with('user', $user);
      } else {
        return view('buscador')->with('usuarios', [])
        ->with('user', $user);
      }


    }*/
}
