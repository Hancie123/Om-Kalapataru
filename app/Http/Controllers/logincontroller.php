<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Session;

class logincontroller extends Controller
{
    public function login(){
        return view('login');

    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Session::flush();
        return redirect('/login');

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
            Session::put('user_id',$user->user_id);
            Session::put('name',$user->name);
            Session::put('role',$user->role);
            return redirect('home/dashboard')->with('success','Welcome');

        }
        else {
            return back()->with('fail','Password does not match!');
        }






    }
}