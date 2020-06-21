<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser()
    {
//        $user = new User();
//        $user->name = 'Igor Oliveira';
//        $user->email = 'joseigorso2010@gmail.com';
//        $user->password = Hash::make('123');
//        METHODO SAVE PARA SALVAR NO BANCO === É EQUIVALENTE AO INSERT DIRETAMENTE NO MYSQLI
//        $user->save();
//        echo "<h1>Lista de Usuarios</h1>";
//        NO FITRO DA BUSCA É SO COLOCAR O CAMPO, A CONDIÇÃO, E O ID(REFERENTE AO PRIMEIRO CAMPO(CAMPO))
        $user = User::where('id', '=', 1) ->first();
        return view('listUser', [
            'user' => $user
        ]);
    }
}
