<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffDetailModel extends Model
{
    use HasFactory;
    protected $table="staff_details";
    protected $primarykey="staffdetail_id";
    protected $fillable=['name','email','mobile','address','bio','profile_picture','is_active'];
}
