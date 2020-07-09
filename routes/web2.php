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

Route::get('curso/index','Admin\CursoController@index');
Route::resource('curso','Admin\CursoController');

Route::resource('categoria','Admin\CategoriaController');
Route::resource('solicitante','Admin\solicitanteController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('cotizacion/index','Admin\CotizacionController@index');
Route::resource('cotizacion', 'Admin\CotizacionController');
