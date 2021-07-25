<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_key_feature extends Model
{
    protected $guarded = ['id'];

   protected $fillable = [
    'en_title',
    'ar_title',
    'en_feature',
    'ar_feature',
    'order',
    'product_id',
];

    public function Product()
    {
        return $this->belongsTo(Product::class,'product_id');

    }
}
