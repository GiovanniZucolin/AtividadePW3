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

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/produto', function () {
    return view('produto');
});

Route::get('/pedido', function () {
    return view('pedido');
});

Route::get('/categoria', function () {
    return view('categoria');
});


Route::get('/contato', 'ContatoController@index');
Route::get('/contato/{id}','ContatoController@destroy');
Route::get('/contato-editar/{id}/editar','ContatoController@edit');
Route::post('/contato-alterar/{id}', 'ContatoController@update');

Route::get('/categoria','CategoriaController@index');
Route::get('/categoria/{id}','CategoriaController@destroy');
Route::get('/categoria-editar/{id}/editar','CategoriaController@edit');
Route::post('/categoria-alterar/{id}', 'CategoriaController@update');

Route::get('/produto','ProdutoController@index');
Route::get('/produto/{id}','ProdutoController@destroy');
Route::get('/produto-editar/{id}/editar','ProdutoController@edit');
Route::post('/produto-alterar/{id}', 'ProdutoController@update');

Route::get('/pedido','PedidoController@index');

Route::post('/contato/inserir','ContatoController@store');

Route::post('/categoria/inserir','CategoriaController@store');

Route::post('/pedido/inserir','PedidoController@store');

Route::post('/produto/inserir','ProdutoController@store');

Route::post('/welcome/pesquisa', 'ProdutoController@show');