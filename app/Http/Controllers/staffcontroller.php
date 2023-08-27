<?php

namespace App\Http\Controllers;
use App\Models\StaffDetailModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ContactModel;

class staffcontroller extends Controller
{
    public function staff(){
        $alldata=StaffDetailModel::all();

        return view('staffs',compact('alldata'));
    }
    
    public function staffmanage(){
        $alldata=StaffDetailModel::all();
        $contact=ContactModel::orderBy('created_at','desc')->paginate(10);
        return view('admin/staff',compact('alldata','contact'));
    }


    public function saverecord(Request $request)
    {
        $validatedData=$request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|string',
            'address' => 'required|string',
            'profile_pic'=>'image',
             
        ]);

        if ($request->hasFile('profile_pic')) {
            $path = $request->file('profile_pic')->store('img', 'public');
        } else {
            $path = null; 
        }

        $save = StaffDetailModel::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'mobile' => $validatedData['mobile'],
            'address' => $validatedData['address'],
            'profile_picture' => $path,
            'bio' => $request['bio'],
        ]);

        if (!is_null($save)) {
            return back()->with('success', 'You have successfully saved the staff details!');
        } else {
            return back()->with('fail', 'Error Occurred!');
        }
    }




    public function deletestaff($id) {
        $staff = StaffDetailModel::find($id);
    
        if (!is_null($staff)) {
            $imagePath = $staff->profile_picture; // Get the image path
    
            if (!is_null($imagePath) && Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath); // Delete the image
            }
    
            $staff->delete(); // Delete the staff record
            return back()->with('success', 'You have deleted the staff record successfully');
        } else {
            return back()->with('fail', 'Error Occurred!');
        }
    }
    
    
}