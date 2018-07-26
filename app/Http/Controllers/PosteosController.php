<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Publicacion;
use App\Models\CategoriasPublicacion;

class PosteosController extends Controller
{

    public function index(Request $request){
      $usuario = Auth::user()->name;
      $user = Usuario::where('name','=',$usuario)->get();

      $cats = CategoriasPublicacion::all();

      $view = view('posteos')->with('user', $user)
        ->with('cats', $cats);
      return $view;
    }

    public function postUsuario(Request $request){

      $this->validate($request, [
        'imagen' => 'required|image',
        'descripcion' => 'string|max:255',
      ],
      [ 'imagen.required' => 'La imagen es requerida',
        'imagen.image' => 'Debe ser una imagen',
        'descripcion.max:255' => 'Se excedió los caracteres máximos',
      ]);

      $ruta_imagen = $request->file('imagen')->store('fotosPosteos', 'public');

      Publicacion::create(
        [ 'imagen' => $ruta_imagen,
          'descripcion' => $request->input('descripcion'),
          'id_usuario' => Auth::user()->id,
          'id_categoria' => $request->input('id_categoria'),
        ]
      );


      return redirect('/home');
    }

    public function vistaPostUsuario(Request $request){
     $usuario = Auth::user()->name;
     $user = Usuario::where('name','=',$usuario)->get();
     $view = view('posteoUsuario')->with('user', $user);
     return $view;
   }
}
