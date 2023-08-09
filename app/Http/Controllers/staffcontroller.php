<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staffcontroller extends Controller
{
    public function staffmanage(){
        return view('admin/staff');
    }
}
