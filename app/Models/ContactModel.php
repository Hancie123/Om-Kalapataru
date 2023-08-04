<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;
    protected $table="contact";
    protected $primaryKey="contact_id";

    protected $fillable=['name','email','subject','message'];
}
