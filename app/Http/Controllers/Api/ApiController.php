<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class ApiController extends Controller
{

  public function verificarMail ($email){

      $cantidad = Usuario::where('email', '=', $email)->count();

      return response()->json ($cantidad);

    }
}
