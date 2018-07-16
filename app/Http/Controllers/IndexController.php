<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
      $view = view('index');
      return $view;
    }

    public function faq(Request $request)
    {
      return view('faq');
    }

    public function login(Request $request)
    {
      return view('login');
    }

    public function registro(Request $request)
    {
      return view('resgistrarte');
    }

    public function inicio(Request $request)
    {
      return view('inicio');
    }
}
