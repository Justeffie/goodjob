<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Publicacion;
use App\Models\Amistades;

class UsuarioController extends Controller
{
    public function lista(Request $request)
    {
      $usuarios = Usuario::paginate(10);
      $view = view('usuarios')
      ->with('usuarios', $usuarios);

      return $view;
    }

    public function info($id)
    {
      $usuario = Usuario::where('id', '=', $id)->get();
      $view = view('datosusuario')
      ->with('usuario', $usuario);

      return $view;

    }

    public function actualizar(Request $request, $id)
    {
      $usuario = Usuario::find($id);
      $usuario->nombre = $request->input('nombre');
      $usuario->apellido = $request->input('apellido');
      $usuario->usuario = $request->input('usuario');
      $usuario->email = $request->input('email');
      $file = $request->file('foto_perfil');
      if ($file) {
        $name = $id . "." . $file->extension();
        $folder = "fotoPerfil";
        $path = $file->storeAs($folder, $name, 'public');
        $usuario->foto_perfil = $path;
      } else {
        $usuario->foto_perfil = $request->input('foto_perfil');
      }
      $usuario->save();

      return redirect("/usuario/$id")
      ->with('exito', 'Sus datos han sido actualizados');

    }

    public function seguir(Request $request, $usuario) {
      $id = $request->input('id');
      $amigo = Usuario::find($id);
      $amigo = $amigo->usuario;
      if ($request->input('seguir')) {
        Amistades::create(
      [
        'id_amigo' => $id,
        'id_usuario' => \Auth::user()->id
      ]
    );
      }
      return redirect('/'.$amigo);
    }

// PARA DEJAR DE SEGUIR A UN USUARIO
        /*public function dejarDeSeguir(Request $request, $usuario) {
          $id = $request->input('id');
          $amigo = Usuario::find($id);
          $user = Usuario::where('usuario', 'LIKE', \Auth::user()->usuario);

          if ($request->input('seguido')) {
            Amistades::where('id_amigo', 'LIKE', $id)
            ->where('id_usuario', 'LIKE', \Auth::user()->id)
            ->delete();
          }
          $amigo = $amigo->usuario;
          return redirect('/'. $amigo);
        }*/


}
