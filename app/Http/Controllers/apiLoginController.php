<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Usuario;


class apiLoginController extends Controller
{
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
  }
}
