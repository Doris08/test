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

//inicio
Route::get('/', 'MedicamentoController@index')->name('inicio');

// Rutas para crud de médico
Route::resource('medicamento', 'MedicamentoController')-> names('medicamento');


Route::get('/form/medico', 'reportesController@form_medico')->name('medico.form');
Route::get('/form/medico/{id}', 'reportesController@report_medico')->name('medico.report');

Route::get('/form/establecimiento', 'reportesController@form_establecimiento')->name('establecimiento.form');
Route::get('/form/establecimiento/{id}', 'reportesController@report_establecimiento')->name('establecimiento.report');