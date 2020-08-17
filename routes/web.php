<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});

Route::view('welcome','prueba',['name'=>'Rossmery']);*/

//Route::get('/','Auth\LoginController@showLoginForm')->name('login');
Route::get('/ensayos','WebController@ensayos');
Route::get('/calibraciones','WebController@calibraciones');
Route::get('/capacitaciones','WebController@capacitaciones');
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

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
Route::resource('cot_ensayos','Cliente\EnsayoController');
Route::resource('cot_calibraciones','Cliente\CalibracionController');
Route::resource('cot_capacitaciones','Cliente\CapacitacionController');

Route::resource('asesorias','Cliente\AsesoriaController');
Route::resource('servicio_academico','Cliente\ServicioAcademicoController');
// --------------------------------------------

// ------- RUTAS CLIENTE ---------------------
Route::view('/academico', 'cliente/academico')->name('academico');
Route::view('/asesorias', 'cliente/asesorias')->name('asesorias');
Route::view('/capacitaciones', 'cliente/capacitaciones')->name('capacitaciones');
Route::view('/servicios', 'cliente/servicios')->name('servicios');
Route::view('/', 'cliente/nosotros')->name('nosotros');
Route::view('/trabajadores', 'cliente/trabajadores')->name('trabajadores');
Route::view('/imagenes', 'cliente/imagenes')->name('imagenes');
Route::view('/equipos', 'cliente/equipos')->name('equipos');
Route::view('/eventos', 'cliente/eventos')->name('eventos');
Route::view('/responsabilidad', 'cliente/responsabilidad')->name('responsabilidad');
Route::view('/visitas', 'cliente/visitas')->name('visitas');
Route::view('/clientes', 'cliente/clientes')->name('clientes');
Route::view('/ubicacion', 'cliente/ubicacion')->name('ubicacion');
Route::view('/cot_ensayos', 'cliente/cot_ensayos')->name('cot_ensayos');
Route::view('/cot_calibraciones', 'cliente/cot_calibraciones')->name('cot_calibraciones');
Route::view('/cot_capacitaciones', 'cliente/cot_capacitaciones')->name('cot_capacitaciones');
//Route::view('/intranet_ensayos', 'cliente/intranet_ensayos')->name('intranet_ensayos');
//Route::view('/intranet_calibraciones', 'cliente/intranet_calibraciones')->name('intranet_calibraciones');
//Route::view('/intranet_capacitaciones', 'cliente/intranet_capacitaciones')->name('intranet_capacitaciones');
// -------------------------------------------

