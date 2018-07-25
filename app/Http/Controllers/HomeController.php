<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use App\Models\Usuario;

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
      $usuario = \Auth::user()->name;
      $user = Usuario::where('name','=',$usuario)->get();
        return view('inicio')->with('publi', $publi)
          ->with('user', $user);
    }
}
