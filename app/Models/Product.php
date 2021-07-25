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
    public function Category()
    {
        return $this->belongsTo(Product_category::class,'category_id');
    }
    public function Product_img()
    {
        return $this->hasMany(Product_img::class);
    }
    public function Product_key_feature()
    {
        return $this->hasMany(Product_key_feature::class);
    }
}
