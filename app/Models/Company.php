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
        'about_en_company',
        'about_ar_company',
        'story_en_company',
        'story_ar_company',
        'mission_en_company',
        'mission_ar_company',
        'vision_en_company',
        'vision_ar_company',
        'about_image',
        'story_image',
        'mission_image',
        'vision_image',
        'company_catalogue_pdf',
        'company_profile_pdf',
        'ar_catalogue_pdf',
    ];
}
