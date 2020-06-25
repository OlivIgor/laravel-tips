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


// AGRUPAR ROTAS POR TIPO DE PAGINA
Route::group(['namespace' => 'Form'], function (){
    // VERBALIZAÇÃO REST E INJEÇÃO DE DEPENDÊNCIAS
//VERBO GET
    Route::get('usuarios', 'TestController@listAllUsers')->name('users.listAll');
    Route::get('usuarios/novo', 'TestController@formAddUser')->name('users.formAddUser');
    Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formEditUser');
    Route::get('usuarios/{user}', 'TestController@listUser')->name('users.listUser');

//VERBO POST
    Route::post('usuarios/store', 'TestController@storeUser') ->name('users.store');

// VERBO PUT/PATCH
// PARA USAR COMO  PATCH É SO TROCAR O PUT PELO PATCH
    Route::put('usuarios/edit/{user}', 'TestController@edit') ->name('users.edit');

//VERBO DELETE
    Route::delete('usuarios/detroy/{user}', 'TestController@destroy') ->name('users.destroy');
});

////FAZENDO SEPARADAS
//// VERBALIZAÇÃO REST E INJEÇÃO DE DEPENDÊNCIAS
////VERBO GET
//Route::get('usuarios', 'Form\\TestController@listAllUsers')->name('users.listAll');
//Route::get('usuarios/novo', 'Form\\TestController@formAddUser')->name('users.formAddUser');
//Route::get('usuarios/editar/{user}', 'Form\\TestController@formEditUser')->name('users.formEditUser');
//Route::get('usuarios/{user}', 'Form\\TestController@listUser')->name('users.listUser');
//
////VERBO POST
//Route::post('usuarios/store', 'Form\\TestController@storeUser') ->name('users.store');
//
//// VERBO PUT/PATCH
//// PARA USAR COMO  PATCH É SO TROCAR O PUT PELO PATCH
//Route::put('usuarios/edit/{user}', 'Form\\TestController@edit') ->name('users.edit');
//
////VERBO DELETE
//Route::delete('usuarios/detroy/{user}', 'Form\\TestController@destroy') ->name('users.destroy');
