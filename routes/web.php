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

Route::resource('notificacao-multas', 'NotificacaoMultaController');
Route::resource('ocorrencias', 'OcorrenciaController');
Route::resource('reservas', 'ReservaController');
Route::resource('locavel-areas', 'LocavelAreaController');
Route::resource('unidades', 'UnidadeController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
