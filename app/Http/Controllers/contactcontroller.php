<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Models\ContactModel;

class contactcontroller extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function viewcontact(){
        $contact=ContactModel::orderBy('created_at','desc')->paginate(10);
        return view('admin/view_contact',compact('contact'));
    }

    
}
