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
      $usuario = Auth::user()->usuario;
      $user = Usuario::where('usuario','=',$usuario)->get();
      foreach ($user as $dato) {
        $id = $dato->id;
      }
      $post = DB::table('users')
      ->join('amistades', 'users.id', 'amistades.id_amigo')
      ->leftJoin('publicaciones', 'amistades.id_amigo', 'publicaciones.id_usuario')
      ->select('users.name', 'users.foto_perfil', 'users.usuario', 'publicaciones.descripcion', 'publicaciones.imagen', 'publicaciones.created_at')
      ->where('amistades.id_usuario', '=', $id)
      ->orderBy('publicaciones.created_at', 'DESC')
      ->get();
      $view = view('inicio')->with('user', $user)
      ->with('post', $post);
      return $view;
    }
}
