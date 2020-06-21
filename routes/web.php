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
//QUANDO USUARIO DIGITAR NA URL 'LISTAGEM-USUARIO' ELE VAI BUSCAR OS DADOS EM CONTROLLER  QUE POR SUA VEZ O CONTROLER MANDA PARA A VIEW
//MANEIRA DE INTERAÇÃO ENTRE PAGINAS
    //Route::get('listagem-usuario', 'UserController@listUser');

// VERBALIZAÇÃO REST E INJEÇÃO DE DEPENDÊNCIAS
//VERBO GET
Route::get('usuarios', 'Form\\TestController@listAllUsers')->name('users.listAll');
Route::get('usuarios/{user}', 'Form\\TestController@listUsers')->name('users.listUser');
