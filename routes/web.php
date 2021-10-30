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

/*  RUTAS DE USURAIO */
//Listado de Usuarios
Route::get('/', 'UserController@lista');
//Formulario de Usuarios
Route::get('/form','UserController@userform');
//Guardar Usuarios
Route::post('/save','UserController@save')->name('save');
//Eliminar Usuarios
Route::delete('/delete/{id}','UserController@delete')->name('delete');
//Formulario para editar usuarios
Route::get('/editform/{id}','UserController@editform')->name('editform');
//Edicion de usuarios
Route::patch('/edit/{id}','UserController@edit')->name('edit');

/*  RUTAS DE ROL  */
//Listado de Roles
Route::get('/listRol', 'RolController@listaRol');
//Formulario de Roles
Route::get('formRol', 'RolController@formRol');
//Create Rol
Route::post('/saveRol','RolController@saveRol')->name('saveRol');

