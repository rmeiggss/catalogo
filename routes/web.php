<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::view('welcome','prueba',['name'=>'Rossmery']);

Route::resource('movie','MovieController');*/


Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('contactenos','FrontController@contactenos');
Route::get('reviews','FrontController@reviews');
Route::resource('usuario','Admin\UsuarioController');
Route::resource('cotizacion', 'Admin\CotizacionController');
Route::resource('categoria','Admin\CategoriaController');
Route::resource('solicitante','Admin\SolicitanteController');

// -------- Rutas de marck --------------------
Route::resource('curso','Admin\CursoController');

Route::resource('instructor','Admin\InstructorController');

Route::resource('horario-curso','Admin\HorarioCursoController');

Route::resource('horario-instructor','Admin\HorarioInstructorController');

Route::resource('descuento','Admin\DescuentoController');
// --------------------------------------------

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');


