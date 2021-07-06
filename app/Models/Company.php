<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
    'en_address',
    'ar_address',
    'phone',
    'mobile',
    'map_location',
    'email',
    'whatsapp',
    'header_en_address',
    'header_ar_address',
    'header_phone',
    'header_mobile',
    'facebook_url',
    'linkedin_url',
    'instgram_url',
    ];
}
