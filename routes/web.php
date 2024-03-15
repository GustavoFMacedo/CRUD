<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', ['as'=>'admin.funcionarios','uses'=>'App\Http\Controllers\admin\FuncionarioController@index']);

Route::get('/contato/{id?}',['uses'=>'App\Http\Controllers\ContatoController@index']);

Route::post('/contato',['uses'=>'App\Http\Controllers\ContatoController@index']);

Route::put('/contato',['uses'=>'App\Http\Controllers\ContatoController@index']);


Route::get('/admin/funcionarios',['as'=>'admin.funcionarios','uses'=>'App\Http\Controllers\admin\FuncionarioController@index']);
Route::get('/admin/funcionarios/adicionar',['as'=>'admin.funcionarios.adicionar','uses'=>'App\Http\Controllers\admin\FuncionarioController@adicionar']);
Route::post('/admin/funcionarios/salvar',['as'=>'admin.funcionarios.salvar','uses'=>'App\Http\Controllers\admin\FuncionarioController@salvar']);
Route::get('/admin/funcionarios/editar/{id}',['as'=>'admin.funcionarios.editar','uses'=>'App\Http\Controllers\admin\FuncionarioController@editar']);
Route::put('/admin/funcionarios/atualizar/{id}',['as'=>'admin.funcionarios.atualizar','uses'=>'App\Http\Controllers\admin\FuncionarioController@atualizar']);
Route::get('/admin/funcionarios/deletar/{id}',['as'=>'admin.funcionarios.deletar','uses'=>'App\Http\Controllers\admin\FuncionarioController@deletar']);
