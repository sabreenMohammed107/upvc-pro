<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //main settings
    
    protected $fillable = [
        'blog_date',
        'en_title',
        'ar_title',
        'en_text',
        'ar_text',
        'image',
        'thumbnail',
        'order',
        'active',
    ];
}
