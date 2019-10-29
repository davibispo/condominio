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
Route::post('adm/permissoes', 'AdmController@permissoesUpdate');
Route::get('adm/permissoes', 'AdmController@permissoes')->name('adm.permissoes');
Route::get('adm/unidades', 'AdmController@unidades')->name('adm.unidades');
Route::resource('portaria', 'PortariaController');
Route::resource('adm', 'AdmController');
Route::resource('files', 'ArquivoController');
Route::get('moradores/{id}/atualizaMorador', 'MoradorController@atualizaMorador')->name('moradores.atualizaMorador');
Route::post('moradores/{id}/atualizaMorador', 'MoradorController@update');
Route::resource('moradores', 'MoradorController');
Route::resource('pets', 'PetController');
Route::resource('veiculos', 'VeiculoController');
Route::get('/unidades/{id}/edit-cadastro','UnidadeController@editCadastro')->name('unidades.edit-cadastro');
Route::post('/unidades/{id}/edit-cadastro','UnidadeController@updateCadastro');
Route::post('unidades/cadastro', 'UnidadeController@storeCadastro');
Route::get('unidades/cadastro', 'UnidadeController@cadastro')->name('unidades.cadastro');
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
