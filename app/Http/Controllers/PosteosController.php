<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Publicacion;

class PosteosController extends Controller
{

    public function index(Request $request){
      $usuario = Auth::user()->name;
      $user = Usuario::where('name','=',$usuario)->get();
      $view = view('posteos')->with('user', $user);
      return $view;
    }

    public function postUsuario(Request $request){

      $this->validate($request, [
        'imagen' => 'required|image',
        'descripcion' => 'required|string|max:255',
      ],
      [ 'imagen.required' => 'La imagen es requerida',
        'imagen.image' => 'Debe ser una imagen',
        'descripcion.required' => 'La descripcion es requerida',
      ]);

      $ruta_imagen = $request->file('imagen')->store('fotosPosteos', 'public');

      Publicacion::create(
        [ 'imagen' => $ruta_imagen,
          'descripcion' => $request->input('descripcion'),
          'id_usuario' => Auth::user()->id
        ]
      );


      return redirect('/home');
    }
}
