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

    public function delete(Request $request,$id){

        $contact=ContactModel::find($id)->first();
        if($contact){
            $contact->delete();
            return back()->with('success','You have deleted the inbox message successfully!');
        }
        else {
            return back()->with('fail','Unable to delete the inbox message');
        }

    }

    
}
