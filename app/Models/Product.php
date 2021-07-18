<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'en_name',
        'ar_name',
        'master_image',
        'category_id',
        'en_description',
        'ar_description',
        'thickness',
        'chambers',
        'glass',
        'product_details_img',
        'product_profile_img',
    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Product_category','category_id');
    }
}
