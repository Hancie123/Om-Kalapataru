<?php

namespace App\Http\Controllers;
use App\Models\ContactModel;
use Illuminate\Http\Request;

class settingcontroller extends Controller
{
    public function settings(){
        $contact=ContactModel::orderBy('created_at','desc')->paginate(10);
        return view('admin/settings',compact('contact'));
    }
}
