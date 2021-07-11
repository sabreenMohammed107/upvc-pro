<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs_tag extends Model
{
    //main settings
    
    protected $fillable = [
        'blog_id',
        'en_tag',
        'ar_tag',
    ];
}
