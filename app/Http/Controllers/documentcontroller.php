<?php

namespace App\Http\Controllers;
use App\Models\ContactModel;
use Illuminate\Http\Request;

class documentcontroller extends Controller
{
    public function viewdocuments(){
        $contact=ContactModel::orderBy('created_at','desc')->paginate(10);

            return view('admin/documents',compact('contact'));
    }
}
