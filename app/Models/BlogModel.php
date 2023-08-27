<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class BlogModel extends Model
{
    use HasSlug;

    use HasFactory;
    
    protected $table="blogs";
    protected $primaryKey="blog_id";

    protected $fillable=['title','slug','category','content','blog_image','status'];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
