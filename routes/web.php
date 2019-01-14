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
    Route::get('index', 'usuari\CU02_usuariController@index');
    Route::get('crear', 'usuari\CU03_afegirUsuariController@formCreate');
    Route::post('crear/formulari', 'usuari\CU03_afegirUsuariController@create');
    Route::get('modificar/{alias}', 'usuari\CU04_modificarUsuariController@formUpdate');
    Route::post('modificar/formulari/{alias}', 'CU04_modificarUsuariController@update');
    Route::get('eliminar/{alias}', 'C05_eliminarUsuariController@delete');
});

Route::group(['prefix' => 'personal'], function () {
    Route::get('index', 'Personal\CU06_personalController@index');
    Route::get('crear', 'Personal\CU07_afegirPersonalController@formCreate');
    Route::post('crear/formulari', 'CU07_afegirPersonalController@create');
    Route::get('modificar/{alias}', 'Personal\CU08_modificarPersonalController@formUpdate');
    Route::post('modificar/formulari/{alias}', 'CU08_modificarPersonalController@update');
    Route::get('eliminar/{alias}', 'CU09_eliminarPersonalController@delete');
});
