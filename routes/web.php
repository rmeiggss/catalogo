<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});

Route::view('welcome','prueba',['name'=>'Rossmery']);*/

Route::get('/','Auth\LoginController@showLoginForm')->name('login');
Route::get('/ensayos','WebController@ensayos');
Route::get('/calibraciones','WebController@calibraciones');
Route::get('/capacitaciones','WebController@capacitaciones');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::resource('usuario','Admin\UsuarioController');
Route::resource('cotizacion', 'Admin\CotizacionController');
Route::resource('categoria','Admin\CategoriaController');
Route::resource('solicitante','Admin\SolicitanteController');
Auth::routes();

// -------- Rutas de marck --------------------
// -------- Rutas del ADMIN
Route::resource('curso','Admin\CursoController');
Route::resource('instructor','Admin\InstructorController');
Route::resource('horario-curso','Admin\HorarioCursoController');
Route::resource('horario-instructor','Admin\HorarioInstructorController');
Route::resource('descuento','Admin\DescuentoController');
// --------- Rutas del CLIENTE
Route::resource('ensayos','Cliente\EnsayoController');
Route::resource('calibraciones','Cliente\EnsayoController');
Route::resource('capacitaciones','Cliente\EnsayoController');
// --------------------------------------------


