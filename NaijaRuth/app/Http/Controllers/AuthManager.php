<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthManager extends Controller
{
    function login (){
        return view('auth.login');
    }


    function loginPost (Requests $request){

    }


    function register (){

    }


    function registerPost (Requests $request){

    }
}
