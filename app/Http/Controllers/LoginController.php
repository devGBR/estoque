<?php

namespace estoque\Http\Controllers;

;
use estoque\Http\Controllers\Controller;
use estoque\Http\Requests;

use Auth;
use Request;


class LoginController extends Controller
{
    public function login(){
        
        $credencias = request::only('email', 'password' );
        
        if(Auth::attempt($credencias)){
            return 'Usuario ' . Auth::user()->name . " logado com sucesso";
        }
        return "As credencias não são validas";
    }
    //
}
