<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class settingcontroller extends Controller
{
    public function settings(){
        return view('admin/settings');
    }
}
