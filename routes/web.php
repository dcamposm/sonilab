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

Route::get('/', 'CU01_loginController@login');

Route::group(['prefix' => 'usuari'], function () {
    Route::get('index', 'C02_usuariController@index');
    Route::get('crear', 'C03_afegirUsuariController@formCreate');
    Route::post('crear/formulari', 'C03_afegirUsuariController@create');
    Route::get('modificar', 'C04_modificarUsuariController@formUpdate');
    Route::post('modificar/{alias}', 'C04_modificarUsuariController@update');
    Route::get('eliminar', 'C05_eliminarUsuariController@delete');
});

Route::group(['prefix' => 'personal'], function () {
    Route::get('index', 'C06_personalController@index');
    Route::get('crear', 'C07_afegirPersonalController@formCreate');
    Route::post('crear/formulari', 'C07_afegirPersonalController@create');
    Route::get('modificar', 'C08_modificarPersonalController@formUpdate');
    Route::post('modificar/{alias}', 'C08_modificarPersonalController@update');
    Route::get('eliminar', 'C09_eliminarPersonalController@delete');
});