<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home_slider extends Model
{
    protected $fillable = [
        'en_title',
        'ar_title',
        'image',
        'en_text',
        'ar_text',
        'order',
        'active',
    ];
}
