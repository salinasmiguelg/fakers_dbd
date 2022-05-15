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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cursos','App\Http\Controllers\CursosController@index');
Route::get('/cursos/id','App\Http\Controllers\CursosController@show');
Route::post('/cursos/create','App\Http\Controllers\CursosController@create');
Route::put('/cursos/update','App\Http\Controllers\CursosController@update');
Route::delete('/cursos/delete','App\Http\Controllers\CursosController@destroy');

Route::get('/cursos/id/five','App\Http\Controllers\CursosController@showFirst');

Route::get('/secciones','App\Http\Controllers\SeccionsController@index');
Route::get('/alumnos','App\Http\Controllers\AlumnosController@index');