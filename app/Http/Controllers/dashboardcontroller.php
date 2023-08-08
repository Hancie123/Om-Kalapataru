<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function dashbaord(){
        return view('admin/dashboard');
    }
}
