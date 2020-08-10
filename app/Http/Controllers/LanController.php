<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;

class LanController extends Controller
{
    //
    function index(){
        $user = Usuarios::all(); ;

        return view ('lan.index',compact('user'));

    }

    function adicionarUsuario(){

        $user = new Usuarios();
        $user->nome = \filter_input(INPUT_POST ,"nome");
        $user->email = \filter_input(INPUT_POST ,"email");
        $user->telefone = \filter_input(INPUT_POST ,"telefone");
        $user->data_nascimento = \filter_input(INPUT_POST ,"data_nascimento");
        $user->idade = \filter_input(INPUT_POST ,"idade");
        $user->save();

    }
}
