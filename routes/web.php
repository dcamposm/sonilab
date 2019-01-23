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
Route::put('usuari', 'usuari\CU02_usuariController@auth');
Route::get('logout', 'CU01_loginController@logout');

Route::group(['middleware' => 'authUser'], function() {
    Route::group(['prefix' => 'usuari'], function () {
        Route::get('index', 'usuari\CU02_usuariController@index');
        Route::get('crear', 'usuari\CU03_afegirUsuariController@formCreate');
        Route::post('crear/formulari', 'usuari\CU03_afegirUsuariController@create');
        Route::get('modificar/{alias}', 'usuari\CU04_modificarUsuariController@formUpdate');
        Route::put('modificar/formulari/{alias}', 'usuari\CU04_modificarUsuariController@update');
        Route::get('eliminar/{alias}', 'usuari\CU05_eliminarUsuariController@delete');
    });

    Route::group(['prefix' => 'personal'], function () {
        Route::get('index', 'Personal\CU06_personalController@index');
        Route::get('crear', 'Personal\CU07_afegirPersonalController@formCreate');
        Route::post('crear/formulari', 'Personal\CU07_afegirPersonalController@create');
        Route::get('modificar/{rol}/{dni}', 'Personal\CU08_modificarPersonalController@formUpdate');
        Route::put('modificar/formulari/{rol}/{dni}', 'Personal\CU08_modificarPersonalController@update');
        Route::get('eliminar/{rol}/{dni}', 'Personal\CU09_eliminarPersonalController@delete');
    });
    
    Route::group(['prefix' => 'tarifa'], function () {
        Route::get('index/actor', 'Tarifa\CU10_tarifaController@indexActor');
        Route::get('index/traductor', 'Tarifa\CU10_tarifaController@indexTraductor');
        Route::get('crear/{rol}', 'Tarifa\CU11_afegirTarifaController@formCreate');
        Route::post('crear/formulari/{rol}', 'Tarifa\CU11_afegirTarifaController@create');
        Route::get('modificar/{rol}/{dni}/{idioma}', 'Tarifa\CU12_modificarTarifaController@formUpdate');
        Route::post('modificar/formulari/{rol}/{dni}/{idioma}', 'Tarifa\CU12_modificarTarifaController@update');
        Route::get('eliminar/{rol}/{dni}/{idioma}', 'Tarifa\CU13_eliminarTarifaController@delete');        
    });
});
