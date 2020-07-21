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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ajuda', function () {
    return view('ajuda');
});

Route::resource('/produtos', 'ProdutoController');

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verificar')->name('login.verificar');
Route::get('/login/{id}', 'LoginController@logout')->name('login.logout');

Route::resource('/conta', 'ContaController')->middleware('auth');


Route::get('carrinho/', 'CarrinhoController@index')->name('carrinho.index');
Route::get('carrinho/{idProduto}/{qt}', 'CarrinhoController@addProduto')->name('carrinho.addProduto');

Route::put('carrinho/atualizarProduto', 'CarrinhoController@atualizarProduto')->name('carrinho.atualizarProduto');
Route::delete('carrinho/removerProduto', 'CarrinhoController@removerProduto')->name('carrinho.removerProduto');


