<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/agregar', 'ValidarController@formulario');
Route::post('/agregar', 'ValidarController@validarFormulario');
Route::get('/index', 'IndexController@index')->middleware('guest');
Route::get('/faq.php', 'IndexController@faq');
//Route::get('/login.php', 'Auth\LoginController@showLoginForm');
//Route::post('/login.php', 'Auth\LoginController@postlogin');

//Route::post('/login.php', 'RegistroController@validacionLogin');
//Route::get('/resgistrarte.php', 'Auth\RegisterController@showRegistrationForm');
//Route::post('/resgistrarte.php', 'RegistroController@validacion');
//Route::get('/inicio.php', 'IndexController@inicio');
//Route::get('/usuarios', 'UsuarioController@lista');
//Route::get('/usuario/{id}', 'UsuarioController@info');
//Route::post('/usuario/{id}', 'UsuarioController@actualizar');



Auth::routes();
Route::post('/seguir/{usuario}', 'UsuarioController@seguir')->middleware('auth');
Route::post('/dejarseguir/{usuario}', 'UsuarioController@dejarDeSeguir')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@postUsuario');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('/buscador', 'BuscadorController@index')->middleware('auth');
//Route::post('/buscador', 'BuscadorController@buscador')->middleware('auth');
//Route::get('/home', 'InicioController@user');
Route::get('/postear', 'PosteosController@index')->middleware('auth');
Route::post('/postear', 'PosteosController@postUsuario')->middleware('auth');
Route::get('/{usuario}', 'PerfilController@index')->name('perfil')->middleware('auth');
Route::get('/{usuario}/{imagen}', 'PosteosController@vistaPostUsuario')->middleware('auth');
Route::post('/{usuario}/{imagen}', 'PosteosController@borrar')->middleware('auth');

Route::get('/cantidadUsuario','UsuarioController@contarUser');
