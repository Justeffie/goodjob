<?php

namespace App\Http\Controllers;
use Iluminate\Suport\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Publicacion;
use App\Models\Usuario;
use App\Models\CategoriasPublicacion;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $publi = Publicacion::all();
      $cats = CategoriasPublicacion::all();
      $usuario = \Auth::user()->usuario;
      $user = Usuario::where('usuario','=',$usuario)->get();
      foreach ($user as $dato) {
        $id = $dato->id;
      }

      $post = \DB::table('users')
      ->join('amistades', 'users.id', 'amistades.id_amigo')
      ->leftJoin('publicaciones', 'amistades.id_amigo', 'publicaciones.id_usuario')
      ->select('users.name', 'users.apellido', 'users.foto_perfil', 'users.usuario', 'publicaciones.descripcion', 'publicaciones.imagen', 'publicaciones.created_at')
      ->where('amistades.id_usuario', '=', $id)
      ->orderBy('publicaciones.created_at', 'DESC')
      ->get();
        return view('inicio')->with('publi', $publi)
          ->with('user', $user)
          ->with('post', $post)
          ->with('cats', $cats);
    }

    public function postUsuario(Request $request){

      $this->validate($request, [
        'imagen' => 'required|image',
        'descripcion' => 'max:255',
      ],
      [ 'imagen.required' => 'La imagen es requerida',
        'imagen.image' => 'Debe ser una imagen',
        'descripcion.max:255' => 'Se excedió los caracteres máximos',
      ]);

      $ruta_imagen = $request->file('imagen')->store('fotosPosteos', 'public');
      $ruta_imagen = 'storage/' . $ruta_imagen;

      Publicacion::create(
        [ 'imagen' => $ruta_imagen,
          'descripcion' => $request->input('descripcion'),
          'id_usuario' => \Auth::user()->id,
          'id_categoria' => $request->input('id_categoria'),
        ]
      );


      return redirect('/home');
    }
}
