<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginauthenticate(Request $request){

        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
    }
}