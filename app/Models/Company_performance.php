<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company_performance extends Model
{
    protected $primarykey='id';
    protected $fillable = [
        'en_title',
        'ar_title',
        'en_subTitle',
        'ar_subTitle',
        'image',
    ];
}
