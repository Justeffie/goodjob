<?php

namespace App\Http\Controllers\Auth;

use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('resgistrarte');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users,email',
          'password' => 'required|string',
          'apellido' => 'required',
          'usuario' => 'required|unique:users,usuario',
          'nacimiento' => 'required|date',
          'avatar' => 'image',

        ],
        [
          'name.required' => 'El campo nombre es obligtorio',
          'apellido.required' => 'El campo apellido es obligatorio',
          'usuario.required' => 'El campo usuario es obligatorio',
          'usuario.unique' => 'Este usuario ya está ocupado',
          'email.required' => 'El campo email es obligatorio',
          'email.email' => 'Por favor, complete con un mail valido',
          'email.unique' => 'Por favor, ingrese otro mail',
          'nacimiento.required' => 'El campo nacimiento es obligatorio',
          'nacimiento.date' => 'Por favor, complete con una fecha válida',
          'password.required' => 'El campo contraseña es obligatorio',
          'avatar' => 'La foto de perfil debe ser una imagen'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Usuario
     */
    protected function create(array $data)
    {
      $imagen= '/storage/fotoPerfil/1.png';
      if (isset($data['avatar'])) {
        $folder= 'fotoPerfil';
        $imagen = $data['usuario'] . '.' . $data['avatar']->extension();
        $path = $data['avatar']->storeAs($folder, $imagen, 'public');
        $imagen = "/storage/" . $folder . '/' . $imagen;
      }
        return Usuario::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'apellido' => $data['apellido'],
            'usuario' => $data['usuario'],
            'nacimiento' => $data['nacimiento'],
            'foto_perfil' => $imagen,
        ]);
    }
}
