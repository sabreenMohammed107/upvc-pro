<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home_vedio extends Model
{
    protected $fillable = [
        'en_title',
        'ar_title',
        'vedio',
        'en_text',
        'ar_text',
    ];
}
