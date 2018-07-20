<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Usuario;

class PosteosController extends Controller
{

    public function index(Request $request){
      $usuario = Auth::user()->name;
      $user = Usuario::where('name','=',$usuario)->get();
      $view = view('posteos')->with('user', $user);
      return $view;
    }

    public function postUsuario(Request $request){
      $usuario = Auth::user()->name;
      $user = Usuario::where('name','=',$usuario)->get();
      $view = view('posteoUsuario')->with('user', $user);
      return $view;
    }
}
