<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vedio_gallery extends Model
{
    protected $fillable = [
        'vedio',
        'vedio_img',
        'order',
        'active',
    ];
}
