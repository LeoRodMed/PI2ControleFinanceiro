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
    return view('welcome');
});

Route::resource('/categoria', 'CategoriaController');
Route::get('/categoria/{id}/destroy', 'CategoriaController@destroy');
Route::resource('/usuario', 'UsuarioController');
Route::get('/usuario/{id}/destroy', 'UsuarioController@destroy');
Route::resource('/movimento', 'MovimentoController');
Route::get('/movimento/{id}/destroy', 'MovimentoController@destroy');
Route::resource('/situacao', 'SituacaoController');
Route::get('/situacao/{id}/destroy', 'SituacaoController@destroy');
Route::resource('/parcela', 'ParcelaController');
Route::get('/parcela/{id}/destroy', 'ParcelaController@destroy');
Route::resource('/banco', 'BancoController');
Route::get('/banco/{id}/destroy', 'BancoController@destroy');
Route::resource('/forma_pagamento', 'Forma_PagamentoController');
Route::get('/forma_pagamento/{id}/destroy', 'Forma_PagamentoController@destroy');
Route::resource('/conta_banco', 'Conta_BancoController');
Route::get('/conta_banco/{id}/destroy', 'Conta_BancoController@destroy');
Route::resource('/baixa', 'BaixaController');
Route::get('/baixa/{id}/destroy', 'BaixaController@destroy');
