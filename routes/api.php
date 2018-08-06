<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

<<<<<<< HEAD
Route::get('/login', 'apiLoginController@validarOK');

Route::get('/cantidadUsuario','UsuarioController@contarUser');
=======
Route::get('/login', 'apiLoginController@validarOK');*/

Route::get('/verificarusuario/{email}', 'ApiController@verificarMail');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
  });
>>>>>>> d358003f642df89695637e4b8fbc11dde13a9125
