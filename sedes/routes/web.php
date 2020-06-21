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
    //return view('welcome');
    return redirect()->route('login');
});

Auth::routes();




Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    //asignacion de permisos dinamicos
	Route::get('asignar_permiso/{configuracion}','AjaxController@asignar_permiso');
	route::post('asignaciones/remover', 'AsignacionesController@remover')->name('asignaciones.remover');
	route::post('asignaciones/asignar', 'AsignacionesController@asignar')->name('asignaciones.asignar');



    Route::get('indice_usuarios','UsuariosController@indice_usuarios')->name('indice_usuarios');
    Route::get('cambiar_estado/{id}','UsuariosController@cambiar_estado')->name('cambiar_estado');
    Route::get('nuevo_usuario','UsuariosController@nuevo_usuario')->name('nuevo_usuario');
    Route::post('guardar_usuario','UsuariosController@guardar_usuario')->name('guardar_usuario');
    Route::get('ver_usuario/{id}','UsuariosController@ver_usuario')->name('ver_usuario');

    Route::get('indice_permisos','PermisosController@indice_permisos')->name('indice_permisos');
    Route::get('nuevo_permiso','PermisosController@nuevo_permiso')->name('nuevo_permiso');
    Route::post('guardar_permiso','PermisosController@guardar_permiso')->name('guardar_permiso');





    Route::get('indice_pacientes','PacientesController@indice_pacientes')->name('indice_pacientes');
    Route::get('nuevo_paciente','PacientesController@nuevo_paciente')->name('nuevo_paciente');
    Route::post('guardar_paciente','PacientesController@guardar_paciente')->name('guardar_paciente');
    Route::get('editar_paciente/{id}','PacientesController@editar_paciente')->name('editar_paciente');
    Route::post('actualizar_paciente','PacientesController@actualizar_paciente')->name('actualizar_paciente');
    route::get('ver_paciente/{id}','PacientesController@ver_paciente')->name('ver_paciente');
    //route::get('nuevo_chequeo/{id}','PacientesController@nuevo_chequeo')->name('nuevo_chequeo');
    route::get('nuevo_chequeo/{id}','PacientesController@nuevo_chequeo')->name('nuevo_chequeo');
    route::post('guardar_chequeo','PacientesController@guardar_chequeo')->name('guardar_chequeo');
    route::get('ver_chequeo/{id}','PacientesController@ver_chequeo')->name('ver_chequeo');
    

    Route::get('indice_cuaderno_medico/{id}','CuadernosMedicosController@indice_cuaderno_medico')->name('indice_cuaderno_medico');
    Route::get('nuevo_registro_cuaderno_medico','CuadernosMedicosController@nuevo_registro_cuaderno_medico')->name('nuevo_registro_cuaderno_medico');
    Route::post('guardar_registro','CuadernosMedicosController@guardar_registro')->name('guardar_registro');
    Route::get('cuaderno_ver_registro/{id}','CuadernosMedicosController@cuaderno_ver_registro')->name('cuaderno_ver_registro');
    Route::post('actualizar_registro','CuadernosMedicosController@actualizar_registro')->name('actualizar_registro');


});