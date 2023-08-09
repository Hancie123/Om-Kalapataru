<?php

namespace App\Http\Controllers;
use App\Models\StaffDetailModel;
use Illuminate\Http\Request;

class staffcontroller extends Controller
{
    public function staff(){
        $alldata=StaffDetailModel::all();

        return view('staffs',compact('alldata'));
    }
    
    public function staffmanage(){
        return view('admin/staff');
    }
}
