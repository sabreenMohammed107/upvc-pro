<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_img extends Model
{
   protected $guarded = ['id'];

   protected $fillable = [
    'image',
    'order',
    'product_id',
];

    public function Product()
    {
        return $this->belongsTo(Product::class,'product_id');

    }


}
