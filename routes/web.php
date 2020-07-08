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

//Route::get('/','UsuarioController@inicio');
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('contactenos','FrontController@contactenos');
Route::get('reviews','FrontController@reviews');

Route::post('usuario','UsuarioController@');



// -------- Rutas de marck --------------------
Route::get('curso/index','Admin\CursoController@index');
Route::resource('curso','Admin\CursoController');

Route::get('instructor/index','Admin\InstructorController@index');
Route::resource('instructor','Admin\InstructorController');

Route::get('horario-curso/index','Admin\HorarioCursoController@index');
Route::resource('horario-curso','Admin\HorarioCursoController');

Route::get('horario-instructor/index','Admin\HorarioInstructorController@index');
Route::resource('horario-instructor','Admin\HorarioInstructorController');

Route::get('descuento/index','Admin\DescuentoController@index');
Route::resource('descuento','Admin\DescuentoController');

// --------------------------------------------

Route::resource('categoria','Admin\CategoriaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('cotizacion/index','Admin\CotizacionController@index');
Route::resource('cotizacion', 'Admin\CotizacionController');
