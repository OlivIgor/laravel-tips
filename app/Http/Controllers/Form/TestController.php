<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function listAllUsers()
    {
        $users = User::all();
        return view('listAllUsers', [
           'users' => $users
        ]);
    }
//    PARA FORÇA QUE ATRAVES DO GET(URL) SEJA PASSADA SOMENTE INFORMAÇÕES INTEIRAS É SO COLOCAR O INT
//    public function listUsers(int $user)
// FAZENDO COM QUE RECEBA SOMENTE INFORMAÇÕES DE USUARIO
    public function listUsers(User $user)
    {
        var_dump($user);
    }
}
