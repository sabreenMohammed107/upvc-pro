<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upvc_number extends Model
{
    protected $fillable = [
        'en_name',
        'ar_name',
        'no_value',
        'active',
    ];
}
