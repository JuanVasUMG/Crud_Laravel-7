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

//Listado de Usuarios
Route::get('/', 'UserController@lista');
//Formulario de Usuarios
Route::get('/form','UserController@userform');
//Guardar Usuarios
Route::post('/save','UserController@save')->name('save');
//Eliminar Usuarios
Route::delete('/delete/{id}','UserController@delete')->name('delete');
