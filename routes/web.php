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

Route::get('/','UsuarioController@inicio');
Route::get('contactenos','FrontController@contactenos');
Route::get('reviews','FrontController@reviews');

Route::post('usuario','UsuarioController@');

Route::get('producto/index','Admin\ProductoController@index');
Route::resource('producto','Admin\ProductoController');
Route::resource('categoria','Admin\CategoriaController');