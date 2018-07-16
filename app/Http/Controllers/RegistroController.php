<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Usuario;

class RegistroController extends Controller
{
    public function validacion(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:usuarios,email',
        'password' => 'required|string|min:6|confirmed',
        'apellido' => 'required',
        'usuario' => 'required|unique:usuarios,usuario',
        'nacimiento' => 'required|date',
        'foto_perfil' => 'image',

      ],
      [
        'nombre.required' => 'El campo nombre es obligtorio',
        'apellido.required' => 'El campo apellido es obligatorio',
        'usuario.required' => 'El campo usuario es obligatorio',
        'usuario.unique' => 'Este usuario ya está ocupado',
        'email.required' => 'El campo email es obligatorio',
        'email.email' => 'Por favor, complete con un mail valido',
        'email.unique' => 'Por favor, ingrese otro mail',
        'nacimiento.required' => 'El campo nacimiento es obligatorio',
        'nacimiento.date' => 'Por favor, complete con una fecha válida',
        'pass.required' => 'El campo contraseña es obligatorio',
        'foto_perfil' => 'La foto de perfil debe ser una imagen'
      ]);

      $usuario = new Usuario($request->except(['_token']));
      $usuario->pass = Hash::make($request->pass);
      $usuario->save();
      return redirect('/login')
          ->with('exito', 'Se ha registrado exitosamente!');
    }

    public function validacionLogin(Request $request)
    {
      $this->validate($request, [
        'email' => 'required',
        'password' => 'required'
      ],
    [
      'email.required' => 'Complete su email',
      'password.required' => 'Complete su contraseña'
    ]);

    $user = Usuario::where('email', '=', $request->email);
    if ($user) {
      foreach ($user as $dato) {
        $password = $dato->password;
        if (Hash::check($request->pass, $password)) {
          return redirect('/home')
              ->with('exito', 'Se ha registrado exitosamente!');
        }
      }

    }


    }
}
