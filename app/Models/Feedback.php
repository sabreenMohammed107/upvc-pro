<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'en_name',
        'ar_name',
        'image',
        'en_review',
        'ar_review',
        'active',
    ];
}
