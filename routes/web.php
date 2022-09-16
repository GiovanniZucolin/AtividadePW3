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

Route::get('/categoria','CategoriaController@index');

Route::get('/produto','ProdutoController@index');