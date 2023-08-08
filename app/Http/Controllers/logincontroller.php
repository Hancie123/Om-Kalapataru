<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

        $user=User::where('email',$request->email)->first();
        $checkuserstatus=User::where('email',$request->email)
        ->where('status','Active')->first();

        if(!$user){
            return back()->with('fail','The account does not exist!');
        }

        if(!$checkuserstatus){
            return back()->with('fail','Your account is disabled!');
        }

        if($user->password==$request->password && $user->status=='Active'){
            return back()->with('success','Welcome');

        }
        else {
            return back()->with('fail','Password does not match!');
        }






    }
}