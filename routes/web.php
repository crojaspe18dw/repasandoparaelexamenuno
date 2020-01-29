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
    return view('prueba');
});



//controlador de recursos para los proyectos
Route::resource('proyectos','proyectos_controller');


//controlador de recursos para los empleados
Route::resource('empleados','controlador_empleados');