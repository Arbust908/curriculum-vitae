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

Route::get('/experiencia', 'ExperienciaController@index');
Route::get('/experiencia/{id}', 'ExperienciaController@show');

Route::get('/habilidad', 'HabilidadController@index');
Route::get('/habilidad/{id}', 'HabilidadController@show');

Route::get('/idioma', 'IdiomaController@index');
Route::get('/idioma/{id}', 'IdiomaController@show');

Route::get('/red', 'RedController@index');
Route::get('/red/{id}', 'RedController@show');

Route::get('/trabajo', 'TrabajoController@index');
Route::get('/trabajo/{id}', 'TrabajoController@show');


// Pruebas
Route::get('/test1', 'HomeController@test1');
Route::get('/test2', 'HomeController@test2');
