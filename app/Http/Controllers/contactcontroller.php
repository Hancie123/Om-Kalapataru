<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    public function contact(){
        return view('contact');
    }

    
}
