<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

class dashboardcontroller extends Controller
{
    public function dashbaord(){
        $contact=ContactModel::orderBy('created_at','desc')->paginate(10);
        
        return view('admin/dashboard',compact('contact'));
    }
}
