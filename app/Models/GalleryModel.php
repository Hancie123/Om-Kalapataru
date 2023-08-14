<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryModel extends Model
{
    use HasFactory;
    protected $table="gallery";
    protected $primaryKey="gallery_id";
    protected $fillable = [
        'gallery_id',
        'title',
        'image_path',
        
    ];

  
    
}
